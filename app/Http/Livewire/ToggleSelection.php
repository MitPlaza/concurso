<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Participante;

class ToggleSelection extends Component
{

    public $participante;

    public function mount($participante)
    {
        $this->participante = $participante;
    }
    public function toggleSelection()
    {
        // Alternar entre 0 y 1
        $this->participante->seleccion = $this->participante->seleccion == 0 ? 1 : 0;
        $this->participante->save();

        // Si el participante se deselecciona, emitir un evento
        if ($this->participante->seleccion == 0) {
            $this->emit('participanteDeseleccionado', $this->participante->id);
        }
    }
    public function render()
    {
        return view('livewire.toggle-selection');
    }
}
