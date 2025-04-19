<div>

    <div class="navbar" style="background: #1f2937">
        <div class="flex-none">
            <div class="drawer drawer-end">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer-4" class="drawer-button btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16">
                            </path>
                        </svg>
                    </label>
                </div>
                <div class="drawer-side" style="z-index: 9">
                    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu p-4 w-80 min-h-full     text-base-content" style="background: #1f2937">
                        <!-- Sidebar content here -->
                        <li class="p-4">You're logged in as: {{ Auth::user()->name }}</li>
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <!-- https://feathericons.dev/?search=settings&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <circle cx="12" cy="12" r="3" />
                                    <path
                                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                                </svg>

                                {{ __('Management System') }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <!-- https://feathericons.dev/?search=user&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                                    <circle cx="12" cy="7" r="4" />
                                </svg>

                                {{ __('Profile') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <!-- https://feathericons.dev/?search=user&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                                </svg>

                                {{ __('Notifications') }}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <!-- https://feathericons.dev/?search=user&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>

                                {{ __('Report platform problem') }}
                            </a>
                        </li>


                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <!-- https://feathericons.dev/?search=user&iconset=feather -->
                                <!-- https://feathericons.dev/?search=slack&iconset=feather -->
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                    height="24" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path
                                        d="M14.5 10c-.83 0-1.5-.67-1.5-1.5v-5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5z" />
                                    <path d="M20.5 10H19V8.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                                    <path
                                        d="M9.5 14c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5S8 21.33 8 20.5v-5c0-.83.67-1.5 1.5-1.5z" />
                                    <path d="M3.5 14H5v1.5c0 .83-.67 1.5-1.5 1.5S2 16.33 2 15.5 2.67 14 3.5 14z" />
                                    <path
                                        d="M14 14.5c0-.83.67-1.5 1.5-1.5h5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5h-5c-.83 0-1.5-.67-1.5-1.5z" />
                                    <path d="M15.5 19H14v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5-.67-1.5-1.5-1.5z" />
                                    <path
                                        d="M10 9.5C10 8.67 9.33 8 8.5 8h-5C2.67 8 2 8.67 2 9.5S2.67 11 3.5 11h5c.83 0 1.5-.67 1.5-1.5z" />
                                    <path d="M8.5 5H10V3.5C10 2.67 9.33 2 8.5 2S7 2.67 7 3.5 7.67 5 8.5 5z" />
                                </svg>
                                {{ __('AI assent') }}
                            </a>
                        </li>


                        <!-- https://feathericons.dev/?search=mail&iconset=feather -->





                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')" class="flex items-center gap-2"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <!-- https://feathericons.dev/?search=log-out&iconset=feather -->
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                        height="24" class="main-grid-item-icon" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        <polyline points="16 17 21 12 16 7" />
                                        <line x1="21" x2="9" y1="12" y2="12" />
                                    </svg>

                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex-1 pl-2 gap-2">
            <a class="btn btn-ghost text-small {{ request()->routeIs('dashboard') ? 'btn-active' : '' }}"
                href="{{ route('dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2">
                    <circle cx="12" cy="12" r="3" />
                    <path
                        d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z" />
                </svg>
            </a>
            <a class="btn btn-ghost text-small {{ request()->routeIs('telescope') ? 'btn-active' : '' }}"
                href="{{ route('telescope') }}"><!-- https://feathericons.dev/?search=bar-chart2&iconset=feather -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2">
                    <line x1="18" x2="18" y1="20" y2="10" />
                    <line x1="12" x2="12" y1="20" y2="4" />
                    <line x1="6" x2="6" y1="20" y2="14" />
                </svg>
            </a>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <!-- https://feathericons.dev/?search=bell&iconset=feather -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                    class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9" />
                    <path d="M13.73 21a2 2 0 0 1-3.46 0" />
                </svg>

            </button>
        </div>
    </div>


</div>
