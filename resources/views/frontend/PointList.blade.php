@extends('layout.layout')
@section('content')

<div class="TopSpacePointList"></div>
<div class="container">



	<div class="row">

                    

		<div class="span5">

                    <!--searching section starts-->
                    {!! Form::open(['route'=>'farmerPoint.index','method'=>'GET','class'=>'form-horizontal']) !!}
                    <!--search box-->
                    <div class="form-group">
                     <!--search box for point name-->
                        <div class="col-md-3">
                      <input id="name" name="name" type="text" placeholder="Search by point name" class="form-control input-md">
                        </div>
                    <!--search box-->
                        <div class="col-md-3">
                      <input id="point_district" name="district_id" type="text" placeholder="Search by District" class="form-control input-md">
                        </div>
                    <!--search button-->
                      <button id="" name="" class="btn btn-primary">Search</button>
                        </div>
                      </div>
                    

                    {!! Form::close() !!}
                    <!--Searching section ends-->

            <table class="table table-striped table-condensed table-bordered">
                  <thead>
                  <tr>
                      <th>Point Name</th>
                      <th>Contact</th>
                      <th>Address</th>
					            <th>upazila</th>
					            <th>District</th>
					            <th>Division</th>
					            <th>Actions</th>

                   </tr>
              </thead>
              <tbody>
                @foreach($allpoint as $point)
                <tr>
                    <td>{{$point->name}}</td>
                    <td>{{$point->phone}}</td>
                    <td>{{$point->address}}</td>
					<td>{{$point->upazila->name}}</td>
					<td>{{$point->district->name}}</td>
					<td>{{$point->division->name}}</td>
					<td><a href="{{ route('farmerPoint.show',$point->id) }}" class="btn btn-info btn-block">Detail</a></td>

                </tr>

                @endforeach
              </tbody>
            </table>
			{!! $allpoint->render() !!}
            </div>
	</div>
</div>



@stop
