<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function make()
    {
        return $this->belongsTo(Make::class);
    }

    public function shapes()
    {
        return $this->belongsToMany(Shape::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
