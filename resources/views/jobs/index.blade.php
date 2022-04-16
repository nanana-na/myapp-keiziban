@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif

<div class="container">
  <h2><span class="badge badge-info text-white">バイト</span></h2>
  <div class=" row justify-content-center">
    <div class="card-deck">
      @foreach ($jobs as $job)
      <div class="col-md-6">
        <div class="m-1 card" style="max-width: 450px;min-width: 18rem">
          <img src="{{ asset('storage/images/job/'.$job->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="gaku d-block w-100" style="height:250px;object-fit: cover;user-select: none;" alt="">
          <div class="card-body">
            <h5 class="card-title zen">{{ $job->company }}</h5>
            <p class="card-text">
              時給：{{ $job->money }}<br>
              場所：{{$job->near}}周辺
            </p>
            <a href=" {{ route('jobs.show', $job->id) }}" class="btn btn-gradient2">見てみる</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <h4 class="job-ask">バイト先にご紹介お願いします！</h4>
  </div>
</div>

@endsection
