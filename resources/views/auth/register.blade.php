@extends('templates.master')

@section('content-center')
<div class="modal-dialog" role="document">
<div class="modal-content rounded-4 shadow">
    <div class="modal-body p-5 pt-0">
<x-authentication-card>
    <x-slot name="logo"></x-slot>

    <x-validation-errors class="mb-4" />

    <div class="modal-body p-5 pt-0">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-floating mb-3">

            <x-input id="name" class="form-control rounded-3" placeholde="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-label for="name" value="{{ __('auth.Name') }}" />
        </div>

        <div class="form-floating mb-3">
            
            <x-input id="floatingEmail" class="form-control rounded-3" type="email" placeholder="{{ __('auth.Email') }}" name="email" :value="old('email')" required autofocus autocomplete="username" />
           <x-label for="floatingEmail" value="{{ __('auth.Email') }}" />
        </div>

        <div class="form-floating mb-3">
           
            <x-input id="password" class="form-control rounded-3" type="password" name="password" required autocomplete="new-password" />
            <x-label for="password" value="{{ __('auth.Password') }}" />
        </div>

        <div class="form-floating mb-3">
            
            <x-input id="password_confirmation" class="form-control rounded-3" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-label for="password_confirmation" value="{{ __('auth.Confirm Password') }}" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        

                        <div class="ml-2">
                            <x-checkbox name="terms" id="terms" required />
                            {!! __('auth.I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('auth.Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('auth.Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
        @endif

        <div class="flex items-center justify-end mt-4">
        <x-button class="btn btn-primary">
                {{ __('auth.Register') }}
            </x-button>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('auth.Already registered?') }}
            </a>

          
        </div>
    </form>
    </div>
</x-authentication-card>
</div>
</div>
</div>
@endsection