<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img class="mb-4" src="img/unimal.jpg" alt="" width="72" height="57">
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

            <!-- Role -->

            <input type="hidden" id="role_id" class="form-control" value="2" name="role_id">

            {{-- <!-- NIM -->
            
            <div class="mt-4">
                <x-label for="name" :value="__('Nim')" />

                <x-input id="nim" class="block mt-1 w-full" type="number" name="nim" :value="old('nim')" required autofocus />
            </div>

            <!-- Prodi -->
            
            <div class="mt-4">

                <x-label for="name" :value="__('Prodi')" />
                    
                    <select class="form-select" aria-label="Default select example" name="prodi_id" id="prodi_id" aria-readonly="true">
                            @foreach ($prodi as $data)
                
                             <option value="{{ $data->id }}">{{ $data->name }}</option>

                            @endforeach
                    </select>
            </div> --}}
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
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
