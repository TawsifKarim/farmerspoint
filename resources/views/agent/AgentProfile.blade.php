@extends('layout.layout')
@section('content')
<div class="TopSpacePointList"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="img/profile1.jpg" class="img-responsive img-thumbnail">
            <div class="EditButtonTop"></div>
        <a href="">    <button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Agent Profile</button></a>

            <button class="btn btn-success btn-block"><span class="glyphicon glyphicon-print"></span>Print Agent Card</button>
        </div>
        <div class="col-md-8">
        	<legend>Agent Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Name</strong></td><td>{{ $agent->name }}</td></tr>
                    <tr><td><strong>email</strong></td><td>{{ $agent->email }}</td></tr>
                    <tr><td><strong>Phone</strong></td><td>01730712200</td></tr>
                    <tr><td><strong>National ID#</strong></td><td>01548795063549</td></tr>
                    <tr><td><strong>Agent ID#</strong></td><td>015487949</td></tr>
                    <tr><td><strong>Date of Birth</strong></td><td>12/08/1992</td></tr>
                    <tr><td><strong>Address</strong></td><td>Medical more</td></tr>
                    <tr><td><strong>Upzila</strong></td><td>Rangpur sadar</td></tr>
                    <tr><td><strong>District</strong></td><td>Rangpur</td></tr>
                    <tr><td><strong>Division</strong></td><td>Rngpur</td></tr>
                    <tr><td><strong>Remarks</strong></td><td>Has very good knowledge</td></tr>

              </tbody>
          </table>
      </div>
  </div>
    </div>
</div>


@stop
