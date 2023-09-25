<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Armor extends Model
{
    use HasFactory;

    public function armors(): MorphTo {
        return $this->morphTo('armors', Armor::class, 'armor_id', 'character_id');
    }
}
