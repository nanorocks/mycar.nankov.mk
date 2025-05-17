<div class="navbar bg-transparent">
    <!-- Navbar Start -->
    <div class="navbar-start gap-2">
        <label for="my-drawer-2" class="drawer-button lg:hidden">
            <x-icons.menu />
        </label>
        <a class="btn btn-ghost text-xl lg:hidden">{{ config('app.name', 'Laravel') }}</a>
    </div>

    <!-- Navbar Center -->
    <div class="navbar-center">

    </div>

    <!-- Navbar End -->
    <div class="navbar-end gap-2">

        <button class="btn btn-ghost btn-circle">
            <div class="indicator">
                <x-icons.bell />
                <span class="badge badge-xs badge-primary indicator-item z-0"></span>
            </div>
        </button>

        <!-- Settings Dropdown -->
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle hover:bg-grey">
                <x-icons.settings />
            </label>
            <ul tabindex="0" class="menu dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52">
                <li><a href="{{ route('user-management.index') }}">
                        <x-icons.user-management />
                        User Management</a></li>
                <li><a href="{{ route('notifications.index') }}">
                        <x-icons.notifications />
                        Notifications</a></li>
                <li><a href="{{ route('preferences.index') }}">
                        <x-icons.preferences />
                        Preferences</a></li>
                <li><a href="{{ route('alerts.index') }}">
                        <x-icons.alerts />
                        Alerts</a></li>
            </ul>
        </div>

        <!-- Profile Dropdown -->
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
                <x-icons.profile />
            </label>
            <ul tabindex="0" class="menu dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52">
                <li><a href="{{ route('profile.edit') }}">
                        <x-icons.profile />
                        Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" onclick="this.submit();">
                        @csrf
                        <button type="button" class="flex items-center gap-2 w-full">
                            <x-icons.log-out />

                            <span>{{ __('Log Out') }}</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
