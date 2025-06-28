<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    protected $table = 'positions';
    protected $guarded = ['id'];
    public function employees(): HasMany 
    {
        return $this->hasMany(Employee::class);
    }

    public function positions(): HasMany 
    {
        return $this->hasMany(Position::class);
    }
}
