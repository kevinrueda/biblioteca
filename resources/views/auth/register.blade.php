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

            <!-- Id -->
            <div class="mt-2">
                <x-label for="id" :value="__('Documento de identificación')" />

                <x-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id')" required autofocus />
            </div>

            <!-- Nombre -->
            <div class="mt-2">
                <x-label for="nombre" :value="__('Nombre')" />

                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
            </div>

            <!-- Apellido -->
            <div class="mt-2">
                <x-label for="apellido" :value="__('Apellido')" />

                <x-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-2">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Departamento_id -->
            <div class="mt-2">
                <x-label for="departamento_id" :value="__('Departamento')" />

                <x-input id="departamento_id" class="block mt-1 w-full" type="text" name="departamento_id" :value="old('departamento_id')" required autofocus />
            </div>

            <!-- Municipio_id -->
            <div class="mt-2">
                <x-label for="municipio_id" :value="__('Municipio')" />

                <x-input id="municipio_id" class="block mt-1 w-full" type="text" name="municipio_id" :value="old('municipio_id')" required autofocus />
            </div>

            <!-- Fecha_nacimiento -->
            <div class="mt-2">
                <x-label for="nombre" :value="__('Fecha de nacimiento')" />

                <x-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autofocus />
            </div>

            <!-- Telefono -->
            <div class="mt-2">
                <x-label for="telefono" :value="__('Teléfono')" />

                <x-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required autofocus />
            </div>

            <!-- Contraseña -->
            <div class="mt-2">
                <x-label for="contraseña" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="contraseña"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-2">
                <x-label for="password_confirmation" :value="__('Confirmar Contraseña')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="contraseña_confirmacion" required />
            </div>

            <!-- Jornada_id -->
            <div class="mt-2">
                <x-label for="jornada_id" :value="__('Jornada')" />

                <x-input id="jornada_id" class="block mt-1 w-full" type="text" name="jornada_id" :value="old('jornada_id')" required autofocus />
            </div>

            <!-- Grado_id -->
            <div class="mt-2">
                <x-label for="grado_id" :value="__('Grado')" />

                <x-input id="grado_id" class="block mt-1 w-full" type="text" name="grado_id" :value="old('grado_id')" required autofocus />
            </div>

            <!-- Genero_id -->
            <div class="mt-2">
                <x-label for="genero_id" :value="__('Género')" />

                <x-input id="genero_id" class="block mt-1 w-full" type="text" name="genero_id" :value="old('genero_id')" required autofocus />
            </div>

            <!-- Preferencia -->
            <div class="mt-2">
                <x-label for="preferencia" :value="__('Preferencia')" />

                <x-input id="preferencia" class="block mt-1 w-full" type="text" name="preferencia" :value="old('preferencia')" required autofocus />
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
