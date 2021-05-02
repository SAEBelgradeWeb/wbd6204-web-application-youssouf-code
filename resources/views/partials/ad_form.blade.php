                        {{--THIS FORM IS TO CREATE A NEW AD (POST)--}}

<form class="px-4" action="/" method="post">
    @csrf

    <h1>Build Your Ad</h1>
    <div class="row">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Add Title For The Ad ">
    </div>

    <hr>

    <h3>Car Details</h3>
    <div class="row justify-content-between" style="background-color:lightsteelblue">
        <div class="form-group m-2">
            <label for="vehicle_id">Vehicle:</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control">
             @foreach($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->vehicle}}</option>
             @endforeach
            </select>
          {{--  <select name="vehicle_id" id="vehicle_id" class="form-control">
                    <option value="">car</option>
                <option value="">truck</option>
            </select>--}}
            {{--<input type="text" class="form-control" id="vehicle" name="vehicle" placeholder="">--}}
        </div>
        <div class="form-group m-2">
            <label for="make">Make:</label>
            <input type="text" class="form-control" id="make" name="make_id" placeholder="">
        </div>
        <div class="form-group m-2">
            <label for="type">Model:</label>
            <input type="text" class="form-control" id="type" name="type_id" placeholder="">
        </div>
        <div class="form-group m-2">
            <label for="condition">Condition:</label>
            <input type="text" class="form-control" id="condition" name="condition" placeholder="">
        </div>
        <div class="form-group m-2">
            <label for="year">Year:</label>
            <input type="text" class="form-control" id="year" name="year" placeholder="">
        </div>
    </div>

    <div class="row py-4 justify-content-between">
        <div class="form-group">
            <label for="shape" class="mr-4"><i class="fas fa-car-side mr-2"></i>Body:</label>
            <input type="text" class="form-control" id="shape" name="shape_id" placeholder="Body">
        </div>
        <div class="form-group">
            <label for="mileage" class=""><i class="fas fa-road mr-2"></i>Mileage:</label>
            <input type="text" class="form-control" id="mileage" name="mileage" placeholder="mileage">
        </div>
        <div class="form-group">
            <label for="transmission" class="mr-4"><i class="fas fa-cogs mr-2"></i>Gear Box:</label>
            <input type="text" class="form-control" id="transmission" name="transmission_id" placeholder="Gear Box">
        </div>
        <div class="form-group">
            <label for="power" class="mr-4"><i class="fas fa-horse mr-2"></i>Power:</label>
            <input type="text" class="form-control" id="power" name="power" placeholder="Power">
        </div>
        <div class="form-group">
            <label for="fuel" class="mr-4"><i class="fas fa-gas-pump mr-2"></i>Fuel:</label>
            <input type="text" class="form-control" id="fuel" name="fuel_id" placeholder="Fuel">
        </div>

        <div class="form-group">
            <label for="drive_type" class="mr-4"><i class="fab fa-accessible-icon mr-2"></i>Drive Type:</label>
            <input type="text" class="form-control" id="drive_type" name="drive_type" placeholder="Drive Type">
        </div>
        {{--<label for="drive_type">drive type:</label>
        <select name="drive_type" id="drive_type" class="form-control">
            @foreach($drive_types as $drive_type)
                <option value="{{$drive_type->id}}">{{$drive_type->drive_type}}</option>
            @endforeach
        </select>--}}
        <div class="form-group">
            <label for="door" class="mr-4"><i class="fas fa-door-open mr-2"></i>Door:</label>
            <input type="text" class="form-control" id="door" name="door" placeholder="Door">
        </div>
        <div class="form-group">
            <label for="region" class="mr-4"><i class="fas fa-map-marker-alt mr-2"></i>Region:</label>
            <input type="text" class="form-control" id="region" name="region_id" placeholder="Region">
        </div>
        <div class="form-group">
            <label for="price" class="mr-4"><i class="fas fa-hand-holding-usd mr-2"></i>Price:</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
        </div>
    </div>

    <hr>

    <h3>Select Your Car Features</h3>
    <div class="row mt-4 justify-content-between">
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" name="feature" id="A/C: Front" value="A/C: Front">
            <label class="form-check-label" for="feature_id">A/C: Front</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="a/c: rear" name="feature" value="a/c: rear">
            <label class="form-check-label" for="a/c: rear">A/C: Rear</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="backup_camera" value="backup camera">
            <label class="form-check-label" for="backup_camera">Backup Camera</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="cruise_control" value="cruise control">
            <label class="form-check-label" for="cruise_control">Cruise Control</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="navigation" value="navigation">
            <label class="form-check-label" for="navigation">Navigation</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="fog_lights" value="fog lights">
            <label class="form-check-label" for="fog_lights">Fog Lights</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="heated_seats" value="heated seats">
            <label class="form-check-label" for="heated_seats">Heated Seats</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="memory_seats" value="memory seats">
            <label class="form-check-label" for="memory_seats">Memory Seats</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="third_row_seats" value="third row seats">
            <label class="form-check-label" for="third_row_seats">Third Row Seats</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="alloy_wheels" value="alloy wheels">
            <label class="form-check-label" for="alloy_wheels">Alloy Wheels</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="key_less_entry" value="key less entry">
            <label class="form-check-label" for="key_less_entry">Keyless Entry</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="sunroof" value="sunroof">
            <label class="form-check-label" for="sunroof">Sunroof</label>
        </div>
        <div class="form-check form-check-inline mr-4 pr-4">
            <input class="form-check-input" type="checkbox" id="tow_package" value="tow package">
            <label class="form-check-label" for="tow_package">Tow Package</label>
        </div>
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
