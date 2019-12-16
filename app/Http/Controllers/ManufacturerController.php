<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use Illuminate\Http\Request;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturer = Manufacturer::orderby('id', 'ASC' )->get();
        return view('manufacturer.ShowManufacturer', compact('manufacturer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manufacturer.ManufacturerForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =  $request->validate([
            'manufacturer_name' => 'string|required|min:5',
            'manufacturer_mobile' => 'numeric|min:11',
            'manufacturer_address' => 'string',
            'manufacturer_details' => 'string',
        ]);
        $manufacturer = new Manufacturer;
        $manufacturer->manufacturer_name = $data['manufacturer_name'];
        $manufacturer->manufacturer_mobile = $data['manufacturer_mobile'];
        $manufacturer->manufacturer_address = $data['manufacturer_address'];
        $manufacturer->manufacturer_details = $data['manufacturer_details'];
        $manufacturer->save();
        return redirect()->route('manufacturer.index')
            ->with([
                'message' => $manufacturer->manufacturer_name . ' Added',

                'class'=> "alert-success"
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacturer $manufacturer)
    {
        return view('manufacturer.ManufacturerForm', compact('manufacturer'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manufacturer $manufacturer)
    {
        $data =  $request->validate([
            'manufacturer_name' => 'string|required|min:5',
            'manufacturer_mobile' => 'numeric|min:11',
            'manufacturer_address' => 'string',
            'manufacturer_details' => 'string',
        ]);
        $manufacturer->manufacturer_name = $data['manufacturer_name'];
        $manufacturer->manufacturer_mobile = $data['manufacturer_mobile'];
        $manufacturer->manufacturer_address = $data['manufacturer_address'];
        $manufacturer->manufacturer_details = $data['manufacturer_details'];
        $manufacturer->save();
        return redirect()->route('manufacturer.index')
            ->with([
                'message' => $manufacturer->id . '. ' . $manufacturer->manufacturer_name . ' Updated Successfully',
                'class'=> "alert-success"
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manufacturer  $manufacturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacturer $manufacturer)
    {
        $manufacturer->delete();
        return redirect()->route('manufacturer.index')
            ->with([
                'message' => $manufacturer['id']. '. ' .$manufacturer['manufacturer_name'] . ' Delete Successfully',
                'class'=> "alert-danger"
            ]);
    }
}
