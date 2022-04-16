@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
      </div>
      @endif
      <div>
        <p>1日2回まで変更できます</p>
        <form action="/updateimage" enctype="multipart/form-data" method="POST">
          {{csrf_field()}}
          {{method_field('POST')}}
          <input type="hidden" name="id" value="{{ $user->id }}">
          <div class="form-group">
            <label for="image">画像</label>
            <p style="font-size: 8px;margin:5px 0 0 0">現在のアイコン</p>
            <img src="{{ asset('storage/images/user/'.$user->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="friendimage d-block" style="object-fit: cover;user-select: none; height:50px;width:50px; margin-bottom:30px;border-radius: 8px;" alt="">
            <input type="file" class="form-control-file" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">画像を更新</button>
        </form>
        <div style="margin-top: 50px;"></div>

        <form action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data" method="POST">
          {{csrf_field()}}
          {{method_field('PATCH')}}
          <div class="form-group">
            <label>名前</label>
            <input type="text" class="form-control" value="{{ $user->name }}" name="name">
          </div>
          <button type="submit" class="btn btn-primary">名前を更新</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
