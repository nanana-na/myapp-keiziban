@extends('layouts.app')
@section('content')
<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div style="position:relative; width: 100%;">
        <div style="width:100%; height: auto;">
          <img src="{{ asset('storage/images/yet/'.$yet->image_path) }}" style="width:100%; ; vertical-align: middle; object-fit: cover; border-radius: 5px;" ;>
        </div>
      </div>
      <div class="show">
        <table>
          <tr>
            <th>学籍番号</th>
            <td style="font-size: 19px;font-family:'Zen Antique Soft';">
              {{ $yet->number }}
            </td>
          </tr>
          <tr>
            <th>名前</th>
            <td>{{ $yet->name }}</td>
          </tr>
          <tr>
            <th>登録日</th>
            <td class="fw-light">{{ $yet->created_at->format("n月j日") }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="mb-4 text-center" style="margin-top:10px">
  <a href=" {{ route('yets.index') }}" class="btn btn-gradient">戻る</a>
</div>
<div class="mb-4 text-center" style="margin-top:10px">
  <a href="{{route('yets.edit', $yet->id)}}" class="btn btn-primary">
    許可
  </a>
  <form style="display: inline-block;" method="POST" action="{{ route('yets.destroy', $yet->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除する</button>
  </form>
</div>
@endsection
