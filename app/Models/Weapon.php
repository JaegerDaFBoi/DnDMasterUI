<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Weapon extends Model
{
    use HasFactory;

    public function weapons(): MorphTo {
        return $this->morphTo('weapons', Weapon::class, 'weapon_id', 'character_id');
    }
}
