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

        return view('medicineType.MedicineTypeForm');
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
            'type_name' => 'string|required|min:5',
        ]);
        $medicinetype = new MedicineType;
        $medicinetype->type_name = $data['type_name'];
        $medicinetype->save();
        return redirect()->route('medicine_type.index')
            ->with([
                'message' => $medicinetype->type_name . ' Medicine Type Added',

                'class'=> "alert-success"
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineType  $medicineType
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineType $medicineType)
    {

        return view('medicineType.MedicineTypeForm', compact('medicineType'));
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
        $data =  $request->validate([
            'type_name' => 'string|required|min:5',
        ]);
        $medicineType->type_name = $data['type_name'];
        $medicineType->save();
        return redirect()->route('medicine_type.index')
            ->with([
                'message' => $medicineType->id . '. ' . $medicineType->type_name . ' Updated Successfully',
                'class'=> "alert-success"
            ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineType  $medicineType
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicineType $medicineType)
    {
        $medicineType->delete();
        return redirect()->route('medicine_type.index')
            ->with([
                'message' => $medicineType['id']. '. ' .$medicineType['type_name'] . ' Delete Successfully',
                'class'=> "alert-danger"
            ]);

    }
}
