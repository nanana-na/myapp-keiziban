@extends('layouts.app')

@section('content')

<div class="container col-md-8 bg-light;">
  <h3 class="h3-blue">おすすめの設定</h3>
  <p>(1)このサイトをSafariで開く</p>
  <img style="margin: 5px 0 25px 5px;" src="/images/iphone0.jpg" alt="" width="184px"><br>
  <p>(2)画面下部の「共有」アイコンから「ホーム画面に追加」を選択</p>
  <img style="margin: 5px 0 25px 5px;" src="/images/iphone1.jpg" alt="" height="400px"><br>
  <img style="margin: 5px 0 25px 5px;" src="/images/iphone2.jpg" alt="" height="400px"><br>
  <hr>
  <h4>完了！</h4>
  <div class="mb-4 text-center" style="margin-top:10px">
    <a href="/etc" class="btn btn--yellow">戻る</a>
  </div>
</div>
@endsection
