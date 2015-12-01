@extends('layout.layout') 
@section('content')

<div class="TopSpacePointList"></div>
<div class="container">

	<div class="row">
		<div class="span5">


            <table class="table table-striped table-condensed table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>Crop Type(ফসলের ধরন)</th>
                      <th>Crop(জাতের নাম )</th>
                      <th>Harvest season</th>
                      <th>Harvest Locations</th>
                    <!--Edit btn will be visible to admin-->
                      <th>বিস্তারিত</th>
                     
                   </tr>
              </thead>   
              <tbody>
                @foreach($allcrop as $crop)
                <tr>
                    <td>{{ $crop->crop_type_id }}</td>
                    <td>{{ $crop->name }}</td>
                    <td>{{ $crop->harvest_season }}</td>
                    <td>{{ $crop->harvest_locations }}</td>
                    <td><a href="{{route('crop.show',$crop->id)}}" class="btn btn-success">detail</a></td>
                     
                </tr>
                
                @endforeach                                   
              </tbody>
            </table>
            {!! $allcrop->render() !!}
            </div>
	</div>
</div>



@stop