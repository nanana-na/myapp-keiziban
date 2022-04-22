@extends('layouts.app')

@section('content')
<div class="container">
  アンケート作成
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p style="margin: 3px;">{{ $error }}</p>
        @endforeach
      </div>
      @endif
      <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label>タイトル(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
          </div>
        </div>
        <div class="form-group">
          <label>締切(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="締切" name="limit" value="{{ old('limit') }}">
          </div>
        </div>

        <button type="submit" class="btn btn-primary">作成する</button>
      </form>
    </div>
  </div>
</div>
@endsection
