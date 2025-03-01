<?php


namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Participante;

class ListaSeleccionados extends Component
{
    use WithPagination;

    protected $listeners = ['participanteDeseleccionado' => '$refresh']; // Refrescar la lista al eliminar

    public function render()
    {
        // Paginación de participantes seleccionados
        $participantess = Participante::where('seleccion', 1)->paginate(10);

        return view('livewire.lista-seleccionados', compact('participantess'));
    }
}

