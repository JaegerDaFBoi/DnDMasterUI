<?php

namespace App\Http\Livewire\CharacterCreation;

use Livewire\Component;

class CreationCenter extends Component
{
    public $activeForm;

    public $listeners = ['sendActiveForm' => 'showSelectedForm'];

    public function mount() {
        $this->activeForm  = '';
    }

    public function showSelectedForm(String $formId) {
        $this->activeForm = $formId;
    }

    public function render()
    {
        return view('livewire.character-creation.creation-center');
    }
}
