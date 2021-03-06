<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProject extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function imageable()
    {
        return $this->morphTo();
    }
}
