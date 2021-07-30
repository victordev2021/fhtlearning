<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // relacion uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Relaciones polimorficas
    public function commentable()
    {
        return $this->morphTo();
    }
    // Relacion uno a muchos polimorfica
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    // Relacion uno a muchos polimorfica
    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactionable');
    }
}
