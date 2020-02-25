@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-6">

            @php($action = route('car.submit'))

            <form method="POST" action="{{$action}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="carModel">Model</label>
                    <input type="text" class="form-control" name="carModel" id="carModel" placeholder="Model">
                </div>
                <div class="form-group">
                    <label for="carOwner">Owner</label>
                    <select name="carOwner" class="form-control">
                        @if(count($owners) > 0)
                            @foreach($owners AS $owner)
                                <option value="{{$owner->id}}">{{$owner->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
