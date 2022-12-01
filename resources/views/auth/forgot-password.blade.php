<link rel="stylesheet" href="/css/all.mim.css">
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="/css/sb-admin-2.min.css">
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/font-awesome.min.css">
<link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/hamburgers.min.css">
<link rel="stylesheet" href="/css/animsition.min.css">
<link rel="stylesheet" href="/css/select2.min.css">
<link rel="stylesheet" href="/css/daterangepicker.css">
<link rel="stylesheet" href="/css/utilLogin.css">
<link rel="stylesheet" href="/css/mainLogin.css">

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um e-mail com um link de redefinição de senha que permitirá que você escolha um novo.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Link de redefinição de senha de e-mail') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
