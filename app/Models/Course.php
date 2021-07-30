<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;
    // Relaciones
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    // relacion uno a muchos inversa
    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
    public function audiences()
    {
        return $this->hasMany(Audience::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function category()
    {
        return $this->belongsTo(Level::class);
    }
    public function price()
    {
        return $this->belongsTo(Level::class);
    }
    // relacion muchos a muchos inversa
    public function students()
    {
        return $this->belongsToMany(User::class);
    }
    // Relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }
}
