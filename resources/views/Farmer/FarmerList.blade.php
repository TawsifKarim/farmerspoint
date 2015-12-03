@extends('layout.layout') 
@section('content')


<div class="TopSpacePointList"></div>
<div class="container">

	<div class="row">
		<div class="span5">
                   <!--searching section starts-->
                    {!! Form::open(['route'=>'farmer.index','method'=>'GET','class'=>'form-horizontal']) !!}
                    <!--search box-->
                    <div class="form-group">
                      <!--search box for phone-->
                        <div class="col-md-3">
                      <input id="" name="name" type="text" placeholder="Search by name" class="form-control input-md">
                        </div>
                     <!--search box for phone-->
                        <div class="col-md-3">
                      <input id="" name="phone" type="text" placeholder="Search by Phone number" class="form-control input-md">
                        </div>
                     <!--search box for point name-->
                        <div class="col-md-2">
                      {!! Form::select('id', $farmerPointList,null, ['class' => 'form-control','placeholder' => 'Point Name']) !!}
                        </div> 
                    <!--search button-->
                      <button id="" name="" class="btn btn-primary">Search</button>
                      <button id="" name="" class="btn btn-primary">Back to List</button>
                        </div>
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
                @foreach($allfarmer as $farmer)
                <tr>
                    <td>{{$farmer->name}}</td>
                    <td>{{$farmer->phone}}</td>
                    <td>{{$farmer->address}}</td>
                    <td>{{$farmer->upazila->name}}</td>
                    <td>{{$farmer->district->name}}</td>
                    <td>{{$farmer->division->name}}</td>
                    <td>
                        <a href="{{ route('farmer.show',$farmer->id )}}" class="btn btn-success btn-block">Profile</a>
                    </td>                                       
                </tr>
                                                        
                </tr>
                
                @endforeach                                   
              </tbody>
            </table>
            {!! $allfarmer->render() !!}
            </div>
	</div>
</div>



@stop