@extends('templates.master')

@section('content-center')
<div class="modal-dialog" role="document">
<div class="modal-content rounded-4 shadow">
    <div class="modal-body p-5 pt-0">
        <x-authentication-card>
            <x-slot name="logo"></x-slot>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="modal-body p-5 pt-0">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-floating mb-3">
                    <x-input id="floatingEmail" class="form-control rounded-3" type="email" placeholder="name@example.com" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-label for="floatingEmail" value="{{ __('auth.Email') }}" />
                </div>

                <div class="form-floating mb-3">
                    <x-input id="floatingPassword" class="form-control rounded-3" type="password" name="password" placeholder="password" required autocomplete="current-password" />
                    <x-label for="floatingPassword" value="{{ __('auth.Password') }}" />
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('auth.Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                <x-button class="btn btn-primary">
                        {{ __('auth.Log in') }}
                    </x-button>
</div>
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('auth.Forgot your password?') }}
                        </a>
                    @endif  
</div>
                   
<div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                        {{ __('auth.Create Account') }}
                    </a>
                </div>
            </form>
</div>
        </x-authentication-card>
    </div>
</div>
</div>


@endsection
