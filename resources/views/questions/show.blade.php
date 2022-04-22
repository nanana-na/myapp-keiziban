@extends('layouts.app')
@section('content')
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-8" style="max-width:600px">
      <div style="position:relative; width: 100%;">
        <div style="width:100%; height: auto;">
          <img src="{{ asset('storage/images/circle/'.$post->image_path) }}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" style="width:100%; ; vertical-align: middle;  border-radius: 5px; user-select: none;">
        </div>
      </div>
      <div class="show">
        <table>
          <tr>
            <th>団体名</th>
            <td style="font-size: 1.2em;;font-family:'Zen Antique Soft';">
              {{ $post->group }}
            </td>
          </tr>
          <tr>
            <th>場所</th>
            <td>{{ $post->place }}</td>
          </tr>
          <tr>
          <tr>
            <th>曜日</th>
            <td>{{ $post->date }}</td>
          </tr>
          <tr>
            <th>時間</th>
            <td style="white-space: pre-wrap;">{{ $post->time }}</td>
          </tr>
          <tr>
            <th>活動内容</th>
            <td style="white-space: pre-wrap;">{{ $post->body }}</td>
          </tr>
          <tr>
            <th>投稿日時</th>
            <td class="fw-light">{{ $post->created_at->format("n月j日") }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="mb-4 text-center" style="margin-top:10px">
  <a href=" {{ route('posts.index') }}" class="btn btn-gradient">戻る</a>
</div>
@if ($user_id == $post->user_id)
<div class="mb-4 text-center" style="margin-top:10px">
  <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary">
    編集する
  </a>
  <form style="display: inline-block;" method="POST" action="{{ route('posts.destroy', $post->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除する</button>
  </form>
</div>
@endif
@endsection
