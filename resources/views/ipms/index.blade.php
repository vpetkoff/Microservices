@extends('layouts.bootstrap')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>IP Microservice Documentation</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h4>A microservice that shows client's IP address.</h4>
    </div>
  </div>

  <div class="row" style="margin-top:50px">
    <div class="col-md-12">
      <p>API Endpoint: <a href={{ url('/api/ipms/v1') }}>{{ url('/api/ipms/v1') }}</a></p>
    </div>
  </div>

@endsection
