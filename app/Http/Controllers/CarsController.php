<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Owner;

class CarsController extends Controller
{
    public function getCars()
    {
        $cars = Car::all();

        return view('cars.list')->with('cars', $cars);
    }

    public function submitCar(Request $request)
    {
        $model = $request->input('carModel');
        $owner = $request->input('carOwner');   

        $car = new car;
        $car->model = $model;
        $car->owner_id = $owner;

        $car->save();

        return redirect('/car/add')->with('success', 'Car added');
    }

    public function saveCar(Request $request)
    {
        $model = $request->input('carModel');
        $owner = $request->input('carOwner');        
        $id = $request->input('carId');

        $car = Car::where('id', $id)->first();
        $car->model = $model;
        $car->owner_id = $owner;

        $car->save();

        return redirect('/cars')->with('success', 'Car modified');
    }

    public function addCar()
    {
        $owners = Owner::all();
        return view('cars.add')->with('owners', $owners);
    }

    public function editCar(Car $car)
    {
        $owners = Owner::all();

        $data = [
            'car'  => $car,
            'owners'   => $owners
        ];

        return view('cars.edit')->with($data);
    }

    public function deleteCar(Car $car)
    {
        $car->delete();
        return redirect('/cars')->with('success', 'Car removed');
    }
}
