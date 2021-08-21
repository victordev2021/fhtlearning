<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $withCount = ['students', 'reviews'];
    protected $guarded = ['id', 'status'];
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;
    // Attributes
    public function getRatingAttribute()
    {
        if ($this->reviews_count) {
            # code...
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }
    // Query scopes
    public function scopeCategory($query, $category_id)
    {
        if ($category_id) {
            return $query->where('category_id', $category_id);
        }
    }
    public function scopeLevel($query, $level_id)
    {
        if ($level_id) {
            return $query->where('level_id', $level_id);
        }
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
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
