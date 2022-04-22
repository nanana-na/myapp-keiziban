@extends('layouts.app')

@section('content')
@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p style="margin: 3px;">{{ $error }}</p>
        @endforeach
      </div>
      @endif
      <form action="{{ route('friends.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label>遊ぶ日程(必須)</label>
          <div>
            <label><input type="radio" id="huey" name="day" value="1" checked>
              今日</label>
          </div>

          <div>
            <label><input type="radio" id="dewey" name="day" value="2">
              明日</label>
          </div>
          <div>
            <label><input type="radio" id="dewey" name="day" value="3">
              明後日</label>
          </div>
        </div>
        <div class="form-group">
          <input type="time" id="time" name="time" min="05:00" max="24:00" value="{{ old('time')}}" required>
        </div>

        <div class="form-group">
          <label>タイトル(必須)</label>
          <textarea class="form-control" placeholder="30文字以内" rows="2" name="body">{{ old('body') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">作成する</button>
      </form>
    </div>
  </div>
</div>
@endsection
