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
      <form action="{{ route('frees.update', $free->id) }}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
          <label>タイトル</label>
          <div class="form-group">
            <input type="text" class="form-control" value="{{ $free->title }}" name="title">
          </div>
        </div>
        <div class="form-group">
          <label>番号</label>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="番号" name="number" value="{{ $free->number }}">
          </div>
        </div>
        <button type=" submit" class="btn btn-primary">更新する</button>
      </form>
    </div>
  </div>
</div>
@endsection
