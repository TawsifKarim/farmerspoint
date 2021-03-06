<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FarmerCropRequest;
use App\Http\Controllers\Controller;
use App\Model\FarmerCrop;
use App\Model\Crop;
use App\Model\Upazila;

use App\User;

class farmerCropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function create($id)
     {
    
        $cropList = Crop::lists('name', 'id')->all();
        $upazilaList = Upazila::lists('name', 'id')->all();
        return view('Farmer.FarmerCropRegistration', [
            'farmerId'    => $id,
            'cropList'    => $cropList,
            'upazilaList' => $upazilaList
        ]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



 public function store($id, FarmerCropRequest $request)
     {
       $farmerCrop = FarmerCrop::create([
            'crop_id'             => $request->crop_id,
            'land_location'       => $request->land_location,
            'area_of_cultivation' => $request->area_of_cultivation,
            'harvest_start_date'  => $request->harvest_start_date,
            'harvest_end_date'    => $request->harvest_end_date,
            'expected_amount'     => $request->expected_amount,
            'price'               => $request->price,
            'status'              => $request->status,
            'remarks'             => $request->remarks,
            'user_id'             => $id
        ]);
        $farmer = User::findOrFail($id);
        //return 'saved';
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cropList = Crop::lists('name', 'id')->all();
         $upazilaList = Upazila::lists('name', 'id')->all();
         $crop=FarmerCrop::findOrFail($id);
         return view('Farmer.FarmerCropEdit',compact('crop', 'cropList','upazilaList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FarmerCropRequest $request, $id)
    {
        $input = $request->all();
        $farmercrop = FarmerCrop::findOrFail($id);
        $farmercrop->update($input);

        return redirect('farmer/{$farmer->id}');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($farmerId, $id)
    {
        $farmerCrop = FarmerCrop::find($id);
        $farmerCrop->delete();

        return redirect("farmer/$farmerId");
    }
}
