<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EquipmentController extends Controller
{
    public function index(Request $request)
    {
        $data = Equipment::orderBy('id','DESC')->get();
        return view('admin.equipments.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.equipments.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'eq_name' => 'required',
            'eq_price' => 'required|digits_between:1,7',
            'eq_type' => 'required',
        ]);
    
        $input = $request->all();
    
        $user = Equipment::create($input);

        $data = Equipment::orderBy('id','DESC')->get();
        Session::flash('flash_message', 'Equipment successfully added!');
        return view('admin.equipments.index',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::find($id);
    
        return view('admin.equipments.edit',compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'eq_name' => 'required',
            'eq_price' => 'required|digits_between:1,7',
            'eq_type' => 'required',
        ]);
    
        $input = $request->all();
    
        $equipment = Equipment::find($id);
        $equipment->update($input);

        Session::flash('flash_message', 'Equipment successfully updated!');
        return redirect()->route('equipments.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipment::find($id)->delete();
        Session::flash('flash_message', 'Equipment successfully deleted!');
        return redirect()->route('equipments.index');
    }
}
