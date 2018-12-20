@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                   <strong>{{ __('auth.Verify Your Email Address') }}</strong>
                </h5>

                <div class="card-body px-lg-5 pt-0">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('auth.A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('auth.Before proceeding, please check your email for a verification link.') }}
                    {{ __('auth.If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('auth.click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
