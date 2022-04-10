@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="flash_message">
  {{ session('flash_message') }}
</div>
@endif

<div class="container" style="max-width: 850px;">
  <h2><span class=" badge badge-info text-white">チャット</span></h2>
  <div class="justify-content-center">
    <div class="bg-white">
      @foreach ($friends as $friend)
      <a class="club-link" href=" {{ route('friends.show', $friend->id) }}">
        <ul class="club-container">
          <li class="m-auto">
            <h4 style="font-size: 20px;margin-right: 0;">{{ $friend->title }}</h4>
          </li>
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
