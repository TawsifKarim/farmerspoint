@extends('layout.layout')
@section('content')
<div class="TopSpacePointList"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="250" height="272" src="https://maps.google.com/maps?hl=en&q=Pariser Platz, 10117 Berlin&ie=UTF8&t=roadmap&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">buyproxies.io</a></small></div></iframe>
            <div class="EditButtonTop"></div>

            <!--edit will be only visible to admins-->

        <a href="{{ route('farmerPoint.edit',$farmerPoint->id) }}"><button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Farmer Point</button></a>


        </div>
        <div class="col-md-8">
        	<legend>Point Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Point Name</strong></td><td>{{ $farmerPoint->name }}</td></tr>
                    <tr><td><strong>Contact</strong></td><td>{{ $farmerPoint->phone }}</td></tr>
                    <tr><td><strong>address</strong></td><td>{{ $farmerPoint->address }}</td></tr>
                    <tr><td><strong>upazila</strong></td><td>{{ $farmerPoint->upazila->name }}</td></tr>
                    <tr><td><strong>district</strong></td><td>{{ $farmerPoint->district->name }}</td></tr>
                    <tr><td><strong>division</strong></td><td>{{ $farmerPoint->division->name }}</td></tr>
              </tbody>
          </table>
      </div>
  </div>
    </div>
</div>

<!--this block will only be visible to admins and agents-->

  <div class="container">

  <div class="row">
    <div class="span5">
      <div class="col-md-11">
        <legend>Agents of the Farmer Point</legend>

            <table class="table table-striped table-condensed table-bordered">
                  <thead>
                  <tr>
                      <th>Agent Names</th>
                      <th>contact</th>



                   </tr>
              </thead>
              <tbody>
                @foreach($farmerPoint->user as $agent)
                <tr>
                      <td>{{ $agent->name }}</td>
                      <td>{{ $agent->phone }}</td>

                </tr>
                @endforeach
                 </tbody>
            </table>
            </div>
        </div>
  </div>
</div>


@stop
