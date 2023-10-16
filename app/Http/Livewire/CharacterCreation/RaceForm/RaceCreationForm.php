<?php

namespace App\Http\Livewire\CharacterCreation\RaceForm;

use Illuminate\Support\Arr;
use Illuminate\Validation\ValidationException;
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

    public function addLanguage()
    {
        try {
            $this->validateOnly(
                'language_input',
                [
                    'language_input' => 'filled|min:4|alpha:ascii'
                ],
                [
                    'filled' => 'El campo :attribute esta vacio',
                    'min' => 'El campo :attribute debe tener minimo 4 caracteres',
                    'alpha' => 'El campo :attribute solo puede tener caracteres alfabeticos'
                ],
                [
                    'language_input' => 'Idioma'
                ]
            );
            $this->languages[] = $this->language_input;
            $this->reset('language_input');
        } catch (ValidationException $e) {
            $errors = $e->errors();
            $err_values = data_get($errors, 'language_input', 0);
            $this->dispatchBrowserEvent('alertError', [
                "title" => "Errores de validacion",
                "text" => $err_values,
                "icon" => "error",
                "iconColor" => "red"
            ]);
            throw $e;
        }
    }

    public function removeLanguage($index)
    {
        unset($this->languages[$index]);
    }

    public function addTrait()
    {
        try {
            $this->validate(
                [
                    'trait_title' => 'filled|min:4',
                    'trait_description' => 'filled|min:8'
                ],
                [
                    'trait_title.filled' => 'El campo :attribute esta vacio',
                    'trait_title.min' => 'El campo :attribute debe tener minimo 4 caracteres',
                    'trait_description.filled' => 'El campo :attribute esta vacio',
                    'trait_description.min' => 'El campo :attribute debe tener minimo 8 caracteres'
                ],
                [
                    'trait_title' => 'Titulo de Rasgo',
                    'trait_description' => 'Descripcion'
                ]
            );
            array_push($this->traits, ['title' => $this->trait_title, 'description' => $this->trait_description]);
            $this->reset('trait_title', 'trait_description');
        } catch (ValidationException $e) {
            $errors = $e->errors();
            $title_errors = data_get($errors, 'trait_title', 0);
            $description_errors = data_get($errors, 'trait_description', []);
            $err_values = array_merge($title_errors, $description_errors);
            $this->dispatchBrowserEvent('alertError', [
                "title" => "Errores de validacion",
                "text" => $err_values,
                "icon" => "error",
                "iconColor" => "red"
            ]);
            throw $e;
        }
    }

    public function removeTrait($index)
    {
        unset($this->traits[$index]);
    }

    public function setRaceData()
    {
        try {
            $this->validate(
                [
                    'race_name' => 'required|min:4|alpha:ascii',
                    'race_size' => 'required',
                    'race_speed' => 'required',
                ],
                [
                    'race_name.required' => 'El campo :attribute esta vacio',
                    'race_size.required' => 'El campo :attribute esta vacio',
                    'race_speed.required' => 'El campo :attribute esta vacio',
                    'race_name.min' => 'El campo :attribute debe tener minimo 4 caracteres',
                    'race_name.alpha' => 'El campo :attribute solo puede tener caracteres alfabeticos',
                ],
                [
                    'race_name' => 'Nombre de Raza',
                    'race_size' => 'Tamaño',
                    'race_speed' => 'Velocidad',
                    'race_fly_speed' => 'Vel. Vuelo',
                    'race_swim_speed' => 'Vel. Nado'
                ]
            );
            $race = [];
            array_push(
                $race,
                [
                    "name" => $this->race_name,
                    "description" => $this->race_description,
                    "increases" => [
                        'str_inc' => $this->str,
                        'dex_inc' => $this->dex,
                        'con_inc' => $this->con,
                        'int_inc' => $this->int,
                        'wis_inc' => $this->wis,
                        'cha_inc' => $this->cha
                    ],
                    "characteristics" => [
                        "size" => $this->race_size,
                        "speed" => $this->race_speed,
                        "fly_speed" => $this->race_fly_speed,
                        "swim_speed" => $this->race_swim_speed,
                        "traits" => $this->traits,
                        "languages" => $this->languages,
                    ]
                ]
            );
            $this->emit('sendRaceDataToParent', $race);
        } catch (ValidationException $e) {
            $errors = $e->errors();
            $err_values = Arr::collapse($errors);
            $this->dispatchBrowserEvent('alertError', [
                "title" => "Errores de validacion",
                "text" => $err_values,
                "icon" => "error",
                "iconColor" => "red"
            ]);
            throw $e;
        }
    }

    public function render()
    {
        return view('livewire.character-creation.race-form.race-creation-form');
    }
}
