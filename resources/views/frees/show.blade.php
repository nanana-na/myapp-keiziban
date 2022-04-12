@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8 mb-3" style="max-width: 700px;">
      <div class="pb-2 bg-white">
        <h1 class="text-center zen p-2"><span>{{ $free->title }}</span></h1>
      </div>
    </div>
  </div>
  @if ($user_id == $free->user_id)
  <div class="mb-4 text-center" style="margin-top:10px">
    <a class="btn btn-primary" href="{{ route('frees.edit', $free->id) }}">
      編集する
    </a>
    <form style="display: inline-block;" method="POST" action="{{ route('frees.destroy', $free->id) }}">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}
      <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除する</button>
    </form>
  </div>
</div>
@endif
@if ($errors->any())
<div class="alert alert-danger mt-4">
  @foreach ($errors->all() as $error)
  <p style="margin: 3px;">{{ $error }}</p>
  @endforeach
</div>
@endif
@if (null!==$user_id)
<div class="comment-box w-100">
  <form action="{{ route('comments.store') }}" method="POST">
    @csrf
    <ul class="comment-ul">
      <li>
        <input type="hidden" name="free_id" value="{{ $free->id }}">
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
@else
<div class="mb-4 text-center" style="margin-top:30px;">
  <a href="{{ route('register') }}" class="mt-4 btn btn-primary">ログインしてコメントを書く</a>
</div>
@endif
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8" style="max-width: 700px;">
      <div class="comment">
        @foreach ($free->comments as $comment)
        <article>
          <div class="info">
            <ul>
              <li class="mr-auto">
                <h6>{{ $comment->user->name }}</h6>
              </li>
              <li><time class="mr-0">
                  <p>{{ $comment->created_at->format("n月j日 G:i") }}</p>
                </time>
              </li>
            </ul>
          </div>
          <p>{{ $comment->body }}</p>
        </article>
        @endforeach

        <div class="mb-4 text-center" style="margin-top:10px">
          <a href=" {{ route('frees.index') }}" class="btn btn-gradient">戻る</a>
        </div>
      </div>
    </div>
  </div>

  @endsection
