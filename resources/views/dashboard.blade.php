@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3>3</h3>
        <p>Department</p>
      </div>
      <div class="icon">
        {{-- <i class="fas fa-shopping-cart"></i> --}}
        <i class="fas ion-ios-paper"></i>
      </div>
      <a href="{{ route('department.index') }}" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>5</h3>
            {{-- <sup style="font-size: 20px">%</sup> --}}

        <p>Course</p>
      </div>
      <div class="icon">
        <i class="ion ion-university"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-4 col-6">
    <!-- small card -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>9</h3>

        <p>Session</p>
      </div>
      <div class="icon">
        <i class="fas ion-ios-folder"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
  {{-- <div class="col-lg-3 col-6">
    <!-- small card -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>65</h3>

        <p>Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="fas fa-chart-pie"></i>
      </div>
      <a href="#" class="small-box-footer">
        More info <i class="fas fa-arrow-circle-right"></i>
      </a>
    </div>
  </div>
  <!-- ./col -->
</div> --}}
</div>
@endsection
