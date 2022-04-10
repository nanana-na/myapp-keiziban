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
      <form action="{{ route('ivents.update', $ivent->id) }}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
          <label>タイトル</label>
          <input type="text" class="form-control" value="{{ $ivent->title }}" name="title">
        </div>
        <div class="form-group">
          <label>団体名</label>
          <input type="text" class="form-control" value="{{ $ivent->group }}" name="group">
        </div>
        <div class="form-group">
          <label>イベント日</label>
          <input type="text" class="form-control" value="{{ $ivent->day }}" name="day">
        </div>
        <div class="form-group">
          <label>内容</label>
          <textarea class="form-control" rows="5" name="body">{{ $ivent->body }}</textarea>
        </div>
        <div class="form-group">
          <label>集合時間</label>
          <textarea class="form-control" rows="3" name="time">{{ $ivent->time }}</textarea>
        </div>
        <div class="form-group">
          <label>集合場所</label>
          <input type="text" class="form-control" value="{{ $ivent->place }}" name="place">
        </div>
        <div class="form-group">
          <label>参加費</label>
          <input type="text" class="form-control" value="{{ $ivent->monney }}" name="monney">
        </div>
        <div class="form-group">
          <label>タイトル(必須)</label>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="番号" name="number" value="{{ $ivent->number }}">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">更新する</button>
      </form>
    </div>
  </div>
</div>
@endsection
