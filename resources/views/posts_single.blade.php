
@extends('layouts.app2')

@section('content')
{{--<div class="mt-5">
    @include('partials.search_tab')
</div>--}}
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-8 {{--bg-warning--}}">   {{--        THE LEFT SIDE --}}
            <div class="row">
                <div class="col-md-7"><h2><b>{{$post->title}}</b></h2></div>
                <div class="col-md-5 {{--offset-md-1--}} {{--d-flex justify-content-end--}}"><h2><b>Price:{{$post->price}}</b><i class="fas fa-hand-holding-usd ml-4"></i></h2></div>
            </div>
            <hr>
            <h3>GALLERY</h3>


            @include('partials.gallery')


            <hr>
            <h3>Car Details</h3>
            <div class="row mt-3 mb-5">
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-brain mr-2"> Make:</i><b>{{$post->make->make}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-code-branch mr-2"> Model:</i><b>{{$post->type->type}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-car-side mr-2"> Body:</i><b>{{$post->shape->shape}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-road mr-2"> Mileage:</i><b>{{$post->mileage}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-cogs mr-2"> Gear Box:</i><b>{{$post->transmission->transmission}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-horse-head mr-2"> Power:</i><b>{{$post->power}} HP</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-gas-pump mr-2"> Fuel:</i><b>{{$post->fuel->fuel}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fab fa-accessible-icon mr-2"> <b>Drive Type:</b></i><b>{{$post->drive_type}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-door-open mr-2"> Door:</i><b>{{$post->door}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-map-marker-alt mr-2"> Region:</i><b>{{$post->region->region}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-calendar-alt mr-2"> Year:</i><b>{{$post->year}}</b></div>
                <div class="col-6 col-md-4 mb-2"><i class="fas fa-star-half-alt mr-2"> Condition:</i><b>{{$post->condition}}</b></div>
            </div>
            <hr>
            <h3>Features</h3>
            <div class="row mt-3 mb-5">
                @foreach($post->features as $feature)
                <div class="col-6 col-md-4"><i class="fas fa-check-square mr-2"> Feature:</i><b>{{$feature->feature}}</b></div>
                @endforeach

            </div>
            <hr>
            <h3>Seller's description</h3>
            <div class="row">
                <div class="col-md-12">
                    <p><h5>{{$post->description}}</h5></p>
                </div>
            </div>

        </div>  {{--        THE END OF LEFT SIDE --}}





{{--        THE RIGHT SIDE --}}

        <div class="col-md-4 ml-auto {{--bg-success--}}">
            <div class="row d-flex justify-content-center mt-5"><h2><b>Similar Listings</b></h2>

                @include('partials.similar_listings')
{{--
                @include('partials.gallery')
--}}

            </div>
        </div>




        {{--        THE END OF THE RIGHT SIDE--}}
    </div>
</div>

@endsection

