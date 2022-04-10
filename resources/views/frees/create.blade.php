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
      <form action="{{ route('frees.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label>タイトル(必須)</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title" value="{{ old('title') }}">
          </div>
        </div>
        <div class="form-group">
          <label>番号(必須)</label>
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
