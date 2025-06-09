<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaterialType extends Model
{
    public function materials() : HasMany
    {
        return $this->hasMany(Material::class);
    }
}
