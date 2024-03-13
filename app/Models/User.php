<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function meows(): HasMany
    {
        return $this->hasMany(Meow::class);
    }

}


