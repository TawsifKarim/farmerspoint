@extends('layout.layout')
@section('content')

<legend>Land Property</legend>



{!! Form::open(['route' => ['farmercrop.update', $crop->id], 'class'=>'form-horizontal','method'=>'PUT']) !!}

<div class="form-group">
  <label class="col-md-4 control-label" for="v">crop</label>
  <div class="col-md-4">
  {!! Form::select('crop_id', $cropList, null, ['class' => 'form-control']) !!}

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="land_location">cultivated Land Location</label>
  <div class="col-md-4">
      {!! Form::select('land_location', $upazilaList, null, ['class' => 'form-control']) !!}
</div>
</div>
`
<div class="form-group">
  <label class="col-md-4 control-label" for="Area_of_cultivation">Area of Cultivation(in acre)</label>
  <div class="col-md-4">
  <input id="Area_of_cultivation" name="area_of_cultivation" type="number" value="{{ $crop->area_of_cultivation }}" class="form-control input-md" required="">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Expected_production">Expected Production (in kg)</label>
  <div class="col-md-4">
  <input id="Expected_production" name="expected_amount" type="number" value="{{ $crop->expected_amount }}" class="form-control input-md" required="">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Harvest_start">harvest start date</label>
  <div class="col-md-4">
  <input id="Harvest_start" name="harvest_start_date" type="date" value="{{ $crop->harvest_start_date->format('Y-m-d') }}" class="form-control input-md" required="">

  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Harvest_end">harvest end date</label>
  <div class="col-md-4">
  <input id="Harvest_end" name="harvest_end_date" type="date" value="{{ $crop->harvest_end_date->format('Y-m-d') }}" class="form-control input-md" required="">

  </div>
</div>




<!-- Status type boolean -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">status</label>


  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="status" >{{ $crop->status }}</textarea>
  </div>
</div>

<!-- Status type boolean -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Remarks</label>


  <div class="col-md-4">
    <textarea class="form-control" id="textarea" name="remarks">{{ $crop->remarks  }}</textarea>
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
