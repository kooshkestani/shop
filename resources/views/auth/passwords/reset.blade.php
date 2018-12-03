@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>{{ __('Reset Password') }}</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                    <form class="text-center" style="color: #757575;" method="POST" action="{{ route('password.update') }}">
                    @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                    <!-- Email -->
                        <div class="md-form">
                            <input type="email" id="materialLoginFormEmail"
                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                   value="{{ old('email') }}" required autofocus>
                            <label for="materialLoginFormEmail">{{ __('E-Mail Address') }}</label>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <!-- Confirm Password -->
                        <div class="md-form">
                            <input type="password" id="materialRegisterFormPassword" class="form-control" name="password_confirmation" required>
                            <label for="materialRegisterFormPassword">{{ __('Confirm Password') }}</label>

                        </div>
                        <!-- Reset Password -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">
                            {{ __('Reset Password') }}
                        </button>
                    </form>
                    <!-- Form -->

                </div>

            </div>

        </div>
    </div>
</div>
@endsection
