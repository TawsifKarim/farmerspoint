@extends('layout.layout') 
@section('content')

<div class="TopSpacePointList"></div>
<div class="container">

	<div class="row">
		<div class="span5">


            <table class="table table-striped table-condensed table-bordered table-hover">
                  <thead>
                  <tr>
                      <th>Area Name</th>
                      <th>Location</th>
                      <th>Contact</th>
                     
                   </tr>
              </thead>   
              <tbody>
                @foreach($alldata as $data)
                <tr>
                    <td>{{$data->area_name}}</td>
                    <td>{{$data->location}}</td>
                    <td>{{$data->contact}}</td>
                                                        
                </tr>
                
                @endforeach                                   
              </tbody>
            </table>
            </div>
	</div>
</div>



@stop