@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-6">

            @php($action = route('owners.save'))

            <form method="POST" action="{{$action}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="ownerName">Name</label>
                    <input type="text" class="form-control" name="ownerName" id="ownerName" placeholder="Name" value="{{$owner->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
