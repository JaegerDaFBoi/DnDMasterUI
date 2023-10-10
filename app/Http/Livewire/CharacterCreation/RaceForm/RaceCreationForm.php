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
    
    public function render()
    {
        return view('livewire.character-creation.race-form.race-creation-form');
    }
}
