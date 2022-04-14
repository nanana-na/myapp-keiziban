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
      <form action=" {{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label>学籍番号(必須)1000,24000000</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="学籍番号" name="number" value="{{ old('number') }}">
          </div>
        </div>
        <form action="/make" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <label>ユーザー名(必須)</label>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="ユーザー名" name="name" value="{{ old('name') }}">
            </div>
          </div>
          <div class="form-group">
            <label>{{ __('パスワード') }}</label>
            <div class="form-group">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>

          <div class="form-group">
            <label>{{ __('パスワード(確認)') }}</label>

            <div class="form-group">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary">作成する</button>
        </form>
    </div>
  </div>
</div>
@endsection
