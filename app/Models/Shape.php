<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
