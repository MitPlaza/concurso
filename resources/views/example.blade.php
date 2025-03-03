<x-guest-layout>

    <div class="w-full">
        <img class="h-auto w-full object-cover" src="/images/Banner-Mantita-Cumple-Mes.jpg" alt="image description">
    </div>


    <div class="w-full px-4">
        <section class="mt-14 mb-28">
            <div
                class="py-8 px-4 mx-auto bg-gray-50 bg-opacity-80 border rounded-2xl text-center lg:py-6 max-w-[1000px] w-full">
                <h3 class="mb-4 text-xl font-regular tracking-tight leading-none md:text-2xl lg:text-4xl text-gray-700">
                    ¡Participa en nuestro concurso<br> #CreceConBambino y gana increíbles premios!
                </h3>
                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl">
                    Registra el crecimiento de tu bebé mes a mes con nuestra Mantita Cumple Mes Bambino...
                </p>
            </div>

            <!-- Ajuste del iframe -->
            <div class="py-8 px-4 mx-auto text-center lg:py-6 max-w-[1000px] w-full">
                <h2 class="mb-2 text-lg font-semibold text-gray-900">Cómo participar:</h2>
                <div class="relative w-full max-w-[600px] mx-auto overflow-hidden">
                    <div class="aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full"
                            src="https://www.youtube.com/embed/EUOC7VXG0cQ?si=xyq3ZMp1eR2WU6ln"
                            title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <ul
                class="mb-8 text-lg text-left p-8 border rounded-2xl text-gray-600 bg-opacity-80 bg-gray-100 list-inside">
                <li class="flex items-center">
                    <svg class="w-4 h-4 mr-2 text-green-400" fill="#2cccd3" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Z" />
                    </svg>
                    Usa tu mantita cumple mes de Bambino...
                </li>
                <!-- Más elementos aquí -->
            </ul>

            <div class="flex flex-col space-y-4 gap-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex items-center py-3 px-5 text-white bg-indigo-800 hover:bg-indigo-600 rounded-lg">
                    Comprar Mantita Niño
                </a>
                <a href="#"
                    class="inline-flex items-center py-3 px-5 text-white bg-red-400 hover:bg-red-300 rounded-lg">
                    Comprar Mantita Niña
                </a>
            </div>
        </section>
    </div>





    <div class="w-full md:w-auto">
        <div class="mx-auto max-w-[800px] px-4">
            <form action="{{ route('participantes.store')}}" class="p-8" method="post" enctype="multipart/form-data"
                id="formulario">
                @csrf
                <div class="grid gap-6 mb-6 md:grid-cols-2 sm:grid-cols-1">
                    <div>
                        <label for="first_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre
                            Madre, Padre o Tutor</label>
                        <input type="text" id="first_name" name="nombretutor" value="{{ old('nombretutor') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full" />
                        @error('nombretutor')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="last_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido
                            Madre, Padre o Tutor</label>
                        <input type="text" id="last_name" name="apellidotutor" value="{{ old('apellidotutor') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full" />
                        @error('apellidotutor')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                            Madre, Padre o Tutor</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full" />
                        @error('email')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="telefono"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Celular
                            Madre, Padre o Tutor</label>
                        <input type="tel" id="telefono" name="telefono" value="{{ old('telefono') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full" />
                        @error('telefono')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>


                </div>
                <div class="mb-6">
                    <label for="nombrebebe" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre
                        de tu bebé</label>
                    <input type="text" id="nombrebebe" name="nombrebebe" value="{{ old('nombrebebe') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full" />
                    @error('nombrebebe')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>
                <div class="grid gap-6 mb-6 md:grid-cols-2">
                    <div class="mb-6">
                        <label for="Nacimiento"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha
                            de
                            Nacimiento</label>
                        <div class="relative">


                            <input id="nacimiento" name="nacimiento" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full"
                                placeholder="ejemplo 01/01/2025" value="{{ old('nacimiento') }}">
                            @error('nacimiento')
                                <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-6">
                        <label for="genero"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-full">Sexo de
                            tu bebé</label>
                        <select id="genero" name="sexo"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full">
                            <option value="" {{ old('sexo') == '' ? 'selected' : '' }}>Elije el sexo</option>
                            <option value="Niña" {{ old('sexo') == 'Niña' ? 'selected' : '' }}>Niña</option>
                            <option value="Niño" {{ old('sexo') == 'Niño' ? 'selected' : '' }}>Niño</option>

                        </select>
                        @error('sexo')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                <div class="mb-6">
                    <label for="direccion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tu
                        dirección</label>
                    <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 w-full" />
                    @error('direccion')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                </div>


                <div class="col-span-full">
                    <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Foto de tu bebé</label>
                    <div
                        class="mt-2 flex bg-white justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">

                            <div class="mt-4 flex text-sm/6 text-gray-600">
                                <span>Subir imagen</span>
                                <input type="file" name="imagen" id="imagen">

                                @error('imagen')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror

                            </div>
                            <p class="text-xs/5 text-gray-600">PNG, JPG, GIF máximo 2MB</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-start mb-6 mt-8">
                    <div class="flex items-center h-5">
                        <input id="aceptoTerminos" type="checkbox" name="acepto" value="1"
                            class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Leí y Acepto
                        las
                        <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Bases del
                            concuso</a>.</label>
                </div>
                <button type="submit" id="submitButton" disabled
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enviar
                    datos</button>
            </form>
        </div>



    </div>

    <div class="py-8 px-4 mx-auto  text-center lg:py-6" style="max-width: 1000px;">
        <p class="mt-8 text-lg font-normal text-gray-800 lg:text-md sm:px-6 lg:px-6 dark:text-gray-900">¡No pierdas la
            oportunidad de crear recuerdos inolvidables y ganar fabulosos premios!</p>
        <p class="mt-2 text-sm font-normal text-stone-600 lg:text-sm sm:px-6 lg:px-6 dark:text-gray-900">
            #CrececonBambino #BambinoChile #ConcursoBambino #PrimerCumpleaños #MomentosInolvidables</p>
    </div>
    @if(session('scroll_to'))
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let element = document.getElementById("{{ session('scroll_to') }}");
                if (element) {
                    element.scrollIntoView({ behavior: 'smooth' });
                }
            });
        </script>
    @endif

    <script>
        // Selecciona el checkbox de términos y el botón de envío
        const checkboxTerminos = document.getElementById('aceptoTerminos');
        const submitButton = document.getElementById('submitButton');

        // Escucha el cambio en el estado del checkbox
        checkboxTerminos.addEventListener('change', () => {
            // Habilita o deshabilita el botón según el estado del checkbox
            submitButton.disabled = !checkboxTerminos.checked;
        });
    </script>



</x-guest-layout>