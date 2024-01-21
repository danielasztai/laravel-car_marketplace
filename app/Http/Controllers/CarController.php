<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index() {
        return view('cars.index', [
            'cars' => Car::latest()->filter(request(['brand', 'price-from', 'price-upto', 'prod_year-from', 'prod_year-upto', 'km-from', 'km-upto', 'power-from', 'power-upto', 'type', 'fuel', 'gearbox']))->get()
        ]);
    }

    public function show(Car $car) {
        return view('cars.show', [
            'car' => $car
        ]);
    }

    public function create() {
        return view('cars.create');
    }

    public function store(Request $request) {        
        $formFields = $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'description' => 'required',
            'price' => 'required',
            'prod_year' => 'required',
            'km' => 'required',
            'power' => 'required',
            'type' => 'required',
            'fuel' => 'required',
            'gearbox' => 'required',
            'mot' => 'required',
        ]);

        $formFields['image'] = $request->file('image')->store('images', 'public');
        
        $formFields['user_id'] = auth()->id();

        Car::create($formFields);

        return redirect('/cars')->with('message', 'You added the car successfully!');
    }

    public function manage() {
        return view('cars.manage', [
            'cars' => Car::all()
        ]);
    }

    public function edit(Car $car) {
        return view('cars.edit', [
            'car' => $car
        ]);
    }

    public function destroy(Car $car) {
        $car->delete();
        return redirect('/')->with('message', 'Car deleted successfully!');
    }
}