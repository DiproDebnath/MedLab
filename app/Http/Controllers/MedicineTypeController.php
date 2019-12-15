<?php

namespace App\Http\Controllers;

use App\MedicineType;
use Illuminate\Http\Request;


class MedicineTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //getting data from database
        $medicinetypes = MedicineType::orderby('id', 'ASC' )->get();

        return view('medicineType.ShowMedicineType', compact('medicinetypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('medicineType.AddMedicineType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MedicineType  $medicineType
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineType $medicineType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineType  $medicineType
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineType $medicineType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicineType  $medicineType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineType $medicineType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineType  $medicineType
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineType $medicineType)
    {
        //
    }
}
