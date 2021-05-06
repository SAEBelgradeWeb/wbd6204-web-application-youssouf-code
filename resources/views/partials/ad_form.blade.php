                        {{--THIS FORM IS TO CREATE A NEW AD (POST)--}}

<form class="px-4" action="/" method="post">
    @csrf
    <h4>Your Name:{{$user->name}} {{$user->last_name}}</h4>
    <div class="row">
        <label class="bg-danger" for="user_id">Your ID:{{$user->id}}</label>
        <input type="text" class="form-control" id="user_id" name="user_id" placeholder="please type ur ID here">
    </div>

    <h1>Build Your Ad</h1>
    <div class="row">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Add Title For The Ad ">
    </div>

    <hr>

    <h3>Car Details</h3>
    <div class="row justify-content-center" style="background-color:lightsteelblue">
        <div class="form-group m-2">
            <label for="vehicle_id">Vehicle:</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control">
             @foreach($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->vehicle}}</option>
             @endforeach
            </select>
        </div>
        {{--<div class="form-group m-2">
            <label for="make">Make:</label>
            <input type="text" class="form-control" id="make" name="make_id" placeholder="">
        </div>--}}
        <div class="form-group m-2">
            <label for="make_id">Make:</label>
            <select name="make_id" id="make_id" class="form-control">
                @foreach($makes as $make)
                    <option value="{{$make->id}}">{{$make->make}}</option>
                @endforeach
            </select>
        </div>
        {{--<div class="form-group m-2">
            <label for="type">Model:</label>
            <input type="text" class="form-control" id="type" name="type_id" placeholder="">
        </div>--}}
        <div class="form-group m-2">
            <label for="type_id">Model:</label>
            <select name="type_id" id="type_id" class="form-control">
                @foreach($types as $type)
                    <option value="{{$type->id}}">{{$type->type}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group m-2">
            <label for="condition">Condition:</label>
            <select name="condition" id="condition" class="form-control">
                @foreach($conditions as $condition)
                    <option value="{{$condition}}">{{$condition}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group m-2">
            <label for="year">Year:</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="">
        </div>
    </div>

    <div class="row py-4 justify-content-between">
       {{-- <div class="form-group">
            <label for="shape" class="mr-4"><i class="fas fa-car-side mr-2"></i>Body:</label>
            <input type="text" class="form-control" id="shape" name="shape_id" placeholder="Body">
        </div>--}}
        <div class="form-group">
            <label for="shape" class="mr-4"><i class="fas fa-car-side mr-2"></i>Body:</label>
            <select name="shape_id" id="shape" class="form-control">
                @foreach($shapes as $shape)
                    <option value="{{$shape->id}}">{{$shape->shape}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="mileage" class=""><i class="fas fa-road mr-2"></i>Mileage:</label>
            <input type="text" class="form-control" id="mileage" name="mileage" placeholder="mileage">
        </div>
        {{--<div class="form-group">
            <label for="transmission" class="mr-4"><i class="fas fa-cogs mr-2"></i>Gear Box:</label>
            <input type="text" class="form-control" id="transmission" name="transmission_id" placeholder="Gear Box">
        </div>--}}
        <div>
            <label for="transmission" class="mr-4"><i class="fas fa-cogs mr-2"></i>Gear Box:</label>
            <select name="fuel" id="fuel" class="form-control">
                @foreach($transmissions as $transmission)
                    <option value="{{$transmission}}">{{$transmission}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="power" class="mr-4"><i class="fas fa-horse mr-2"></i>Power:</label>
            <input type="text" class="form-control" id="power" name="power" placeholder="Power">
        </div>

        <div>
            <label for="fuel" class="mr-4"><i class="fas fa-gas-pump mr-2"></i>Fuel:</label>
            <select name="fuel" id="fuel" class="form-control">
                @foreach($fuels as $fuel)
                    <option value="{{$fuel}}">{{$fuel}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="drive_type" class="mr-4"><i class="fab fa-accessible-icon mr-2"></i>Drive Type:</label>
            <select name="drive_type" id="drive_type" class="form-control">
            @foreach($drive_types as $drive_type)
                <option value="{{$drive_type}}">{{$drive_type}}</option>
            @endforeach
        </select>
        </div>
        <div>
            <label for="door" class="mr-4"><i class="fas fa-door-open mr-2"></i>Door:</label>
            <select name="door" id="door" class="form-control">
                @foreach($doors as $door)
                    <option value="{{$door}}">{{$door}}</option>
                @endforeach
            </select>
        </div>
        {{--<div class="form-group">
            <label for="region" class="mr-4"><i class="fas fa-map-marker-alt mr-2"></i>Region:</label>
            <input type="text" class="form-control" id="region" name="region_id" placeholder="Region">
        </div>--}}
        <div>
            <label for="region" class="mr-4"><i class="fas fa-map-marker-alt mr-2"></i>Region:</label>
            <select name="region_id" id="region" class="form-control">
                @foreach($regions as $region)
                    <option value="{{$region->id}}">{{$region->region}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="price" class="mr-4"><i class="fas fa-hand-holding-usd mr-2"></i>Price:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
        </div>
    </div>

    <hr>

    <h3>Select Your Car Features</h3>

    <div class="row">
        @foreach($features as $feature)
        <div class="col-6 col-md-3 mt-2 ">
                <div class="form-check form-check-inline mr-4 pr-4">
                    <input class="form-check-input" type="checkbox" id="{{$feature}}" name="feature[]" value="{{$feature->id}}">
                    <label class="form-check-label" for="{{$feature}}">{{$feature->feature}}</label>
                </div>
        </div>
        @endforeach
    </div>

    <hr>

    <h3>Enter Seller's description</h3>
    <div class="form-group">
        <label for="description"></label>
        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="description" style="height: 100px"></textarea>
    </div>

    <hr>

    <div class="row mt-4">
        <div class="col-md-7 bg-warning">
            @include('partials.gallery')
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="" multiple>
            </div>
        </div>

        <div class="col-md-4 offset-1 bg-danger">
            <p><b>RECOMMENDATION & GUIDES</b></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Aliquam mollis convallis semper. Proin risus felis,
                mollis at augue non, tincidunt eleifend ipsum.</p>
            <p><b>Recomended Image Resolution: 800 x 470 px or higher</b></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Aliquam mollis convallis semper. Proin risus felis,
                mollis at augue non, tincidunt eleifend ipsum.</p>
            <p><b>User can upload up to 5 photos, but dealer can upload up to 10 photos.</b></p>
            <p>elementum, in vulputate nunc maximus. Nulla egestas blandit laoreet.
                Nam egestas odio non nisi ullamcorper convallis. Sed eu consectetur orci.
                Cras vulputate nisl sapien, vitae rhoncus est aliquet sit amet.</p>
        </div>
    </div>

    <hr>

    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>

</form>
