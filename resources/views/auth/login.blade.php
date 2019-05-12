@extends('layouts.app')

@section('content')
    <div class="columns is-centered">
        <div class="column is-half-tablet is-one-third-desktop">
            <div class="box m-t-50 m-l-20 m-r-20">
                <h1 class="title">Login</h1>

                <form action="{{route('login')}}" method="POST">
                    {{csrf_field()}}
                    {{--                email--}}
                    <div class="field">
                        <label class="label">Email</label>
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

                    {{--                password--}}
                    <div class="field">
                        <label class="label">Password</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input {{$errors->has('password')? 'is-danger' :''}}" type="password"
                                   value="{{old('password')}}" name="password">
                            <span class="icon is-small is-left">
                          <i class="fa fa-key" aria-hidden="true"></i>
                        </span>
                            @if($errors->has('password') ? 'is-danger' : '' )
                                <span class="icon is-small is-right">
                                  <i class="fa fa-exclamation-triangle"></i>
                                </span>
                            @endif

                        </div>
                        @if($errors->has('password'))
                            <p class="help is-danger">{{$errors->first('password')}}</p>
                        @endif

                    </div>
                    {{--                remember me--}}
                    <label class="checkbox">
                        <input type="checkbox" name="remember-me">
                        Remember me
                    </label>
                    <div class="field is-grouped m-t-20">
                        <button class="button is-link is-fullwidth">Log in</button>
                    </div>
                </form>
            </div>
            <h5 class="has-text-centered"><a href="{{route('password.request')}}" class="is-muted">Forgot your
                    password?</a></h5>
        </div>

    </div>
@endsection
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

