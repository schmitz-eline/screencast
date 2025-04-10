<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PetOwner extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'phone'];

    public function country():BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function losses(): HasMany
    {
        return $this->hasMany(Loss::class);
    }
}
