@component('layouts.app')
    <div class="pb-12">
        <h2 class="font-semibold text-xl leading-tight py-6 px-6">
            {{ __('Profile') }}
        </h2>
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
