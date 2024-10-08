<nav class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class=" mx-auto px-4 sm:px-6 lg:px-0">
        <div class="flex justify-between h-16 px-4">
            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <img src="{{ asset('images/logo_black.png') }}" width="200px">
                    </a>
                </div>

                <!-- Navigation Links -->
                <!--div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                </x-nav-link>
            </!--div-->
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
{{--                            <img src="{{ asset('images/profile/' .Auth::user()->id . '.jpg') }}" alt="Tenant Image"--}}
{{--                                 class="size-9 rounded-full mr-2">--}}
                            @php
                                $profileImagePath = 'images/profile/' . Auth::user()->id . '.jpg';
                                $defaultImagePath = 'images/profile/default.jpg';
                            @endphp
                            <img
                                src="{{ asset(file_exists(public_path($profileImagePath)) ? $profileImagePath : $defaultImagePath) }}"
                                alt="Tenant Image"
                                class="size-9 rounded-full mr-2">

                            <div>{{ ucfirst(Auth::user()->name) }} {{ ucfirst(Auth::user()->last_name) }}</div>

                            <div class="">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <!-- <x-slot name="content">
                        <!- Authentication ->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
{{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot> -->
                </x-dropdown>
            </div>


        </div>
    </div>

</nav>
