@extends('layouts.app')

@section('content')
<div class="container">
  サークル作成
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
          <label>学籍番号(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" name="number" value="{{ old('number') }}">
          </div>
        </div>
        <div class="form-group">
          <label>団体名(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="団体名を入力して下さい" name="group" value="{{ old('group') }}">
          </div>
        </div>
        <div class="form-group">
          <label>アイコン</label>
          <p>badminton succer basketball music run tennis skiing</p>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="アイコン" name="icon" value="{{ old('icon') }}">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">作成する</button>
      </form>
    </div>
  </div>
</div>
@endsection
