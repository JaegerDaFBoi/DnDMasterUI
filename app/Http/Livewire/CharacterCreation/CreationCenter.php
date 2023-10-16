<?php

namespace App\Http\Livewire\CharacterCreation;

use App\Models\Race;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CreationCenter extends Component
{
    public $activeForm;

    public $listeners =
    [
        'sendActiveForm' => 'showSelectedForm',
        'sendRaceDataToParent' => 'saveRaceData',
        'refreshComponent' => '$refresh'
    ];

    public function mount()
    {
        $this->activeForm  = '';
    }

    public function showSelectedForm(String $formId)
    {
        $this->activeForm = $formId;
    }

    public function saveRaceData($race) {
        $increases = $race[0]['increases'];
        $characteristics = $race[0]['characteristics'];
        $traits = json_encode($characteristics['traits']);
        $languages = json_encode($characteristics['languages']);
        $increasesToSave = [];
        foreach ($increases as $skill => $increase) {
            if ($increase > 0) {
                $increasesToSave[$skill] = $increase; 
            }
        }
        $increasesId = DB::table('score_increases')->insertGetId($increasesToSave);
        $raceCharsId = DB::table('race_chars')->insertGetId([
            'size' => $characteristics['size'],
            'walk_speed' => $characteristics['speed'],
            'fly_speed' => $characteristics['fly_speed'],
            'swim_speed' => $characteristics['swim_speed'],
            'race_traits' => $traits,
            'languages' => $languages
        ]);
        $raceToSave = new Race();
        $raceToSave->race_name = $race[0]['name'];
        $raceToSave->race_description = json_encode($race[0]['description']);
        $raceToSave->score_increase_fk = $increasesId;
        $raceToSave->race_chars_fk = $raceCharsId;
        $raceToSave->save();
        session()->flash('message', 'Raza Agregada Correctamente');
        return redirect()->to('character-workshop'); 
    }

    public function render()
    {
        return view('livewire.character-creation.creation-center');
    }
}
