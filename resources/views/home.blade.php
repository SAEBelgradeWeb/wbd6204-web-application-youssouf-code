{{--
THIS IS THE DASHBOARD
--}}

@extends('layouts.app')

@section('content')
{{--
        THE ORIGINAL DASHBOARD CARD
--}}

{{--<div class="container">
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
                </div>
            </div>
        </div>
    </div>
</div>--}}

{{--
        END OF THE ORIGINAL DASHBOARD CARD
--}}

<div class="container">

    <div class="row">
        <div class="col-md-1"> {{--START OF THE LEFT SIDE--}}
            <h3>Edit your ad's</h3>
            <div class="btn-group-vertical">
                <a href="#" class="btn btn-success btn-lg" role="button"><i class="fas fa-plus-square"></i></a>
                <br>
                <a href="#" class="btn btn-warning btn-lg" role="button"><i class="fas fa-pencil-alt"></i></a>
                <br>
                <a href="#" class="btn btn-danger btn-lg" role="button"><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>{{--END OF THE LEFT SIDE--}}


        <div class="col-md-11 bg-info"> {{--START OF THE RIGHT SIDE--}}
            @include('partials.ad_form') {{--THIS IS TO CALL THE FORM TO ADD NEW POST--}}

        </div>  {{--END OF THE RIGHT SIDE--}}
    </div>

</div>
@endsection

