@extends('layouts.app2')
@section('content')

    @include('partials.slider')
    @include('partials.search_tab')
    <div class="container">
        @include('partials.search_tab2')
    </div>


    <div class="container bg-muted">
        @foreach($posts->chunk(3) as $chunk)
            <div class="card-group">
                @foreach($chunk as $post)
                    <div class="card m-1 my-5">
                        <img class="card-img-top" src="https://motors.stylemixthemes.com/classified-five/wp-content/uploads/sites/17/2020/03/post_id_2104_imzJ3-999x599-1-815x475.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><i class="fas fa-brain mr-2"> Make:</i> {{$post->make->make}}.</li>
                                @foreach($post->features as $feature)
                                    {{--                        <li class="list-group-item"><i class="fas fa-brain mr-2"> Make:</i> {{$feature->feature}}.</li>--}}
                                @endforeach
                                <li class="list-group-item"><i class="fas fa-horse-head"> Power:</i> {{$post->power}} HP</li>
                                <li class="list-group-item"><i class="fas fa-road mr-2"> Mileage:</i>{{$post->mileage}} KM</li>
                                <li class="list-group-item"><i class="fas fa-hand-holding-usd mr-2"> Price:</i>{{$post->price}} $</li>
                            </ul>
                            {{--                    <a href="#" class="btn btn-primary">Go somewhere</a>--}}
                            <a href="/post/{{$post->id}}" class="btn btn-secondary btn-sm active  btn-block " role="button" aria-pressed="true">Show</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>

@endsection

