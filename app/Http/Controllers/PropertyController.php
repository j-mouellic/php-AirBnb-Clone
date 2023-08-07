<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyFormRequest;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        return view('property.index', [
            'properties' => Property::all()
        ]);
    }

    public function show(Property $property)
    {
        return view("property.show", [
            "property" => $property
        ]);
    }

    public function create()
    {
        return view('property.new', ['property' => new Property]);
    }

    public function store(PropertyFormRequest $request)
    {
        // $property = Property::create([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'bathrooms' => $request->input('bathrooms'),
        //     'address' => $request->input('address'),
        //     'home_type' => $request->input('home_type'),
        //     'bedrooms' => $request->input('bedrooms'),
        //     'postal_code' => $request->input('postal_code'),
        //     'price_per_night' => $request->input('price_per_night'),
        //     'surface' => $request->input('surface'),
        //     'city' => $request->input('city'),
        // ]);
        $property = Property::create($request->validated());
        return to_route("property.show", $property)->with('success', "Le nouveau bien a été enregistré");
    }

    public function edit()
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
