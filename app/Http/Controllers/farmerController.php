<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use App\Division;
use App\District;
use App\upazila;
use App\Model\FarmerCrop;
use App\Model\FarmerPoint;

class farmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $farmerList = User::where('user_type_id', 2)->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ('Farmer.FarmerRegistration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $farmer = User::create([
            'name'          =>  $request->name,
            'phone'         =>  $request->phone,
            'address'       =>  $request->address,
            'nid'           =>  $request->nid,
            'dob'           =>  $request->dob,
            'remarks'       =>  $request->remarks,
            'division_id'   =>  $request->division_id,
            'district_id'   =>  $request->district_id,
            'upazila_id'    =>  $request->upazila_id,
            'user_type_id'  =>  3   // 3 is for farmer
        ]);
        return redirect("farmer/{$farmer->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $farmer = User::find($id);
      $farmerCropList = FarmerCrop::where('user_id', $id)->get();

       return view ('Farmer.FarmerProfile', ['farmer' => $farmer, 'farmerCropList' => $farmerCropList]);
       //                ->with('farmerCrop',$farmer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $farmer=Users::findOrFail($id);
        // return view('Farmer.FarmerEdit',compact('farmer'));
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
        $input  = $request->all();
        $farmer = Users::findOrFail($id);
        $farmer = update($input);

        return 'Farmer Profile Updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
