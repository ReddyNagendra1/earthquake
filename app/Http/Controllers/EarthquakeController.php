<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEarthquakeRequest;
use App\Http\Requests\UpdateEarthquakeRequest;
use App\Models\Earthquake;
use App\Models\Observation;
use Illuminate\Support\Facades\Session;

class EarthquakeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('earthquakes.index', [
            'earthquakes' => Earthquake::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('earthquakes.create', [
            'observations' => Observation::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEarthquakeRequest $request)
    {
        $earthquake = Earthquake::create($request->validated());
        if ($request->has('observation_ids')) {
            $earthquake->observations()->attach($request->observation_ids);
        }
        Session::flash('success', 'Earthquake added successfully!');
        return redirect()->route('earthquakes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Earthquake $earthquake)
    {
        return view('earthquakes.show', compact('earthquake'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Earthquake $earthquake)
    {
        return view('earthquakes.edit', [
            'earthquake' => $earthquake,
            'observations' => Observation::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEarthquakeRequest $request, Earthquake $earthquake)
    {
        $earthquake->update($request->validated());
        if ($request->has('observation_ids')) {
            $earthquake->observations()->sync($request->observation_ids);
        }
        Session::flash('success', 'Earthquake updated successfully!');
        return redirect()->route('earthquakes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Earthquake $earthquake)
    {
        $earthquake->delete();
        Session::flash('success', 'Earthquake deleted successfully!');
        return redirect()->route('earthquakes.index');
    }
}