<!-- filepath: /home/nanorocks/Documents/mycar.nankov.mk/car-app/resources/views/auth/forgot-password.blade.php -->
<x-guest-layout>
    <div class="flex flex-col items-center justify-center ">
        <div class="card w-full max-w-md shadow-lg bg-base-200">
            <div class="card-body">
                <div class="mb-4 text-sm text-gray-600 dark:text-gray-400 text-center">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>

                <div class="mb-4 text-center">
                    <x-nav-link href="{{ route('login') }}" class="link-primary">
                        {{ __('Go back to login') }}
                    </x-nav-link>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-control">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="input input-bordered w-full mt-1" type="email"
                            name="email" :value="old('email')" required autofocus />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-control mt-4">
                        <x-primary-button
                            class="border-none bg-gray-800 white:bg-gray-200 rounded-md font-semibold text-xs text-white white:text-gray-800 uppercase tracking-widest hover:bg-gray-700 white:hover:bg-white focus:bg-gray-700 white:focus:bg-white active:bg-gray-900 white:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 white:focus:ring-offset-gray-800 transition ease-in-out duration-150 w-full flex items-center gap-2">
                            <!-- https://feathericons.dev/?search=refresh-cw&iconset=feather -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2">
                                <polyline points="23 4 23 10 17 10" />
                                <polyline points="1 20 1 14 7 14" />
                                <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15" />
                            </svg>

                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
