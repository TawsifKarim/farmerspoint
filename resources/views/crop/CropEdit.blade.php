@extends('layout.layout') 
@section('content')



<div class="container-fluid">


{!! Form::open(['route'=>['crop.update',$crop->id],'class'=>'form-horizontal','method'=>'PUT','files'=> true]) !!}

<fieldset>

<!-- Form Name -->
<legend>Crop Registration Form</legend>


<!--crop Name ( jaat er name, example - binnapuri(rice) )input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Crop Name(জাতের নাম)</label>  
  <div class="col-md-4">
  <input id="Name" name="name" type="text" value="{{ $crop->name }}" class="form-control input-md" required="">
    
  </div>
</div>


<!--Must retrun with CropType Table from controller-->

<div class="form-group">
  <label class="col-md-4 control-label" for="crop_type_id">Crop Type</label>
  <div class="col-md-4">
<select name="crop_type_id" value="{{ $crop->crop_type_id }}" class="form-control">
 <?php
        $pdo = new PDO('mysql:host=localhost;dbname=fm1', 'root', '');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  

    $stmt = $pdo->prepare('Select * from crop_type');
    $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
       }
     ?>
 </select>
</div>
</div>




<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="harvest_season">Harvest Season</label>
  <div class="col-md-4">
    <select id="harvest_season" name="harvest_season" value="{{ $crop->harvest_season }}" class="form-control">

       <option value="Summer">Summer</option>
       <option value="Rainy">Rainy</option>
       <option value="Autumn">Autumn</option>
       <option value="Fall">Fall</option>
       <option value="Winter">Winter</option>
       <option value="Spring">Spring</option>
       <option value="Full year">Full year</option>
      
        
 </select>
  </div>
</div>

<!-- Select harvest locaiton-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Harvest Locations</label>  
  <div class="col-md-4">
  <input id="Name" name="harvest_locations" type="text" value="{{ $crop->harvest_locations }}" class="form-control input-md" required="">
    
  </div>
</div>


<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Choose crop photo</label>
  <div class="col-md-4">
    <input id="filebutton" name="profile_picture" class="input-file" type="file">
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