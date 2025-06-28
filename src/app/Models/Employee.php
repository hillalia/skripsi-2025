<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model
{
    protected $table = 'employees';
    protected $guarded = ['id'];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function department(): BelongsTo 
    {
        return $this->belongsTo(Department::class);
    }

    public function position(): BelongsTo 
    {
        return $this->belongsTo(Position::class);
    }
}
