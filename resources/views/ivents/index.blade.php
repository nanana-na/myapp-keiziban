@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif

<div class="container">
  <h2><span class="badge badge-info text-white">イベント</span></h2>
  <div class="row justify-content-center">
    <div class="card-deck">
      @foreach ($ivents as $ivent)
      <div class="col-md-6">
        <div class="card border-info m-1" style="min-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $ivent->title }}</h5>
            <p class="card-text">
              団体：{{ $ivent->group }}
            </p>
            <a href=" {{ route('ivents.show', $ivent->id) }}" class="btn btn-gradient">見てみる</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="col-md-4 mt-3">
      <a href="{{ route('ivents.create') }}" class="btn btn btn-gradient">＋</a>
    </div>
  </div>
</div>
@endsection
