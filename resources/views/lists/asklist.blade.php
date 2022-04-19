@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif

<div class="container" style="max-width: 480px;">
  <h2><span class=" badge badge-info text-white">交流</span></h2>
  <div class="justify-content-center">
    @include('parts.friendheader')

    @foreach ($asks as $ask)
    <article>
      <div class="friend">
        <div class="friend-user">
          <div class="friend-image">
            <img src="{{ asset('storage/images/user/'.$ask->user->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="friendimage d-block" style="object-fit: cover;user-select: none;" alt="">
          </div>
          <div class="friend-name">
            <p>{{ $ask->user->name }}</p>
          </div>
        </div>
        <div class="friend-box">
          <div class="friend-info">
            <div class="friend-time">
              <p>{{ $ask->friend->enjoy_day->format('n/j') }} 予定時間{{ substr($ask->friend->enjoy_time, 0, 5) }}</p>
            </div>
          </div>
          <div class="friend-title">
            <p>{{ $ask->friend->body }}</p>
          </div>
          <div class="friend-ask">
            @if($ask->evaluation==2)
            <div>
              <a class="btn btn-blue" style="padding: 3px 18px;" href="{{ route('friends.show', $ask->friend->id) }}">Chat</a>
            </div>
            @else
            <p class="btn btn-light">また今度</p>
            @endif
          </div>
        </div>
    </article>
    @endforeach
  </div>
</div>
@endsection
