<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
<div class="w-full flex items-center justify-center md:justify-evenly min-h-screen">
    <form method="POST" action="{{ route('login') }}" class="max-w-4xl  w-1/3 ">
        @csrf
        <h2 class="text-2xl md:text-4xl font-bold text-gray-800 mb-4">Welcome back!</h2>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class=" text-sm text-gray-600 hover:text-gray-900 rounded-md" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
            <div>
                
                @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md " href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                @endif
                
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </div>
    </form>

    <div class="hidden relative z-20  rounded-md  md:flex ">
        <img src="/assets/images/tools.png" alt="" class="z-100">
        <img src="/assets/images/b2.png" alt="" class="w-20 absolute rotate-45 top-2 right-3">
    </div>
</div>
</x-guest-layout>
