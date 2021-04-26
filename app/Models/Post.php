<?php

namespace App\Models;

use const http\Client\Curl\FEATURES;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
    public function make()
    {
        return $this->belongsTo(Make::class);
    }
    /*test*/
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function shape()
    {
        return $this->belongsTo(Shape::class);
    }
    public function fuel()
    {
        return $this->belongsTo(Fuel::class);
    }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function transmission()
    {
        return $this->belongsTo(Transmission::class);
    }
    public function features()
    {

        return $this->belongsToMany(Feature::class);
    }
}
