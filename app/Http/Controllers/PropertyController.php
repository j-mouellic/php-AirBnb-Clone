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
        $property = Property::create($request->validated());
        return to_route("property.show", $property)->with('success', "Le nouveau bien a été enregistré");
    }

    public function edit(Property $property)
    {
        return view('property.new', ["property" => $property]);
    }

    public function update(Property $property, PropertyFormRequest $request)
    {
        $property->update($request->validated());
        return to_route("property.show", $property)->with('success', 'La modification du bien est enregistrée');
    }

    public function destroy(string $id)
    {
        //
    }
}
