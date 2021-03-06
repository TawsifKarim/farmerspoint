@extends('layout.layout') 
@section('content')


<div class="TopSpacePointList"></div>
<div class="container">

	<div class="row">
		<div class="span5">
                {!! Form::open(['route'=>'agent.index','method'=>'GET','class'=>'form-horizontal']) !!}
                    <!--search box-->
              <div class="form-group">
               

                <!--search box for point name-->
                <div class="col-md-3">
                {!! Form::text('name',null, ['class' => 'form-control','placeholder' => 'Agent Name']) !!}
                </div>
                 
               

                <div class="col-md-3"> 
                {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'Contact number']) !!}
                </div> 
              
                <!--search box for point name-->
                <div class="col-md-2">
                {!! Form::select('id', $farmerPointList,null, ['class' => 'form-control','placeholder' => 'Point Name']) !!}
                </div>  
                    
                <!--search button-->
                <button id="" name="" class="btn btn-primary">Search</button>
                <button id="" name="" class="btn btn-primary">Back to List</button>
              </div>

            <table class="table table-striped table-condensed table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>Name</th>
                      <th>Contact</th>
                      <th>Address</th>
                      <th>Upazila</th>
                      <th>District</th>
                      <th>Division</th>
                      <th>Action</th>
                     
                   </tr>
              </thead>   
              <tbody>
                @foreach($allagent as $agent)
                <tr>
                    <td>{{$agent->name}}</td>
                    <td>{{$agent->phone}}</td>
                    <td>{{$agent->address}}</td>
                    <td>{{$agent->upazila->name}}</td>
                    <td>{{$agent->district->name}}</td>
                    <td>{{$agent->division->name}}</td>
                    <td>
                        <a href="{{route('agent.show',$agent->id)}}" class="btn btn-success btn-block">Profile</a>
                    </td>                                       
                </tr>
                                                        
                </tr>
                
                @endforeach                                   
              </tbody>
            </table>
          {!! $allagent->render() !!}
            </div>
	</div>
</div>



@stop