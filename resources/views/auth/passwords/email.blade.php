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
                <h1 class="title">Reset Password</h1>

                <form action="{{ route('password.email')}}" method="POST">
                    {{csrf_field()}}
                    {{--                email--}}
                    <div class="field">
                        <label class="label">Email Adress</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input {{$errors->has('email') ? 'is-danger' : '' }}" type="email"
                                   placeholder="abc@xyz.com" value="{{old('email')}}" name="email">
                            <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                            @if($errors->has('email') ? 'is-danger' : '' )
                                <span class="icon is-small is-right">
                            <i class="fa fa-exclamation-triangle"></i>
                            </span>
                            @endif
                        </div>
                        @if($errors->has('email'))
                            <p class="help is-danger">{{$errors->first('email')}}</p>
                        @endif
                    </div>

                    <div class="field is-grouped m-t-20">
                        <button class="button is-link is-fullwidth">Get password reset link</button>
                    </div>
                </form>
            </div>
            <h5 class="has-text-centered">
                <a href="{{route('login')}}" class="is-muted">
                    <i class="fa fa-caret-left"></i>
                    Back to login
                </a></h5>
        </div>
    </div>

@endsection


{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}
{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
