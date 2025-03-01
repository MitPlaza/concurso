<button wire:click="toggleSelection"
    class="{{ $participante->seleccion == 0 ? 'bg-yellow-500 hover:bg-yellow-600 text-white' : 'bg-green-500 hover:bg-green-600 text-white' }} focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">
    {{ $participante->seleccion == 0 ? 'No Seleccionado' : 'Seleccionado' }}
</button>