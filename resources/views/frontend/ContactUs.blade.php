@extends('layout.layout') 
@section('content')
<img src="/img/bg1.jpg" class="img-responsive">
<div class="container-fluid">


{!! Form::open(['route'=>'agent.store','class'=>'form-horizontal','files' => true]) !!}

<fieldset>

<!-- Form Name -->
<legend>Contact Us</legend>




<!-- Name input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>
  <div class="col-md-4">
  <input id="Name" name="name" type="text" placeholder="Enter name" class="form-control input-md" required="">

  </div>
</div>
<!-- email input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">email</label>
  <div class="col-md-4">
  <input id="Name" name="email" type="text" placeholder="Enter email address" class="form-control input-md" required="">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Subject</label>
  <div class="col-md-4">
  <input id="Name" name="subject" type="text" placeholder="Enter name" class="form-control input-md" required="">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Your Message</label>
  <div class="col-md-4">
  <textarea class="form-control" id="textarea" name="remarks"></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Submit</button>
  </div>
</div>
@stop