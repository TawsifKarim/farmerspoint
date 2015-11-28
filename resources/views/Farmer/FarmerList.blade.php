@extends('layout') 
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
                @foreach($allfarmer as $farmer)
                <tr>
                    <td>{{$farmer->name}}</td>
                    <td>{{$farmer->phone}}</td>
                    <td>{{$farmer->address}}</td>
                    <td>{{$farmer->upazila->upazila}}</td>
                    <td>{{$farmer->district->district}}</td>
                    <td>{{$farmer->division->division}}</td>
                    <td>
                        <a href="{{route('Farmer.FarmerProfile',$farmer->id)}}" class="btn btn-success">Profile</a>
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