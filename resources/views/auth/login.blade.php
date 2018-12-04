@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

                <!-- Material form login -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>{{ __('Login') }}</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email -->
                            <div class="md-form">
                                <input type="email"  name="email" id="materialLoginFormEmail"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       value="{{ old('email') }}" required autofocus>
                                <label for="materialLoginFormEmail">{{ __('E-Mail Address') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="md-form">
                                <input type="password"  name="password" id="materialLoginFormPassword"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        required>
                                <label for="materialLoginFormPassword">{{ __('Password') }}</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="d-flex justify-content-around">
                                <div>
                                    <!-- Remember me -->
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                               id="materialLoginFormRemember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label"
                                               for="materialLoginFormRemember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <div>
                                    <!-- Forgot password -->
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                    type="submit">{{ __('Login') }}</button>

                            <!-- Register -->
                            <p>Not a member?
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </p>

                            <!-- Social login -->
                            <p>or sign in with:</p>
                            <a type="button" class="btn-floating btn-fb btn-sm">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a type="button" class="btn-floating btn-li btn-sm">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a type="button" class="btn-floating btn-git btn-sm">
                                <i class="fa fa-github"></i>
                            </a>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form login -->

            </div>
        </div>
    </div>

@endsection
