<?php

namespace App\Http\Livewire\CharacterCreation\RaceForm;

use Livewire\Component;

class RaceCreationForm extends Component
{
    public $race_name;
    public $race_description;
    public $race_size;
    public $race_speed;
    public $race_fly_speed;
    public $race_swim_speed;
    public $language_input;
    public $languages = [];
    public int $str = 0;
    public int $dex = 0;
    public int $con = 0;
    public int $int = 0;
    public int $wis = 0;
    public int $cha = 0;
    public $trait_title;
    public $trait_description;
    public $traits = [];

    public $error_message;

    public function addLanguage()
    {
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

    public function removeLanguage($index)
    {
        unset($this->languages[$index]);
    }

    public function addTrait()
    {
        array_push($this->traits, ['title' => $this->trait_title, 'description' => $this->trait_description]);

        $this->reset('trait_title', 'trait_description');
    }

    public function removeTrait($index)
    {
        unset($this->traits[$index]);
    }

    public function setRaceData()
    {
        $scores = $this->setScoreIncreases();
        $race_chars_array = $this->setRaceChars();
        $race = [];
        array_push(
            $race,
            [
                "name" => $this->race_name,
                "description" => $this->race_description,
                "scores" => $scores,
                "race_chars" => $race_chars_array
            ]
        );
        
    }

    public function setScoreIncreases()
    {
        $scores_array = [];
        array_push(
            $scores_array,
            [
                'increases' => [
                    'str' => $this->str,
                    'dex' => $this->dex,
                    'con' => $this->con,
                    'int' => $this->int,
                    'wis' => $this->wis,
                    'cha' => $this->cha
                ]
            ]
        );
        return $scores_array;
    }
    public function setRaceChars()
    {
        $race_chars = [];
        array_push(
            $race_chars,
            [
                "size" => $this->race_size,
                "speed" => $this->race_speed,
                "fly_speed" => $this->race_fly_speed,
                "swim_speed" => $this->race_swim_speed,
                "traits" => $this->traits,
                "languages" => $this->languages,
            ]
        );
        return $race_chars;
    }


    public function render()
    {
        return view('livewire.character-creation.race-form.race-creation-form');
    }
}
