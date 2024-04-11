<x-guest-layout>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}
    <div>
        <div class="mt-4 text-center">
            <x-primary-link href="{{ route('sso.redirect') }}">
                {{ __('SSO Log in ') }}
            </x-primary-link>
        </div>
    </div>
</x-guest-layout>
