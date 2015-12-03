<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use App\Model\FarmerPoint;
use Intervention\Image\Facades\Image;

use App\Http\Requests\agentRequest;

class agentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  

       //listing all agent when no search is done
       $allagent = User::where('user_type_id', 2)->paginate(15);
       

       //listing for drop down menu
       $farmerPointList = FarmerPoint::Lists('name','id'); 


        //taking input from search field
       $agent_name = $request->input('name');
       $agent_phone = $request->input('phone');
       $agent_point = $request->input('id');
       //searching requested data
       if(!empty($agent_name)){
           $allagent = User::where('user_type_id',2)->where('name','LIKE','%'.$agent_name.'%')->paginate(10);
          }

        if(!empty($agent_phone)){
           $allagent = User::where('user_type_id',2)->where('phone','LIKE','%'.$agent_phone.'%')->paginate(10);
           }  
        if(!empty($agent_point)){
            $allagent = User::where('user_type_id',2)->where('farmer_point_id',$agent_point)->paginate(10);
        }
       
       //updating allagent variable
       //$allagent=$allagent->paginate(10);


        return view ('agent.AgentList',['allagent'=>$allagent,'farmerPointList'=>$farmerPointList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $farmerPointList = FarmerPoint::lists('name', 'id')->all();

        return view ('agent.AgentRegistration', ['farmerPointList' => $farmerPointList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent = User::create([
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'password'      =>  bcrypt($request->password),
            'phone'         =>  $request->phone,
            'address'       =>  $request->address,
            'nid'           =>  $request->nid,
            'dob'           =>  $request->dob,
            'remarks'       =>  $request->remarks,
            'division_id'   =>  $request->division_id,
            'district_id'   =>  $request->district_id,
            'upazila_id'    =>  $request->upazila_id,
            'farmer_point_id' => $request->farmer_point_id,
            'user_type_id'  =>  2  // 2 is for agent
        ]);
        $image = Image::make($request->profile_picture);
        $image->resize(250, 272);
        $image->save(public_path("uploads/Agents/Agent_$agent->id.jpg"));
        return redirect("agent/{$agent->id}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = User::find($id);
        return view ('agent.agentProfile', ['agent' => $agent]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $agent = User::findOrFail($id);
       return view ('agent.AgentEdit',compact('agent'));
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
        $agent = User::findOrFail($id);
        $agent->update($input);

         if(!empty($request->profile_picture)){
        
        $image = Image::make($request->profile_picture);
        $image->resize(250, 272);
        $image->save(public_path("uploads/Agents/Agent_$id.jpg"));
    
        }

        return redirect("agent/{$agent->id}");

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
