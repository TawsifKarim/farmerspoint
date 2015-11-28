@extends('layout.layout') 
@section('content')
<div class="TopSpacePointList"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="img/crop.jpg" class="img-responsive img-thumbnail">
            <div class="EditButtonTop"></div>
        <a href="">    <button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Crop Profile</button></a>
            
            
        </div>
        <div class="col-md-8">
        	<legend>Agent Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Crop Name</strong></td><td>Badha Kopi</td></tr>
                    <tr><td><strong>Crop Type</strong></td><td>shitkalin foshol</td></tr>
                    <tr><td><strong>Harvest Season</strong></td><td>winter</td></tr>
                    <tr><td><strong>Harvest Locations</strong></td><td>naugao, Bogra</td></tr>
                     
              </tbody>
          </table>
      </div>
  </div>
    </div>
</div>

		
@stop