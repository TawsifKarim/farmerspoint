@extends('layout.layout')
@section('content')
<script
src="http://maps.googleapis.com/maps/api/js">
</script>
<img src="/img/bg5.jpg" class="img-responsive">

<div class="container-fluid">


{!! Form::open(['route'=>['farmerPoint.update',$farmerPoint->id],'class'=>'form-horizontal','method'=>'PUT']) !!}

<fieldset>

<!-- Form Name -->
<legend>Farmer Point Registration Form</legend>




<!-- Name input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>
  <div class="col-md-4">
  <input id="Name" name="name" type="text" value="{{ $farmerPoint->name }}" class="form-control input-md" required="">

  </div>
</div>
<!-- phone input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Phone">Phone</label>
  <div class="col-md-4">
  <input id="Phone" name="phone" type="text" value="{{ $farmerPoint->phone }}" class="form-control input-md" required="">

  </div>
</div>
<!-- address input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Address">Address</label>
  <div class="col-md-4">
  <input id="Address" name="address" type="text" value="{{ $farmerPoint->address }}" class="form-control input-md" required="">

  </div>
</div>


<!-- Select Division -->

<!--Fetching data from database-->
<div class="form-group">
  <label class="col-md-4 control-label" for="division_id">Division</label>
  <div class="col-md-4">
<select name="division_id" value="{{ $farmerPoint->division_id }}" class="form-control">
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
<select name="district_id" value="{{ $farmerPoint->district_id }}"  class="form-control">
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
<select name="upazila_id"  value="{{ $farmerPoint->upazila_id }}" class="form-control">
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

<script>
function initialize() {
    var latitude = 23.786758526804636;
    var longitude = 90.39979934692383;
    var zoom = 11;
    
    var LatLng = new google.maps.LatLng(latitude, longitude);

  var mapProp = {
    center: LatLng,
    zoom:12,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker = new google.maps.Marker({
      position: LatLng,
      map: map,
      title: 'Drag Me!',
      draggable: true
    });
  google.maps.event.addListener(marker, 'dragend', function(event) {
    
      document.getElementById('la').value = event.latLng.lat();
      document.getElementById('lo').value = event.latLng.lng();


   
});
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
     
        <div id="googleMap" style="width:auto;height:400px;"></div>
        
        <input type="hidden" id="la" name="la">
        <input type="hidden" id="lo" name="lo">
      



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary" style="margin-top:5px;">Submit</button>
  </div>
</div>


</fieldset>

{!! Form::close() !!}

</div>

@stop
