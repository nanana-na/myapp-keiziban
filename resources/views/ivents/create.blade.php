@extends('layouts.app')

@section('content')
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
      <form action="{{ route('ivents.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label>タイトル(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title" value="{{ old('title') }}">
          </div>
        </div>
        <div class="form-group">
          <label>団体名(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="団体名を入力して下さい" name="group" value="{{ old('group') }}">
          </div>
        </div>
        <div class="form-group">
          <label>イベント日(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="イベント日を入力して下さい" name="day" value="{{ old('day') }}">
          </div>
        </div>
        <div class="form-group">
          <label>イベント詳細(200字以内)(必須)</label>
          <textarea class="form-control" placeholder="イベント詳細" rows="5" name="body">{{ old('body') }}</textarea>
        </div>
        <div class="form-group">
          <label>集合時間(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="集合時間を入力して下さい" name="time" value="{{ old('time') }}">
          </div>
        </div>
        <div class="form-group">
          <label>集合場所(必須)</label>
          <textarea class="form-control" placeholder="場所を入力してください" rows="2" name="place">{{ old('place') }}</textarea>
        </div>
        <div class="form-group">
          <label>参加費(任意)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="参加費を入力して下さい" name="monney" value="{{ old('monney') }}">
          </div>
        </div>
        <div class="form-group">
          <label>タイトル(必須)</label>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="番号" name="number" value="{{ old('number') }}">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">作成する</button>
      </form>
    </div>
  </div>
</div>
@endsection
