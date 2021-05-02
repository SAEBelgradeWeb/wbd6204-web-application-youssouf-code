<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Vehicle;
use App\Models\Make;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts', compact('posts'));
    }

    public function show_single($id)
    {
        $post = Post::find($id);
        return view('posts_single', compact('post'));
  }
/*
    public function show_cars()
    {
        $Vehicles = Vehicle::all();
        $posts = Post::where(v);
        return view('cars', compact('posts', ));
    }*/

    public function indexVehicles($id)
    {
        $vehicle = Vehicle::find($id);
        $posts = $vehicle->posts;
        return view('posts',compact('posts'));
    }
/*$post  = Post::where(‘vehicle’, ‘car’)->get();*/

    public function indexFiltering()
    {

       /* $post  = Post::where('make', 'Jeep')->get();*/


        $make = Make::where('make', 'jeep')->first();
        $posts = Post::where('make_id', $make->id)->get();

        dd($posts);


        /*$posts = Post::where('make_id', 1)->get();*/

        return view('posts',compact('posts'));
    }

    public function create()
    {
        $vehicles = Vehicle::all();
        /*dd($vehicles);*/
        return view('form', compact('vehicles'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());
/*        dd($request->all());*/
    }
}

/*['model']=>$request->type*/
