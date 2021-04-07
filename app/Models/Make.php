<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Make extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
