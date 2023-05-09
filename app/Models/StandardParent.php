<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StandardParent extends Model
{
    use HasFactory;


    public function child(): HasMany
    {
        return $this->hasMany(\App\Models\StandardChild::class);
    }
}
