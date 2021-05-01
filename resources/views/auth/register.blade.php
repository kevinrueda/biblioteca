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

                <x-input id="id" class="block mt-1 w-full" type="text" name="id" :value="old('id')" required
                    autofocus onkeypress='return validaNumericos(event)' />
            </div>

            <!-- Nombre -->
            <div class="mt-2">
                <x-label for="name" :value="__('Nombre')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Apellido -->
            <div class="mt-2">
                <x-label for="apellido" :value="__('Apellido')" />

                <x-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')"
                    required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-2">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Departamento_id -->
            <div class="mt-2">
                <x-label for="departamento_id" :value="__('Departamento')" />

                <select class="form-select block w-full mt-1 rounded border-gray-300" id="departamento_id">
                    <option value="0" hidden selected></option>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">
                            {{ ucfirst($departamento->nombre) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Municipio_id -->
            <div class="mt-2">
                <x-label for="municipio_id" :value="__('Municipio')" />

                <select class="form-select block w-full mt-1 rounded border-gray-300" id="municipio_id"
                    name="municipio_id"></select>
            </div>

            <!-- Fecha_nacimiento -->
            <div class="mt-2">
                <x-label for="fecha_nacimiento" :value="__('Fecha de nacimiento')" />

                <x-input id="fecha_nacimiento" class="block mt-1 w-full text-gray-600" type="date"
                    name="fecha_nacimiento" :value="old('fecha_nacimiento')" required autofocus />
            </div>

            <!-- Telefono -->
            <div class="mt-2">
                <x-label for="telefono" :value="__('Teléfono')" />

                <x-input id="telefono" class="block mt-1 w-full" type="tel" name="telefono" :value="old('telefono')"
                    required autofocus onkeypress='return validaNumericos(event)' />
            </div>

            <!-- Contraseña -->
            <div class="mt-2">
                <x-label for="password" :value="__('Contraseña')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Jornada_id -->
            <div class="mt-2">
                <x-label for="jornada_id" :value="__('Jornada')" />

                <select class="form-select block w-full mt-1 rounded border-gray-300" id="jornada_id" name="jornada_id">
                    <option value="0" hidden selected></option>
                    @foreach ($jornadas as $jornada)
                        <option value="{{ $jornada->id }}">
                            {{ ucfirst($jornada->nombre) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Grado_id -->
            <div class="mt-2">
                <x-label for="grado_id" :value="__('Grado')" />

                <select class="form-select block w-full mt-1 rounded border-gray-300" id="grado_id" name="grado_id">
                    <option value="0" hidden selected></option>
                    @foreach ($grados as $grado)
                        <option value="{{ $grado->id }}">
                            {{ ucfirst($grado->nombre) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Genero_id -->
            <div class="mt-2">
                <x-label for="genero_id" :value="__('Género')" />

                <select class="form-select block w-full mt-1 rounded border-gray-300" id="genero_id" name="genero_id">
                    <option value="0" hidden selected></option>
                    @foreach ($generos as $genero)
                        <option value="{{ $genero->id }}">
                            {{ ucfirst($genero->nombre) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Preferencia -->
            <div class="mt-2">
                <x-label for="preferencia" :value="__('Preferencia')" />

                <select class="form-select block w-full mt-1 rounded border-gray-300" name="preferencia"
                    id="preferencia_id">
                    <option value="0" hidden selected></option>
                    @foreach ($ps_deweys as $ps_deweys)
                        <option value="{{ $ps_deweys->id }}">
                            {{ ucfirst($ps_deweys->nombre) }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya está registrado?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrarse') }}
                </x-button>
            </div>
        </form>
        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>

        <script>
            $(document).ready(function() {
                $('#departamento_id').on('change', function() {
                    let id = $(this).val();
                    $('#municipio_id').empty();
                    $('#municipio_id').append(`<option value="0" hidden selected></option>`);
                    $.ajax({
                        type: 'GET',
                        url: 'register/' + id,
                        success: function(response) {
                            var response = JSON.parse(response);
                            console.log(response);
                            $('#municipio_id').empty();
                            $('#municipio_id').append(
                                `<option value="0" hidden selected></option>`);
                            response.forEach(element => {
                                $('#municipio_id').append(
                                    `<option value="${element['id']}">${element['nombre']}</option>`
                                );
                            });
                        }
                    });
                });
            });

        </script>

        <script>
            function validaNumericos(event) {
                if (event.charCode >= 48 && event.charCode <= 57) {
                    return true;
                }
                return false;
            }

        </script>

    </x-auth-card>
</x-guest-layout>
