@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Cars</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @if(count($owners) > 0)
                    @foreach($owners AS $owner)
                        <tr>
                            <td>
                                {{$owner->name}}
                            </td>
                            <td>
                                @if(count($owner->cars) > 0)
                                    @foreach($owner->cars AS $car)
                                    | <a href="/car/edit/{{$car->id}}">{{$car->model}}</a> |
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('owners.edit', compact('owner')) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('owners.delete', compact('owner')) }}" class="btn btn-danger">Remove</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <a class="btn btn-info" href="/owners/add">Add Owner</a>
        </div>
    </div>

@endsection
