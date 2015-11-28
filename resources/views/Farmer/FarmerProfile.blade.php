@extends('layout.layout') 
@section('content')
<div class="TopSpacePointList"></div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img src="img/profile1.jpg" class="img-responsive img-thumbnail">
            <div class="EditButtonTop"></div>
        <a href="">    <button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Farmer Profile</button></a>
            
            <button class="btn btn-success btn-block"><span class="glyphicon glyphicon-print"></span>Print Farmer Card</button>
        </div>
        <div class="col-md-8">
        	<legend>Farmer Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Name</strong></td><td>Tutul Haque</td></tr>
                    <tr><td><strong>Phone</strong></td><td>01730712200</td></tr>
                    <tr><td><strong>National ID#</strong></td><td>01548795063549</td></tr>
                    <tr><td><strong>Farmer ID#</strong></td><td>015487949</td></tr>
                    <tr><td><strong>Date of Birth</strong></td><td>12/08/1992</td></tr>
                    <tr><td><strong>Address</strong></td><td>Medical more</td></tr>
                    <tr><td><strong>Upzila</strong></td><td>Rangpur sadar</td></tr>
                    <tr><td><strong>District</strong></td><td>Rangpur</td></tr>
                    <tr><td><strong>Division</strong></td><td>Rngpur</td></tr>
                    <tr><td><strong>Remarks</strong></td><td>Has very good knowledge</td></tr>
                     
              </tbody>
          </table>
      </div>

      <a href="#" class="btn btn-success">Add Cultivation Infos</a>

        </div>
    </div>
</div>

		<div class="container">

	<div class="row">
		<div class="span5">
			<div class="col-md-11">
				<legend>Land Information</legend>

            <table class="table table-striped table-condensed table-bordered">
                  <thead>
                  <tr>
                      <th>Land Location(Upazila)</th>
                      <th>Land area(in acre)</th>
                      <th>Cultivated Crop Name</th>
                      <th>Expected Production</th>
                      <th>Harvest start date</th>
                      <th>Harvest End date</th>
                     
                   </tr>
              </thead>   
              <tbody>
               
                <tr>
                      <td>Domar</td>
                      <td>25</td>
                      <td>Jute</td>
                      <td>400kg</td>
                      <td>13/01/2015</td>
                      <td>25/06/2015</td>
                                                        
                </tr>
                 <tr>
                      <td>Joypur</td>
                      <td>1.5</td>
                      <td>Potato</td>
                      <td>4000kg</td>
                      <td>15/03/2015</td>
                      <td>27/06/2015</td>
                                                        
                </tr>
                 <tr>
                      <td>Cox's bazar</td>
                      <td>5</td>
                      <td>Tormuz</td>
                      <td>340kg</td>
                      <td>19/03/2015</td>
                      <td>27/05/2015</td>
                                                        
                </tr>
               </tbody>
            </table>
            </div>
        </div>
	</div>
</div>

@stop