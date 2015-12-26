@extends('layout.layout')
@section('content')

<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script type="text/javascript">

                var latitude =[];
                var longitude = [];

</script>

<div class="TopSpacePointList"></div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
          
              <div id="googleMap" style="width:260px;height:272px;"></div>
              <script>
  function initialize() {
    var latitude = <?php echo(json_encode($farmerPoint->la)); ?>;
    var longitude = <?php echo(json_encode($farmerPoint->lo)); ?>;
    var zoom = 11;
    
    var LatLng = new google.maps.LatLng(latitude, longitude);

  var mapProp = {
    center: LatLng,
    zoom: 16,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
  var marker = new google.maps.Marker({
      position: LatLng,
      map: map,
      title: 'Farmer Point',
      draggable: false
    });
//   google.maps.event.addListener(marker, 'dragend', function(event) {
    
//       document.getElementById('la').value = event.latLng.lat();
//       document.getElementById('lo').value = event.latLng.lng();
 
// });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
            
            <!-- <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="250" height="272" src="https://maps.google.com/maps?hl=en&q=Pariser Platz, 10117 Berlin&ie=UTF8&t=roadmap&z=6&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">buyproxies.io</a></small></div></iframe> -->
            <div class="EditButtonTop"></div>

            <!--edit will be only visible to admins-->
            @if(!Auth::guest())
        <a href="{{ route('farmerPoint.edit',$farmerPoint->id) }}"><button class="btn btn-info btn-primary btn-block"><span class="glyphicon glyphicon-pencil"></span>Edit Farmer Point</button></a>
            @endif

        </div>
        <div class="col-md-8">
        	<legend>Point Information</legend>
        	<div class="span5">
            <table class="table table-striped table-condensed table-bordered">
                 <tbody>
                  	<tr><td><strong>Point Name</strong></td><td>{{ $farmerPoint->name }}</td></tr>
                    <tr><td><strong>Contact</strong></td><td>{{ $farmerPoint->phone }}</td></tr>
                    <tr><td><strong>address</strong></td><td>{{ $farmerPoint->address }}</td></tr>
                    <tr><td><strong>upazila</strong></td><td>{{ $farmerPoint->upazila->name }}</td></tr>
                    <tr><td><strong>district</strong></td><td>{{ $farmerPoint->district->name }}</td></tr>
                    <tr><td><strong>division</strong></td><td>{{ $farmerPoint->division->name }}</td></tr>
              </tbody>
          </table>
      </div>
  </div>
    </div>
</div>

<!--this block will only be visible to all-->

  <div class="container">

  <div class="row">
    <div class="span5">
      <div class="col-md-11">
        <legend>Agents of the Farmer Point</legend>

            <table class="table table-striped table-condensed table-bordered">
                  <thead>
                  <tr>
                      <th>Agent Names</th>
                      <th>Contact</th>



                   </tr>
              </thead>
              <tbody>
                @foreach($farmerPoint->user as $agent)
                @if($agent->user_type_id===2)
                <tr>
                      <td>{{ $agent->name }}</td>
                      <td>{{ $agent->phone }}</td>

                </tr>
                @endif
                @endforeach
                 </tbody>
            </table>
            </div>
        </div>
  </div>
</div>

  <div class="container">

  <div class="row">
    <div class="span5">
      <div class="col-md-11">
        <legend>Available Products in this Point</legend>

            <table class="table table-striped table-condensed table-bordered">
                  <thead>
                  <tr>
                      <th>Product Name</th>
                      <th>Product Type</th>
                      <th>Seller/Farmer Name</th>
                      <th>Price/kg</th>
                      <th>Quantity/Piece</th>
                      <th>Delivery Date</th>
                      <th>Contact No.</th>
                  </tr>
              
              </thead>
              <tbody>
                @foreach($farmerPoint->user as $farmer)
                @if($farmer->user_type_id===3)
                @foreach($farmer->farmerCrop as $crop)
                <tr>
                      <td>{{ $crop->crop->name }}</td>
                      <td>{{ $crop->crop->cropType->name }} </td>
                      <td>{{ $farmer->name }}</td>
                      <td>{{ $crop->price }}</td>
                      <td>{{ $crop->expected_amount }}</td>
                      <td>{{ $crop->harvest_end_date->toDateString() }}</td>
                      <td>{{ $farmer->phone }}</td>
                </tr>
                @endforeach
                @endif
                @endforeach
                 </tbody>
            </table>
            </div>
        </div>
  </div>
</div>


@stop
