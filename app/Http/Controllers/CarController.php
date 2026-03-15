<?php

namespace App\Http\Controllers;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('cars.index', compact('cars'));
    }
}
