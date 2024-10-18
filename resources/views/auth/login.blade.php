<x-guest-layout>
    <div class="container mt-5">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="bg-light p-5 rounded shadow-sm border">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" class="form-label fw-bold" />
                <x-text-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" class="form-label fw-bold" />
                <x-text-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">
                <x-primary-button class="btn btn-primary btn-lg px-5">
                    {{ __('Iniciar Sesión') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
