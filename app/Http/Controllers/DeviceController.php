<?php

namespace App\Http\Controllers;

use App\Models\device;
use App\Models\type;
use App\Models\brand;
use App\Models\site;
use App\Models\location;
use App\Models\rack;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('devices.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $locations = location::all();
        $sites = site::all();
        $brands = brand::all();
        $types = type::all();
        $racks = rack::all();
        return view('devices.create', compact('types', 'brands', 'sites', 'locations', 'racks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(device $device)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, device $device)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(device $device)
    {
        //
    }
}
