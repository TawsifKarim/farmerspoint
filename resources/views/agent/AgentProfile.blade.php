@extends('layout.layout')
@section('content')
<div class="TopSpacePointList"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="img/profile1.jpg" class="img-responsive img-thumbnail">
            <div class="EditButtonTop"></div>
        <a href="{{ route('agent.edit',$agent->id) }}">    <button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Agent Profile</button></a>

            
        </div>
        <div class="col-md-8">
        	<legend>Agent Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Name</strong></td><td>{{ $agent->name }}</td></tr>
                    <tr><td><strong>email</strong></td><td>{{ $agent->email }}</td></tr>
                    <tr><td><strong>Phone</strong></td><td>{{ $agent->phone }}</td></tr>
                    <tr><td><strong>National ID#</strong></td><td>{{ $agent->nid }}</td></tr>
                    <tr><td><strong>Date of Birth</strong></td><td>{{ $agent->dob }}</td></tr>
                    <tr><td><strong>Address</strong></td><td>{{ $agent->address }}</td></tr>
                    <tr><td><strong>Upzila</strong></td><td>{{ $agent->upazila->name }}</td></tr>
                    <tr><td><strong>District</strong></td><td>{{ $agent->district->name }}</td></tr>
                    <tr><td><strong>Division</strong></td><td>{{ $agent->division->name }}</td></tr>
                    <tr><td><strong>Remarks</strong></td><td>{{ $agent->remarks }}</td></tr>

              </tbody>
          </table>
      </div>
  </div>
    </div>
</div>


@stop
