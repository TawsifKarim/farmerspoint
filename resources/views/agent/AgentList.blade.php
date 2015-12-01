@extends('layout.layout') 
@section('content')


<div class="TopSpacePointList"></div>
<div class="container">

	<div class="row">
		<div class="span5">


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
                        <a href="{{route('agent.show',$agent->id)}}" class="btn btn-success">Profile</a>
                    </td>                                       
                </tr>
                                                        
                </tr>
                
                @endforeach                                   
              </tbody>
            </table>
            </div>
	</div>
</div>



@stop