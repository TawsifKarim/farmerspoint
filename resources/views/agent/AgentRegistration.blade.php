@extends('layout.layout')
@section('content')



<div class="container-fluid">


{!! Form::open(['route'=>'agent.store','class'=>'form-horizontal']) !!}

<fieldset>

<!-- Form Name -->
<legend>Agent Registration Form</legend>




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
  <label class="col-md-4 control-label" for="password">password</label>
  <div class="col-md-4">
  <input id="Name" name="password" type="password"  class="form-control input-md" required="">

  </div>
</div>

<!-- phone input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone">Phone</label>
  <div class="col-md-4">
  <input id="Phone" name="phone" type="text" placeholder="Enter phone no." class="form-control input-md" required="">

  </div>
</div>
<!-- address input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Address">Address</label>
  <div class="col-md-4">
  <input id="Address" name="address" type="text" placeholder="Enter address" class="form-control input-md" required="">

  </div>
</div>

<!-- National_Id input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nid">National ID</label>
  <div class="col-md-4">
  <input id="Nid" name="nid" type="text" placeholder="Enter National ID" class="form-control input-md" required="">

  </div>
</div>

<!-- date of birth input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="DOB">Date of birth</label>
  <div class="col-md-4">
  <input id="DOB" name="dob" type="date" placeholder="Enter Date of Birth" class="form-control input-md" required="">

  </div>
</div>

<!-- user_type_id -->

<input type="hidden" name="user_type_id" value="2">

<!-- Select Division -->

<!--Fetching data from database-->
<div class="form-group">
  <label class="col-md-4 control-label" for="division_id">Division</label>
  <div class="col-md-4">
<select name="division_id" class="form-control">
 <?php
        $pdo = new PDO('mysql:host=localhost;dbname=fm1', 'root', '');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('Select * from division');
    $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
       }
     ?>
 </select>
</div>
</div>

<!-- Select District -->

<!--Fetching data from database-->
<div class="form-group">
  <label class="col-md-4 control-label" for="district_id">District</label>
  <div class="col-md-4">
<select name="district_id" class="form-control">
 <?php
        $pdo = new PDO('mysql:host=localhost;dbname=fm1', 'root', '');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('Select * from district');
    $stmt->execute();
       while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
       }
     ?>
 </select>
</div>
</div>




<!-- Select Upazila -->

<!--Fetching data from database-->
<div class="form-group">
  <label class="col-md-4 control-label" for="upazila">Upazila</label>
  <div class="col-md-4">
<select name="upazila_id" class="form-control">
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
  <label class="col-md-4 control-label" for="v">Farmer Point</label>
  <div class="col-md-4">
  {!! Form::select('farmer_point_id', $farmerPointList, null, ['class' => 'form-control']) !!}

  </div>
</div>



<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Remarks</label>
  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="remarks"></textarea>
  </div>
</div>




<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Choose photo</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
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
