@extends('layouts.app')
@section('content')
@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mb-3" style="max-width: 700px;">
      <div class="pb-2 bg-white">
        <div class="friend-show">
          @if ($user_id == $friend->user_id)
          <div style="position: relative;">
            <form style="display: inline-block;" method="POST" action="{{ route('friends.destroy', $friend->id) }}">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-clean" style="position: absolute; top:0; right:30px; color:#a3a3a3;" onclick='return confirm("本当に削除しますか？");'><i class="bi bi-trash" style="color:red"></i></button>
            </form>
          </div>
          @endif
          <p class="enjoy-title text-center" show><span><i class="bi bi-pen"></i>…{{ $friend->body }}</span></p>
          <p style="font-size: 8px;color: #999;text-align: center;margin-bottom: 0.5rem;">メンバー</p>
          <div class="member">
            <div class="user">
              <img src="{{ asset('storage/images/user/'.$friend->user->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="friendimage d-block" style="object-fit: cover;user-select: none;" alt="">
              <p>{{$friend->user->name}}</p>
            </div>
            @foreach($asks as $ask)
            <div class="user">
              <img src="{{ asset('storage/images/user/'.$ask->ask->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="friendimage d-block" style="object-fit: cover;user-select: none;" alt="">
              <p>{{$ask->ask->name}}</p>
            </div>
            @endforeach
          </div>
        </div>
        @if ($user_id == $friend->user_id)
        @if (count($asks) > 0)
        @if($friend->state == 0)
        <form style="text-align: center;" action="{{ route('friends.update', $friend->id) }}" enctype="multipart/form-data" method="POST">
          {{csrf_field()}}
          {{method_field('PATCH')}}
          <input type="hidden" name="id" value="{{$friend->id}}">
          <button class="btn btn-hai" style="font-size:8px; color:#707070; margin-top:5px;" onclick='return confirm("本当に締め切りますか？");'>締め切る</button>
        </form>
        @else
        <p style="font-size: 8px;text-align:center;margin:5px 0 0 0;">締切中</p>
        @endif
        @endif
        @endif
      </div>
    </div>
  </div>
  @if ($errors->any())
  <div class="alert alert-danger mt-4">
    @foreach ($errors->all() as $error)
    <p style="margin: 3px;">{{ $error }}</p>
    @endforeach
  </div>
  @endif
</div>
@if (null!==$user_id)
<div style="min-height: 56px;">
  <div class="comment" style="min-height: 100px;">
    <div class="comment-box w-100">
      <form action="{{ route('friendmessages.store') }}" method="POST">
        @csrf
        <ul class="comment-ul">
          <li>
            <input type="hidden" name="friend_id" value="{{ $friend->id }}">
            <div class="form-group">
              <textarea class="form-control" placeholder="内容" cols="40" rows="1" name="body"></textarea>
            </div>
          </li>
          <li>
            <button type="submit" class="btn btn-primary send-btn"><i class="bi bi-send"></i></button>
          </li>
        </ul>
      </form>
    </div>
  </div>
</div>
@else
<div class="mb-4 text-center" style="margin-top:30px;">
  <a href="{{ route('register') }}" class="mt-4 btn btn-primary">ログインしてコメントを書く</a>
</div>
@endif
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8" style="max-width: 700px;">
      <div class="comment" style="min-height: 100px;">
        @foreach ($friend->friendmessages as $friendmessage)
        @if($friendmessage->user_id == $user_id)
        <article style="background-color: #dceeff;">
          <div class="info">
            <ul>
              <li class="mr-auto">
                <h6>{{ $friendmessage->user->name }}</h6>
              </li>
              <li><time class="mr-0">
                  <p>{{ $friendmessage->created_at->format("n月j日 G:i") }}</p>
                </time>
              </li>
            </ul>
          </div>
          <p style="text-align: right; margin-right:15px; white-space: pre-wrap">{{ $friendmessage->body }}</p>
        </article>
        @else
        <article>
          <div class="info">
            <ul>
              <li class="mr-auto">
                <h6>{{ $friendmessage->user->name }}</h6>
              </li>
              <li><time class="mr-0">
                  <p>{{ $friendmessage->created_at->format("n月j日 G:i") }}</p>
                </time>
              </li>
            </ul>
          </div>
          <p style="margin-left: 15px; white-space: pre-wrap">{{ $friendmessage->body }}</p>
        </article>
        @endif
        @endforeach
      </div>
      <div class="mb-4 text-center" style="margin-top:30px">
        <a href=" {{ route('friends.index') }}" class="btn btn-gradient">戻る</a>
      </div>
    </div>
  </div>

  @endsection
