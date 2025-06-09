<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Material extends Model
{
    public $timestamps = false;
    protected $fillable = ['material_type_id', 'name', 'price', 'minimum', 'warehouse', 'packaging', 'unit_id'];

    // Связи
    public function materialType() : BelongsTo {
        return $this->belongsTo(MaterialType::class);
    }
    public function unit() : BelongsTo {
        return $this->belongsTo(Unit::class);
    }
    public function materialProducts() : HasMany {
        return $this->hasMany(MaterialProduct::class);
    }
}
