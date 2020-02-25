@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                    <th>Model</th>
                    <th>Owner</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($cars) > 0)
                    @foreach($cars AS $car)
                        <tr>
                            <td>
                                {{$car->model}}
                            </td>
                            <td>
                                <a href="/owners/edit/{{$car->owner_id}}">{{$car->owner->name}}</a>
                            </td>
                            <td>
                                <a href="{{ route('car.edit', compact('car')) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('car.delete', compact('car')) }}" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <a class="btn btn-info" href="/car/add">Add Car</a>
        </div>
    </div>

@endsection
