@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif

<div class="container" style="max-width: 850px;">
  <h2><span class=" badge badge-info text-white">チャット</span></h2>
  <div class="justify-content-center">
    <div class="bg-white">
      @foreach ($frees as $free)
      <a class="club-link" href=" {{ route('frees.show', $free->id) }}">
        <ul class="club-container" style="position: relative;">
          <li class="m-auto">
            <h4 style="font-size: 20px;margin-right: 0;">{{ $free->title }}</h4>
          </li>
          <div class="free-count">
            <p>{{$free->comments->count()}}</p>
          </div>
          <li class="mr-0">
            <i class="bi bi-chevron-right text-lowblack"></i>
          </li>
        </ul>
      </a>
      @endforeach
    </div>
  </div>
</div>

@endsection
