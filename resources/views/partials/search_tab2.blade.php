<form class="{{--form-inline my-2 my-lg-0--}}">
<div class="row justify-content-between text-center border border-dark rounded" style="background-color:gray">
    <div class="form-group m-2">
        <label for="make"><h5><b>Make</b></h5></label>
        <input type="search" class="form-control" id="make" name="make" placeholder="Make">
    </div>
    <div class="form-group m-2">
        <label for="type"><h5><b>Model</b></h5></label>
        <input type="search" class="form-control" id="type" name="type" placeholder="Model">
    </div>
    <div class="form-group m-2">
        <label for="condition"><h5><b>Condition</b></h5></label>
        <input type="search" class="form-control" id="condition" name="condition" placeholder="Condition">
    </div>
    <div class="form-group m-2">
        <label for="year"><h5><b>Year</b></h5></label>
        <input type="search" class="form-control" id="year" name="year" placeholder="Max year">
    </div>
    <button type="submit" class="btn btn-secondary">
        <i class="fas fa-search"></i>
    </button>

        {{--<select name="condition_id" id="condition_id">
            <option value="">sdsd</option>
            @foreach($conditions as $condition)
                <option value="{{$condition->id}}">{{$condition->condition}}</option>
            @endforeach
        </select>--}}

 {{--   <a href="/secondFilter">
        <button type="submit" class="btn btn-secondary">
            <i class="fas fa-search"></i>
        </button>
    </a>--}}


</div>
</form>

