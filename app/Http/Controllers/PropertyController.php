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
        $property = new Property();
        return view('property.new', ['property' => $property]);
    }

    public function store(PropertyFormRequest $request, Property $property)
    {
        $property->create($request->validated());
        // définir la route -> dashboard user
        return to_route('')->with('success', "Le nouveau bien a été enregistré");
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
