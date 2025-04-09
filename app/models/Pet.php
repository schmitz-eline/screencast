<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pet extends Model
{
    protected $fillable = ['name', 'chip', 'gender', 'age', 'race', 'tatoo', 'description', 'photo_path'];

    public function pet_types(): BelongsTo
    {
        return $this->belongsTo(PetType::class);
    }

    public function losses(): HasMany
    {
        return $this->hasMany(Loss::class);
    }
}
