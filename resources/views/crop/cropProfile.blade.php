@extends('layout.layout') 
@section('content')
<div class="TopSpacePointList"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="{{ url($crop->crop) }}" class="img-responsive img-thumbnail">
            <div class="EditButtonTop"></div>
        <a href="{{ Route('crop.edit',$crop->id) }}"><button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Crop Detail</button></a>
            
            
        </div>
        <div class="col-md-8">
        	<legend>Crop Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Crop Name</strong></td><td>{{ $crop->name }}</td></tr>
                    <tr><td><strong>Crop Type</strong></td><td>{{ $crop->cropType->name }}</td></tr>
                    <tr><td><strong>Harvest Season</strong></td><td>{{ $crop->harvest_season }}</td></tr>
                    <tr><td><strong>Harvest Locations</strong></td><td>{{ $crop->harvest_locations }}</td></tr>
                    <tr><td><strong>Price(per kg)</strong></td><td>সরকার কতৃক নির্ধারিত মূল্য তালিকা</td></tr>
                    <tr><td><strong>Cultivation Process</strong></td><td>Need to be updated</td></tr>
                    <tr><td><strong>Food Value(per kg)</strong></td><td>Need to be updated</td></tr>
              </tbody>
          </table>
      </div>
  </div>
    </div>
</div>

		
@stop