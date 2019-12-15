<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Medicine;
use App\MedicineDatabase;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     if ($request->ajax()) {
         //getting data from database
         $medicine_database = MedicineDatabase::join('manufacturers', 'medicine_databases.manufacturer_id', '=', 'manufacturers.id' )
             ->join('medicine_types', 'medicine_databases.medicine_type_id', '=', 'medicine_types.id' )
             ->select('medicine_name', 'generic_name', 'manufacturers.manufacturer_name', 'medicine_types.type_name', 'strength', 'price');
         return Datatables::of($medicine_database)
             ->addIndexColumn()
             ->editColumn('price', '৳ {{$price}}')
             ->addColumn('dash', function (){ return "dash";})
             ->make(true);
     }
         return view('medicine.ShowMedicine');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.AddMedicine');
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
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }
}
