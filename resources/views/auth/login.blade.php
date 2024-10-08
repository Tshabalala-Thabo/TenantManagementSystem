<x-guest-layout>
    <div class="flex min-h-screen bg-gray-100 flex-col lg:flex-row-reverse">
        <div class="w-full lg:w-7/12"> <!-- 7 columns wide -->
            <div
                class="flex flex-col justify-center items-center pt-6 pb-6 bg-primary-700 md:px-20 lg:px-24 lg:min-h-screen">
                <div class="flex items-centre justify-center flex-col">
                    <img class="h-48 md:h-96 lg:h-96 mb-4" src="/images/data-ext.svg" alt="">
                    <h1 class="text-center hidden sm:block font-extrabold text-2xl">Simplifying property management</h1>
                    <p class="text-center hidden sm:block xl:mx-24">Streamline tenant records, payments, maintenance,
                        and communication efficiently with our intuitive and comprehensive tenant management system.</p>
                </div>
            </div>
        </div>
        <div class="w-full flex-1 bg-grey-100 flex px-5 lg:w-5/12"> <!-- 5 columns wide -->
            <div class="flex flex-col flex-1 justify-center items-center pt-6 sm:pt-0 lg:min-h-screen">
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>
                    </a>
                </x-slot>
                <div>
                    <a href="/">
                        <img src="./images/logo_black.png" width="200px">
                    </a>
                </div>
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg">
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')"/>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')"/>

                            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                     :value="old('email')" required autofocus/>
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password')"/>

                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                     autocomplete="current-password"/>
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                       class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                       name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="flex flex-col items-center">
                            <button type="submit"
                                    class="py-2 w-full mb-4 rounded-lg font-semibold bg-primary-700 text-black">
                                {{ __('Log in') }}
                            </button>
                            <p>Don't have an account? <a class="underline text-md text-gray-600 hover:text-gray-900"
                                                         href="{{ route('register') }}"> <span
                                        class="font-bold text-primary-800">Register</span></a></p>
                            @if (Route::has('password.request'))
                                <a class="underline text-md text-gray-600 hover:text-gray-900"
                                   href="{{ route('password.request') }}">
                                    {{ __('Forgot password?') }}
                                </a>
                            @endif


                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>


</x-guest-layout>
