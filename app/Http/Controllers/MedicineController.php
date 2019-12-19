<?php

namespace App\Http\Controllers;

use App\Manufacturer;
use App\Medicine;
use App\MedicineType;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class MedicineController extends Controller
{

    public function index(Request $request)
    {
     if ($request->ajax()) {
         //getting data from database
         $medicine = Medicine::join('manufacturers', 'medicines.manufacturer_id', '=', 'manufacturers.id' )
             ->join('medicine_types', 'medicines.medicine_type_id', '=', 'medicine_types.id' )
             ->select('medicines.id', 'medicine_name', 'generic_name', 'manufacturers.manufacturer_name', 'medicine_types.type_name', 'strength', 'unit' ,'unit_price');
         return Datatables::of($medicine)
             ->editColumn('unit_price', '৳ {{$unit_price}}')
             ->addColumn('action', function ($medicine){
                 $btn = "<div style='min-width: 100px'>";
                 $btn .= "<a href='". route('medicine.edit', $medicine->id)  ."' type=\"button\" class=\"btn btn-outline-info mr-2 waves-effect waves-light\"><i class=\" mdi font-size-16 mdi-playlist-edit\"></i></a>";
                 $btn .= "<a href='". route('medicine.destroy', $medicine->id)  ."' type=\"button\" class=\"btn btn-outline-danger  waves-effect waves-light\"><i class=\"mdi font-size-16 mdi-delete-sweep\"></i></a>";
                 $btn .= "</div>";
                 return $btn;
             })
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

        $manufacturers = Manufacturer::all();
        $medicineTypes = MedicineType::all();
        return view('medicine.MedicineForm', compact(['manufacturers','medicineTypes']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $request->validate([
            "manufacturer_id"  => 'required|numeric',
            "medicine_type_id" => 'required|numeric',
            "medicine_name"    => 'required',
            "generic_name"     => 'required',
            "strength"         => 'required',
            "unit"             => 'required|numeric',
            "unit_price"       => 'required|numeric',
        ]);
        $medicine = new Medicine;
        $medicine->medicine_name    = $request->medicine_name;
        $medicine->medicine_type_id = $request->medicine_type_id;
        $medicine->manufacturer_id  = $request->manufacturer_id;
        $medicine->generic_name     = $request->generic_name;
        $medicine->strength         = $request->strength;
        $medicine->unit             = $request->unit;
        $medicine->unit_price       = $request->unit_price;
        $medicine->save();

        return redirect()->route('medicine.index')
            ->with([
                'message' =>  $medicine->medicine_name . ' Medicine Type Added',

                'class'=> "alert-success"
            ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        $manufacturers = Manufacturer::all();
        $medicineTypes = MedicineType::all();
        return view('medicine.MedicineForm', compact(['manufacturers','medicineTypes','medicine']));

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
