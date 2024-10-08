<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Last Name -->
            <div class="mt-4">
                <x-label for="last_name" :value="__('Last Name')" />

                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- ID Number -->
            <div class="mt-4">
                <x-label for="id_number" :value="__('ID Number')" />
                <x-input id="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number"
                    :value="old('id_number')" required />
                @error('id_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Phone Number -->
            <div class="form-group mt-4">
                <x-label for="phone" :value="__('Phone Number')" />
                <x-input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" :value="old('phone')" required />
                @error('phone')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
            </div>

            <!-- Role Selection -->
            <div class="mt-4">
                <x-label for="role" :value="__('Register As')" />
                <div class="flex items-center">
                    <x-input id="tenant" type="radio" name="role" value="tenant" class="mr-2" />
                    <x-label for="tenant" :value="__('Tenant')" />
                </div>
                <div class="flex items-center mt-2">
                    <x-input id="service_provider" type="radio" name="role" value="service_provider" class="mr-2" />
                    <x-label for="service_provider" :value="__('Service Provider')" />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
