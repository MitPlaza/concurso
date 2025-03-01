<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">


                    <div
                        class="max-w-sm text-center img-card bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">

                        <img class="rounded-t-lg text-center" src="{{ asset('images/' . $participante->imagen) }}"
                            alt="" />

                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $participante->nombrebebe}}
                                </h5>
                            </a>
                            <ul
                                class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                    Fecha de nacimiento: {{$participante->nacimiento}}</li>
                                <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                    Sexo bebé: {{$participante->sexo}}</li>
                                <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                    Nombre Tutor: {{$participante->nombretutor}} {{$participante->apellidotutor}}</li>
                                <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Email:
                                    {{$participante->email}}
                                </li>
                                <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600">Teléfono:
                                    {{$participante->telefono}}
                                </li>
                                <li class="w-full px-4 py-2 rounded-b-lg">Dirección: {{$participante->direccion}}</li>
                            </ul>
                            <div class="flex gap-2 mb-5 mt-5">

                                <div>
                                    @livewire('toggle-selection', ['participante' => $participante])
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</x-app-layout>