<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\FarmerPoint;
use App\Model\District;
use App\Http\Requests\FarmerPointRequest;


class farmerPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //getting all point when no search is done
        $allpoint = FarmerPoint::orderBy('name'); 
        
        //listing for drop down search
        $farmerPointList = FarmerPoint::Lists('name','id'); 
        $districtList = District::Lists('name','id'); 
        
        //form data receiving
        $point_name = $request->input('id'); 
        $point_district = $request->input('district_id');
        $phone = $request->input('phone');

        if(!empty($phone)){
            $allpoint->Where('phone','LIKE','%'.$phone.'%');
        }
        
        if(!empty($point_name)){                //filtering allpoint with name
            $allpoint->Where('id','LIKE','%'.$point_name.'%');
        }
        
        if(!empty($point_district)){            //filtering allpoint with district
            $allpoint->Where('district_id',$point_district);
        }
        
        $allpoint=$allpoint->paginate(10);
        return view ('frontend.pointlist',['allpoint' => $allpoint,
                                           'farmerPointList'=>$farmerPointList,
                                           'districtList' =>$districtList
                                          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view ('FarmerPoint.createFarmerPoint');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FarmerPointRequest $request)
    {
        $farmerPoint = FarmerPoint::create([
            'name'          =>  $request->name,
            'phone'         =>  $request->phone,
            'address'       =>  $request->address,
            'division_id'   =>  $request->division_id,
            'district_id'   =>  $request->district_id,
            'upazila_id'    =>  $request->upazila_id,

        ]);
        return redirect("farmerPoint/{$farmerPoint->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $farmerPoint = FarmerPoint::find($id);

         return view ('FarmerPoint.FarmerPointDetail', ['farmerPoint' => $farmerPoint]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $farmerPoint=FarmerPoint::findOrFail($id);
        return view('farmerPoint.editFarmerPoint',compact('farmerPoint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $input = $request->all();
        $farmerPoint = FarmerPoint::findOrFail($id);
        $farmerPoint ->update($input);
        return redirect("farmerPoint/{$farmerPoint->id}");

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
