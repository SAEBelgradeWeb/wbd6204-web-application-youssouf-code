<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Post;
use App\Models\Region;
use App\Models\Shape;
use App\Models\Type;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Make;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        /*$posts = Post::all();*/

        $posts = Post::orderBy('created_at','desc')->get();

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
        $user = Auth::user();
        $user_id = Auth::id();
        $makes = Make::all();
        $types = Type::all();
        $shapes = Shape::all();
        $vehicles = Vehicle::all();
        $regions = Region::all();
        $drive_types = ['AWD', 'FWD','RWD', '4WD'];
        $conditions = ['new', 'used','like new'];
        $doors = ['2', '3','5','7'];
        $fuels = ['Diesel', 'Electric', 'Ethanol', 'Gasoline', 'hybrid', 'Lpg autogas'];
        $transmissions = ['Automatic', 'Manual', 'Semi-automatic', 'CVT'];
        $features = Feature::all();


        return view('form', compact('vehicles', 'drive_types',
            'conditions', 'doors', 'fuels','features','transmissions', 'makes',
            'shapes', 'types', 'regions', 'user', 'user_id'));


    }

    public function store(Request $request)
    {
/*        dd($request->all());*/


        $post = Post::create($request->except(['features']));
        $post->features()->sync($request->feature,);

        return redirect('/');
    }
    public function index_auth()
    {
       /* $user = User::find($id)->first();
        $posts = $user->posts;*/

        $posts = Auth::user()->posts()->orderBy('created_at','desc')->get();


        /*        $posts = Post::all();*/
        return view('posts_auth', compact('posts'));
    }

    public function delete($id)
    {


        Post::destroy($id);
        return redirect('/home/posts');
    }

}

/*['model']=>$request->type*/
