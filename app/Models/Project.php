<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];
    const BORRADOR = false;
    const PUBLICADO = true;

    // Relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relacion uno a uno
    public function type()
    {
        return $this->hasOne(ProjectType::class);
    }
    public function category()
    {
        return $this->hasOne(ProjectCategory::class);
    }
    // Relacion polimorfica uno a muchos
    public function images()
    {
        return $this->morphMany(ImageProject::class, 'imageable');
    }
}
