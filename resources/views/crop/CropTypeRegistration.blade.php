@extends('layout.layout') 
@section('content')



<div class="container-fluid">


{!! Form::open(['route'=>'cropType.store','class'=>'form-horizontal']) !!}

<fieldset>

<!-- Form Name -->
<legend>Crop Registration Form</legend>


<!--Crop Type (dhan or paaat or alu) Name input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Crop Name (ফসলের ধরন)</label>  
  <div class="col-md-4">
  <input id="Name" name="name" type="text" placeholder="Enter name" class="form-control input-md" required="">
    
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Submit</button>
  </div>
</div>


</fieldset>

{!! Form::close() !!}

</div>

@stop