<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Character extends Model
{
    use HasFactory;

    public function race(): HasOne {
        return $this->hasOne(Race::class, 'race_id', 'character_race_fk');
    }

    public function profession(): HasOne {
        return $this->hasOne(Profession::class, 'profession_id', 'character_profession_fk');
    }

    public function characterweapons(): MorphMany {
        return $this->morphMany('equipments', 'weapons', Weapon::class, 'character_id', 'weapon_id');
    }

    public function characterarmors(): MorphMany {
        return $this->morphMany('equipments', 'armors', Armor::class, 'character_id', 'armor_id');
    }
}

