@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新規登録') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('yets.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class=" form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('学籍番号') }}</label>

                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number" autofocus>
                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード(確認)') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('学生証(jpeg,png)') }}</label>

                            <div class="col-md-6">
                                <input id="image" type="file" class="@error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <p style="font-size: 12px;margin:20px 0 0 0;">※学籍番号が確認できればいいです<br>※対面でも可</p>
                        <div style="text-align: center;">
                            <img style="margin: 5px 0 25px 5px;" src="/images/number3.jpg" alt="" width="200px"><br>
                        </div>
                        <div class="register">
                            <p><span><input type="checkbox" value="" required style="height: 18px;width:18px;"><a href="/rule">利用規約</a>に同意する</span>
                            </p>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('新規登録') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div style="text-align: right;">
                        <a href="{{ route('login') }}">{{ __('>>ログイン') }}</a>
                    </div>
                </div>
            </div>
            <div style="margin: 5px;">
                <p>※万が一に備えパスワードは使いまわしはせず登録後に個人情報が含まれる情報は送信しないでください。</p>
                <p>※対面で登録したい場合はTwitterかInstagramからご連絡ください。都合があえば対面でも登録できます。その際は学生証を持って来て下さい。<br>※画像は登録と同時に削除しています</p>
            </div>
        </div>
    </div>
</div>
@endsection
