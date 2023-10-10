<?php

namespace App\Http\Livewire\CharacterCreation;

use Livewire\Component;

class CreationCenterButtons extends Component
{

    public function showForm(String $formId) {
        $this->emit('sendActiveForm', $formId);
    }

    public function render()
    {
        return view('livewire.character-creation.creation-center-buttons');
    }
}
