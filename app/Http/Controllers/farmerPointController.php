<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\FarmerPoint;


class farmerPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $allpoint = FarmerPoint::orderBy('name');
        $point_name = $request->input('name'); //form data receiving
        $point_district = $request->input('district_id');
        
        if(!empty($point_name)){                //filtering allpoint with name
            $allpoint->Where('name','LIKE','%'.$point_name.'%');
        }
        
        if(!empty($point_district)){            //filtering allpoint with district
            $allpoint->Where('district_id','LIKE','%'.$point_district.'%');
        }
        
        $allpoint=$allpoint->paginate(10);
        return view ('frontend.pointlist',compact('allpoint'));
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
    public function store(Request $request)
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
    public function update(Request $request, $id)
    {
       // $input = $request->all();
       // $farmerPoint = FarmerPoint::findOrFail($id);
        // $farmerPoint ->update($input);
       // return redirect("farmerPoint/{$farmerPoint->id}");

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
