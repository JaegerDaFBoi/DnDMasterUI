<?php

namespace App\Http\Livewire\CharacterCreation\RaceForm;

use Livewire\Component;

class RaceCreationForm extends Component
{
    public $race_name;
    public $race_size;
    public $race_speed;
    public $race_fly_speed;
    public $race_swim_speed;
    public $language_input;
    public $languages = [];
    public $str;
    public $dex;
    public $con;
    public $int;
    public $wis;
    public $cha;
    public $trait_title;
    public $trait_description;
    public $traits = [];

    public $error_message;

    public function addLanguage() {
        if (!is_null($this->language_input)) {
            if (strlen($this->language_input) > 4) {
                $this->languages[] = $this->language_input;
                
                $this->reset('language_input', 'error_message');
            } else {
                $this->error_message = 'El lenguaje debe tener minimo 5 caracteres';
            }
        } else {
            $this->error_message = 'El lenguaje no puede estar vacio';
        }
    }

    public function removeLanguage($index) {
        unset($this->languages[$index]);
    }

    public function addTrait() {
        array_push($this->traits, ['title' => $this->trait_title, 'description' => $this->trait_description]); 
        
        $this->reset('trait_title', 'trait_description');
    }

    public function removeTrait($index) {
        unset($this->traits[$index]);
    }
    
    public function render()
    {
        return view('livewire.character-creation.race-form.race-creation-form');
    }
}
