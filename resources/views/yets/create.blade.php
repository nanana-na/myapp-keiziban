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
      <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="image">画像(1.6MB以下)(jpeg,png,jpgのみ,スマホ可)</label>
          <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
          <label>団体名(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="団体名を入力して下さい" name="group" value="{{ old('group') }}">
          </div>
        </div>
        <div class="form-group">
          <label>活動場所(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="場所を入力して下さい" name="place" value="{{ old('place') }}">
          </div>
        </div>
        <div class="form-group">
          <label>活動する曜日(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="曜日を入力して下さい" name="date" value="{{ old('date') }}">
          </div>
        </div>
        <div class="form-group">
          <label>アイコン</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="アイコン" name="icon" value="{{ old('icon') }}">
          </div>
        </div>
        <div class="form-group">
          <label>時間</label>
          <textarea class="form-control" placeholder="時間を入力してください" rows="2" name="time">{{ old('time') }}</textarea>
        </div>
        <div class="form-group">
          <label>活動内容(200字以内)(必須)</label>
          <textarea class="form-control" placeholder="活動内容" rows="5" name="body">{{ old('body') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">作成する</button>
      </form>
    </div>
  </div>
</div>
@endsection
