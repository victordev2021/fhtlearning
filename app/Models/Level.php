<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relaciones
    // relacion uno a muchos
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
