<div>
    @if ($participantess->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
            @foreach ($participantess as $participante)
                <div
                    class="max-w-sm img-card bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
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
                            <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
                                Fecha de nacimiento: {{ $participante->nacimiento }}
                            </li>
                            <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
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
                                @livewire('toggle-selection', ['participante' => $participante], key($participante->id))
                            </div>
                        </div>
                        <!-- Botón Livewire -->

                    </div>
                </div>
            @endforeach
        </div>

        <!-- Paginación -->
        <div class="mt-6">
            {{ $participantess->links() }}
        </div>
    @else
        <p>No hay participantes seleccionados.</p>
    @endif
</div>