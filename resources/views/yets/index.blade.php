@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif
<div class="container">
  <h2><span class="badge badge-info text-white">未認証ユーザー</span></h2>
  <div class="justify-content-center">
    <div class="bg-white" style="max-width: 750px;">
      @foreach ($yets as $yet)
      <a class="club-link" href=" {{ route('yets.show', $yet->id) }}">
        <ul class="club-container">
          <li>
            <h4 style="font-size: 18px;">{{ $yet->number }}</h4>
          </li>
          <li class="mr-0">
            <i class="bi bi-chevron-right text-lowblack"></i>
          </li>
        </ul>
      </a>
      @endforeach
    </div>
  </div>
  <!-- <div class="row justify-content-center">
    <div class="card-deck">
      @foreach ($yets as $yet)
      <div class="col-md-6">
        <div class="card border-dark m-1" style="min-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $yet->group }}</h5>
            <p class="card-text">
              活動日：{{ $yet->date }}
            </p>
            <a href=" {{ route('yets.show', $yet->id) }}" class="btn btn-gradient">見てみる</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="col-md-4 mt-3">
      <a href="{{ route('yets.create') }}" class="btn btn btn-gradient">＋</a>
    </div>
  </div> -->
</div>
@endsection
