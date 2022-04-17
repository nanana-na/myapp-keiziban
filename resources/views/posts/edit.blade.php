@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
          <label for="image">画像(1.6MB以下)</label>
          <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
          <label>団体名</label>
          <input type="text" class="form-control" value="{{ $post->group }}" name="group">
        </div>
        <div class="form-group">
          <label>場所</label>
          <input type="text" class="form-control" value="{{ $post->place }}" name="place">
        </div>
        <div class="form-group">
          <label>曜日</label>
          <input type="text" class="form-control" value="{{ $post->date }}" name="date">
        </div>
        <div class="form-group">
          <label>時間</label>
          <textarea class="form-control" rows="3" name="time">{{ $post->time }}</textarea>
        </div>
        <div class="form-group">
          <label>内容(200字以下)</label>
          <textarea class="form-control" rows="5" name="body">{{ $post->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">更新する</button>
      </form>
    </div>
  </div>
</div>
@endsection
