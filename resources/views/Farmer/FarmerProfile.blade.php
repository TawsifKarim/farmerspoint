@extends('layout.layout')
@section('content')
<div class="TopSpacePointList"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="img/profile1.jpg" class="img-responsive img-thumbnail">
            <div class="EditButtonTop"></div>
        <a href="">    <button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Farmer Profile</button></a>


        </div>
        <div class="col-md-8">
        	<legend>Farmer Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Name</strong></td><td>{{ $farmer->name }}</td></tr>
                    <tr><td><strong>Phone</strong></td><td>{{ $farmer->phone }}</td></tr>
                    <tr><td><strong>National ID#</strong></td><td>{{ $farmer->nid }}</td></tr>

                    <tr><td><strong>Date of Birth</strong></td><td>{{ $farmer->dob->toDateString() }}</td></tr>
                    <tr><td><strong>Address</strong></td><td>{{ $farmer->address }}</td></tr>
                    <tr><td><strong>Upzila</strong></td><td>{{ $farmer->upazila->name }}</td></tr>
                    <tr><td><strong>District</strong></td><td>{{ $farmer->district->name }}</td></tr>
                    <tr><td><strong>Division</strong></td><td>{{ $farmer->division->name }}</td></tr>
                    <tr><td><strong>Remarks</strong></td><td>{{ $farmer->remarks }}</td></tr>

              </tbody>
          </table>
      </div>

      <a href="{{Route('farmer.crop.create',$farmer->id)}}" class="btn btn-success">Add Cultivation Infos</a>


        </div>
    </div>
</div>

		<div class="container">

	<div class="row">
		<div class="span5">
			<div class="col-md-11">
				<legend>Land Information</legend>

                @if(count($farmerCropList))
                    <table class="table table-striped table-condensed table-bordered">
                          <thead>
                          <tr>
                              <th>Land Location(Upazila)</th>
                              <th>Land area(in acre)</th>
                              <th>Cultivated Crop Name</th>
                              <th>Expected Production</th>
                              <th>Harvest start date</th>
                              <th>Harvest End date</th>
                              <th>Actions</th>

                           </tr>
                      </thead>
                      <tbody>

                    @foreach($farmerCropList as $farmerCrop)
                        <tr>
                              <td>{{ $farmerCrop->landLocation->name }}</td>
                              <td>{{ $farmerCrop->area_of_cultivation }}</td>
                              <td>{{ $farmerCrop->crop_id }}</td>
                              <td>{{ $farmerCrop->expected_amount }}</td>
                              <td>{{ $farmerCrop->harvest_start_date->toDateString() }}</td>
                              <td>{{ $farmerCrop->harvest_end_date->toDateString() }}</td>
                              <td>

                                  {!! Form::open(['url' => "farmer/{$farmer->id}/crop/{$farmerCrop->id}", 'method' => 'delete']) !!}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                  {!! Form::close() !!}
                              </td>
                        </tr>
                    @endforeach
                @else
                    <h2>No Data available</h2>
                @endif


               </tbody>
            </table>
            </div>
        </div>
	</div>
</div>

@stop
