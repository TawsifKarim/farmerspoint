@extends('layout.adminlayout') 
@section('content')

	<div class="container-fluid">
        <div class="row">



           <div class="col-md-2" style="background-color: #000000; height:100%;" >
            <div class="panelTop"></div>
           <legend> <h3 style="color:white; text-align: center;">Agent Panel</h3> </legend>


            
   
   <a href="{{ route('farmer.create') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Register Farmer</button></a>
   <a href="{{ route('farmer.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Farmer</button></a>
   <a href="{{ route('agent.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Agent</button></a>
   <a href="{{ route('crop.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Crop</button></a>
   <a href="{{ route('farmerPoint.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Point</button></a>
         

          </div>
          	<div class="col-md-10">
          		<img src="img/agent.jpg" class="img-responsive">
          	<div class="col-md-14">
          	<div class="jumbotron text-center">
						<h3><strong>WELCOME TO Agent Panel</strong></h3>
						<p>
						From here you can Register,Update and Delete Farmer's Information and their Land Informations.
						</p>
				</div>

          	</div>	
          	</div>
</div>
				
 </div>        
@stop