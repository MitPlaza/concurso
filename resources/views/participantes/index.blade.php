<x-app-layout>
    <x-slot name="header"></x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">Participantes</h1>
                    <!-- Contenedor de Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                        @forelse ($participantes as $participante)
                            <!-- Tarjeta -->
                            <div
                                class="max-w-sm bg-white border img-card border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                                <img class="rounded-t-lg" src="{{ asset('images/' . $participante->imagen) }}" alt="" />
                                <div class="p-5">
                                    <a href="#">
                                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            {{ $participante->nombrebebe }}
                                        </h5>
                                    </a>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    <ul
                                        class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                        <li
                                            class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                            Fecha de nacimiento: {{ $participante->nacimiento }}
                                        </li>
                                        <li
                                            class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                            Sexo bebé: {{ $participante->sexo }}
                                        </li>
                                    </ul>
                                    </p>
                                    <div class="flex gap-2 mb-5 mt-5">
                                        <div>
                                            <a href="{{ route('participantes.show', $participante->id) }}"
                                                class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                Ver datos
                                            </a>
                                        </div>
                                        <div>
                                            @livewire('toggle-selection', ['participante' => $participante])
                                        </div>
                                        <form action="{{ route('participantes.destroy', $participante->id) }}" method="POST"
                                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar este participante?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        @empty
                            <p>No hay participantes que mostrar</p>
                        @endforelse
                        <div>

                        </div>
                    </div>
                    <div class="mt-4">
                        {{ $participantes->links() }}
                    </div>
                    <!-- Fin del Grid -->

                </div>
            </div>
        </div>
    </div>
</x-app-layout>