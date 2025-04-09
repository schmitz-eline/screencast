<?php

namespace Animal\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Loss extends Model
{
    protected $fillable = ['lost_at', 'postal_code'];

    public function country(): HasOne
    {
        return $this->hasOne(Country::class);
    }

    public function pet(): HasOne
    {
        return $this->hasOne(Pet::class);
    }

    public function pet_owners(): HasMany
    {
        return $this->hasMany(PetOwner::class);
    }
}
