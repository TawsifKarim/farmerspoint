@extends('layout.layout') 
@section('content')

<legend>Land Property</legend>

{!! Form::open(['route'=>'FarmerCrop.store','class'=>'form-horizontal']) !!}

<div class="form-group">
  <label class="col-md-4 control-label" for="land_location">cultivated Land Location</label>
  <div class="col-md-4">
<select name="land_locaiton" class="form-control">
 <?php
        $pdo = new PDO('mysql:host=localhost;dbname=fm1', 'root', '');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    $stmt = $pdo->prepare('Select * from upazila');
    $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
       }
     ?>
 </select>
</div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Area_of_cultivation">Area of Cultivation(in acre)</label>  
  <div class="col-md-4">
  <input id="Area_of_cultivation" name="area_of_cultivation" type="number" placeholder="Enter land area" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Expected_production">Expected Production (in kg)</label>  
  <div class="col-md-4">
  <input id="Expected_production" name="expected_amount" type="number" placeholder="Enter amount" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Harvest_start">harvest start date</label>  
  <div class="col-md-4">
  <input id="Harvest_start" name="harvest_start_date" type="date" placeholder="Enter date" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Harvest_end">harvest end date</label>  
  <div class="col-md-4">
  <input id="Harvest_end" name="harvest_end_date" type="date" placeholder="Enter date" class="form-control input-md" required="">
    
  </div>
</div>




<!-- Status type boolean -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">status</label>


  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="remarks"></textarea>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Submit</button>
  </div>
</div>

{!!Form::close()!!}


@stop