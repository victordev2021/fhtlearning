<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // Relacion uno a uno inversa
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
