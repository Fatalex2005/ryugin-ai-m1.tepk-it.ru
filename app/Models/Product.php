<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    public function productType() : BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }
    public function materialProducts() : HasMany {
        return $this->hasMany(MaterialProduct::class);
    }
}
