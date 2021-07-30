<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relaciones polimorficas
    public function resurceable()
    {
        return $this->morphTo();
    }
}
