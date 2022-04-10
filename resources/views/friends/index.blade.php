@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif
<div class="container" style="max-width: 480px; position:relative;">
  <div>
    <h2><span class=" badge badge-info text-white mr-auto">交流</span></h2>
  </div>
  <div class="justify-content-center">
    @include('parts.friendheader')

    <h2 class="zen text-center">{{$friends->day->format('n月j日')}}</h2>
    <p class="text-center">{{$friends->day_name}}</p>
    @foreach ($friends as $friend)
    <article>
      <div class="friend">
        <div class="friend-user">
          <div class="friend-image">
            <img src="{{ asset('storage/images/user/'.$friend->user->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="friendimage d-block" style="object-fit: cover;user-select: none;" alt="">
          </div>
          <div class="friend-name">
            <p>{{ $friend->user->name }}</p>
          </div>
        </div>
        <div class="friend-box">
          <div class="friend-info">
            <div class="friend-time">
              <p>予定時間{{ substr($friend->enjoy_time, 0, 5) }}</p>
            </div>
          </div>
          <div class="friend-title">
            <p>{{ $friend->body }}</p>
          </div>
          <div class="friend-ask">
            @if($friend->asks->where('ask_id',$user_id)->where('evaluation',2)->first()!== null)
            <div>
              <a class="btn btn-blue" style="padding: 3px 18px;" href="{{ route('friends.show', $friend->id) }}">Chat</a>
            </div>
            @elseif($friend->user_id == $user_id)
            <div>
              <a class="btn btn-gradient3" style="padding: 3px 18px;" href="{{ route('friends.show', $friend->id) }}">My plan</a>
            </div>
            @elseif($friend->asks->where('ask_id',$user_id)->where('evaluation',1)->first()!== null)
            <p class="btn btn-light">申請中</p>
            @elseif($friend->asks->where('ask_id',$user_id)->where('evaluation',3)->first()!== null)
            <p class="btn btn-light">また今度</p>
            @else
            <form action="{{ route('asks.store') }}" method="POST">
              @csrf
              <input type="hidden" name="friend_id" value="{{ $friend->id }}">
              <input type="hidden" name="user_id" value="{{ $friend->user->id }}">
              <button type="submit" class="btn btn-light-blue">
                <p>行きたい<i class="bi bi-send"></i>
              </button>
            </form>
            @endif
          </div>
        </div>
    </article>
    @endforeach
    <p class="mt-3"><a href="{{ route('friends.create') }}" class="btn btn-hai ml-auto text-right" style="    position: absolute;
        right: 20px;">＋新しく作る</a></p>
  </div>
</div>
@endsection
