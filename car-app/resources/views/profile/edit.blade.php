<!-- filepath: /home/nanorocks/Documents/mycar.nankov.mk/car-app/resources/views/profile/edit.blade.php -->
@component('layouts.app')
    <div class="pb-12 pt-6 py-4 sm:py-6 lg:py-8 mx-auto">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs text-sm">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="gap-1">
                        <x-icons.home />
                        {{ __('Dashboard') }}
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile.edit') }}" class="gap-1">
                        <x-icons.profile />
                        {{ __('Profile') }}
                    </a>
                </li>
            </ul>
        </div>

        <!-- Heading and Description -->
        <h2 class="font-semibold text-xl leading-tight pt-4">
            {{ __('Profile') }}
        </h2>
        <p class="text-sm pb-4">
            {{ __('Update your profile, change your password, or remove your account securely and easily.') }}
        </p>

        <div class="mx-auto">
            <div class="bg-base-200 shadow rounded-xl p-6 mb-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="bg-base-200 shadow rounded-xl p-6 mb-6">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="bg-base-200 shadow rounded-xl p-6 mb-6">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
@endcomponent
