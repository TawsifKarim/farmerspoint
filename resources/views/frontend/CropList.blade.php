@extends('layout.layout') 
@section('content')

<div class="TopSpacePointList"></div>
<div class="container">

	<div class="row">
		<div class="span5">
          <!--searching section starts-->
                    {!! Form::open(['route'=>'crop.index','method'=>'GET','class'=>'form-horizontal']) !!}
                    <!--search box-->
                    <div class="form-group">
                     <!--search box for point name-->
                        <div class="col-md-3">
                      <input id="name" name="name" type="text" placeholder="Search by crop name" class="form-control input-md">
                        </div>
                    <!--search button-->
                      <button id="" name="" class="btn btn-primary">Search</button>
                        </div>
                      </div>

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
                    <td><a href="{{route('crop.show',$crop->id)}}" class="btn btn-success btn-block">detail</a></td>
                     
                </tr>
                
                @endforeach                                   
              </tbody>
            </table>
            {!! $allcrop->render() !!}
            </div>
	</div>
</div>



@stop