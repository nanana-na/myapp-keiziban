@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div style="position:relative; width: 100%;">
    </div>
  </div>
  <div class="show">
    <table>
      <tr>
        <th>学籍番号</th>
        <td style="font-size: 19px;font-family:'Zen Antique Soft';">
          {{ $user->number }}
        </td>
      </tr>
      <tr>
        <th>名前</th>
        <td>{{ $user->name }}</td>
      </tr>
      <tr>
        <th>登録日</th>
        <td class="fw-light">{{ $user->created_at->format("n月j日") }}</td>
      </tr>
    </table>
  </div>
</div>
<div class="mb-4 text-center" style="margin-top:10px">
  <a href=" {{ route('admins.index') }}" class="btn btn-gradient">戻る</a>
</div>
<div class="mb-4 text-center" style="margin-top:10px">
  <a href="{{route('admins.edit', $user->id)}}" class="btn btn-primary">
    編集する
  </a>
  <form style="display: inline-block;" method="POST" action="{{ route('admins.destroy', $user->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除する</button>
  </form>
</div>
@endsection
