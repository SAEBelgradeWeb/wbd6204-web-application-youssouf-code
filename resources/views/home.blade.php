{{--
THIS IS THE DASHBOARD
--}}

@extends('layouts.app')

@section('content')
{{--
        THE ORIGINAL DASHBOARD CARD
--}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                        <br>
                        {{ __('Now you can create an ad, edit it and delete it when ever you feel like!') }}
                </div>

                    <div class="{{--col-md-6--}}row justify-content-center">
                        {{--<h3>Edit your ad's</h3>--}}
                        <div class="btn-group{{---vertical--}}">
                            <a href="/home/form" class="btn btn-success btn-lg" role="button"><i class="fas fa-plus-square"></i></a>
                            <br>
                            <a href="/home/posts" class="btn btn-warning btn-lg" role="button"><i class="fas fa-pencil-alt"></i></a>
                            <br>
                            <a href="/home/posts" class="btn btn-danger btn-lg" role="button"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                <br>
            </div>
        </div>
    </div>
</div>

{{--
        END OF THE ORIGINAL DASHBOARD CARD
--}}

<div class="container bg-muted">

    {{--<div class="row justify-content-center">
        --}}{{--<h3>Edit your ad's</h3>--}}{{--
        <div class="col-md-6 justify-content-center">
            <h3>Edit your ad's</h3>
            <div class="btn-group--}}{{---vertical--}}{{--">
                <a href="/home/form" class="btn btn-success btn-lg" role="button"><i class="fas fa-plus-square"></i></a>
                <br>
                <a href="/home/posts" class="btn btn-warning btn-lg" role="button"><i class="fas fa-pencil-alt"></i></a>
                <br>
                <a href="/home/posts" class="btn btn-danger btn-lg" role="button"><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>

    </div>--}}




{{--            @include('posts_auth')--}}




</div>
@endsection

