    <x-guest-layout>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="flex flex-col items-center justify-center">
            <div class="card w-full max-w-md shadow-lg bg-base-200">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Email Address -->
                        <div class="form-control">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="input input-bordered w-full mt-1" type="email"
                                name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="form-control mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input-white id="password" class="input" type="password"
                                name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Remember Me -->
                        <div class="form-control mt-4 flex items-start gap-4">
                            <label class="label cursor-pointer">
                                <span class="label-text font-semibold">{{ __('Remember me') }}</span>
                                <input id="remember_me" type="checkbox" class="checkbox ml-2 bg-transparent"
                                    name="remember" checked="checked">
                            </label>
                        </div>
                        <div class="form-control mt-4">
                            @if (Route::has('password.request'))
                                <x-nav-link class="link-primary" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </x-nav-link>
                            @endif
                        </div>

                        <div class="form-control mt-4">
                            <x-primary-button
                                class="border-none bg-gray-800 white:bg-gray-200 rounded-md font-semibold text-xs text-white white:text-gray-800 uppercase tracking-widest hover:bg-gray-700 white:hover:bg-white focus:bg-gray-700 white:focus:bg-white active:bg-gray-900 white:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 white:focus:ring-offset-gray-800 transition ease-in-out duration-150 w-full flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                                    <polyline points="10 17 15 12 10 7" />
                                    <line x1="15" x2="3" y1="12" y2="12" />
                                </svg>


                                {{ __('Log in') }}
                            </x-primary-button>
                        </div>
                    </form>

                    <!-- SSO Login Options -->
                    <div class="divider mt-6 text-white">{{ __('Or continue with') }}</div>

                    <div class="form-control mt-4">
                        <x-primary-link href="{{ route('sso.redirect') }}" class="w-full flex items-center gap-2">
                            <!-- https://feathericons.dev/?search=compass&iconset=feather -->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2">
                                <circle cx="12" cy="12" r="10" />
                                <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76" />
                            </svg>

                            {{ __('SSO Log in') }}
                        </x-primary-link>
                    </div>

                    <div class="form-control mt-4">
                        <x-primary-link href="{{ route('github.redirect') }}" class="w-full flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                                class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2">
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                            </svg>
                            {{ __('Log in with GitHub') }}
                        </x-primary-link>
                    </div>
                </div>
            </div>
        </div>
    </x-guest-layout>
