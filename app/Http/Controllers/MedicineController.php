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

         $medicine = MedicineDatabase::with( array(
            'manufacturer' => function($query){
                $query->select('id', 'manufacturer_name');
            },
            'medicinetype' => function($query){
                $query->select('id', 'type_name');
            }
        ))
             // collect data by pharmaceutical id
             ->where('manufacturer_id', '=', '1')->get();

        //sending data to datatable
        return Datatables::of($medicine)
        ->addIndexColumn()
        ->addColumn('company_name', function($row){
            return $row->manufacturer->manufacturer_name;
        })
        ->addColumn('type_name', function($row){
            return $row->medicinetype->type_name;
        })
            ->addColumn('dash', function($row){
                return "dash";
            })
        ->make(true);
       }

       return view('medicine.show_medicine');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.add_medicine');
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
