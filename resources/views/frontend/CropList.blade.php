@extends('layout.layout') 
@section('content')

<div class="TopSpacePointList"></div>
<div class="container">

	<div class="row">
		<div class="span5">


            <table class="table table-striped table-condensed table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>Crop Type</th>
                      <th>Crop</th>
                      <th>Harvest season</th>
                      <th>Harvest Locations</th>
                    <!--Edit btn will be visible to admin-->
                      <th>action</th>
                     
                   </tr>
              </thead>   
              <tbody>
                @foreach($allcrops as $crop)
                <tr>
                    <td>{{$crop->crop_type}}</td>
                    <td>{{$crop->name}}</td>
                    <td>{{$crop->harvest_season}}</td>
                    <td>{{$crop->harvest_area}}</td>
                     <a href="{{route('crop.cropEdit',$crop->id)}}" class="btn btn-success">Edit</a>                                   
                     <a href="{{route('crop.cropProfile',$crop->id)}}" class="btn btn-success">Profile</a>
                </tr>
                
                @endforeach                                   
              </tbody>
            </table>
            </div>
	</div>
</div>



@stop