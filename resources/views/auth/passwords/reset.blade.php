@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="notification is-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="columns is-centered">
        <div class="column is-half-tablet is-one-third-desktop">
            <div class="box m-t-50 m-l-20 m-r-20">
                <h1 class="title">Create New Password</h1>
                <form action="{{route('register')}}" method="POST">
                    {{csrf_field()}}
                    <input type="hidden" name="token" value="{{ $token }}">
                    {{--                email--}}
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input {{$errors->has('email') ? 'is-danger': ''}}" type="email"
                                   placeholder="abc@xyz.com" value="{{old('email')}}" name="email" required
                                   autocomplete="new-password">
                            <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                            <span class="icon is-small is-right">
                          <i class="fa fa-exclamation-triangle"></i>
                        </span>
                        </div>
                        {{--                    errors--}}
                        @if($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>

                    <div class="columns">
                        <div class="column">
                            {{--                password--}}
                            <div class="field">
                                <label class="label">New Password</label>
                                <div class="control">
                                    <input class="input {{$errors->has('password') ? 'is-danger': ''}}" type="password"
                                           value="{{old('password')}}" name="password"
                                           required autocomplete="new-password">
                                </div>
                                {{--                    errors--}}
                                @if($errors->has('password'))
                                    <p class="help is-danger">{{$errors->first('password')}}</p>
                                @endif
                            </div>
                        </div>
                        <div class="column">
                            {{--                    confirmed password--}}
                            <div class="field">
                                <label class="label">Comfirm New Password</label>
                                <div class="control">
                                    <input class="input {{$errors->has('password_confirmation') ? 'is-danger': ''}}"
                                           type="password" name="password_confirmation" required>
                                </div>
                                {{--                    errors--}}
                                @if($errors->has('password_confirmation'))
                                    <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                                @endif
                            </div>
                        </div>
                    </div>


                    <div class="field is-grouped m-t-20">
                        <button class="button is-link is-fullwidth">Sign up</button>
                    </div>
                </form>
            </div>
            <h5 class="has-text-centered"><a href="{{route('login')}}" class="is-muted">Already have account | login</a>
            </h5>
        </div>
    </div>
@endsection

{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}

{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}
{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('password.update') }}">--}}
{{--                        @csrf--}}

{{--                        <input type="hidden" name="token" value="{{ $token }}">--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Reset Password') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
