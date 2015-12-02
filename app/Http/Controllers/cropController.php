<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Model\Crop;
use App\Model\CropType;
use Intervention\Image\Facades\Image;

class cropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $allcrop = Crop::orderBy('name');
        $crop_name = $request->input('name');
        if(!empty($crop_name)){
            $allcrop->Where('name','LIKE','%'.$crop_name.'%');
        }
        $allcrop = $allcrop->paginate(10);
       return view ('frontend.CropList',compact('allcrop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('crop.CropRegister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crop = Crop::create([
            'name'                 =>  $request->name,
            'crop_type_id'         =>  $request->crop_type_id,
            'harvest_season'       =>  $request->harvest_season,
            'harvest_locations'     => $request->harvest_locations,
            
        ]);
         if(!empty($request->profile_picture)){

            $image = Image::make($request->profile_picture);
            $image->resize(250, 272);
            $image->save(public_path("uploads/Crops/crop_$crop->id.jpg"));
            
         }
        return redirect("crop/{$crop->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crop = Crop::find($id);
        $cropType = CropType::where('id', $id)->get();


        return view ('crop.cropProfile',['crop'=>$crop,'cropType' =>$cropType]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crop=Crop::findOrFail($id);
        return view ('crop.Cropedit',compact('crop'));
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
        $input = $request->all();
        $crop = Crop::findOrFail($id);
        $crop->update($input);

         if(!empty($request->profile_picture)){
        
        $image = Image::make($request->profile_picture);
        $image->resize(250, 272);
        $image->save(public_path("uploads/Crops/crop_$id.jpg"));
    
        }

        return redirect("crop/{$crop->id}");

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
