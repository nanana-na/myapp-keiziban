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
      <form action="{{ route('questions.update', $question->id) }}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}}

        <div class="form-group">
          <label>質問</label>
          <input type="text" class="form-control" value="{{ $question->title }}" name="title">
        </div>
        <div class="form-group">
          <label>リミット</label>
          <input type="text" class="form-control" value="{{ $question->limit }}" name="limit">
        </div>

        <button type="submit" class="btn btn-primary">更新する</button>
      </form>
    </div>
  </div>
</div>
@endsection
