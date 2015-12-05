@extends('layout.adminlayout') 
@section('content')

	<div class="container-fluid">
        <div class="row">



           <div class="col-md-2" id="panelMenu">
            <div class="panelTop"></div>
           <legend> <h3 style="color:grey; text-align: center;">Admin Panel</h3> </legend>

           <p>Welcome {{ Auth::user()->name }}</p>
            
   <a href="{{ route('agent.create') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Register Agent</button></a>
   <a href="{{ route('farmer.create') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Register Farmer</button></a>
   <a href="{{ route('farmerPoint.create') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Register Farmer Point</button></a>
   <a href="{{ route('cropType.create') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Register Crop Type</button></a>
   <a href="{{ route('crop.create') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Register Crop</button></a>
   <a href="{{ route('farmer.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Farmer</button></a>
   <a href="{{ route('agent.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Agent</button></a>
   <a href="{{ route('crop.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Crop</button></a>
   <a href="{{ route('farmerPoint.index') }}"><button class="btn btn-primary btn-sm   btn-block" style="margin:3px 0px;">Search Point</button></a>
         

          </div>
          	<div class="col-md-10">
          		<img src="img/admin.jpg" class="img-responsive">
          	<div class="col-md-14">
          	<div class="jumbotron text-center">
						<h3><strong>WELCOME TO Admin Panel</strong></h3>
						<p>
						From here you can Register,Update and Delete everything of the Farmer's Point website
						</p>
				</div>

          	</div>	
          	</div>
</div>
				
 </div>        
@stop