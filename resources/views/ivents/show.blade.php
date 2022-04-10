@extends('layouts.app')
@section('content')

<div class="container">

  <div class="row justify-content-center mt-5">
    <div class="col-md-8">
      <div class="show">
        <table>
          <tr>
            <th>タイトル</th>
            <td>
              {{ $ivent->title }}
            </td>
          </tr>
          <tr>
            <th>団体名</th>
            <td>{{ $ivent->group }}</td>
          </tr>
          <tr>
          <tr>
            <th>イベント日</th>
            <td>{{ $ivent->day }}</td>
          </tr>
          <tr>
            <th>詳細</th>
            <td style="white-space: pre-wrap;">{{ $ivent->body }}</td>
          </tr>
          <tr>
            <th>参加費</th>
            <td style="white-space: pre-wrap;">{{ $ivent->monney }}</td>
          </tr>
          <tr>
            <th>集合時間</th>
            <td style="white-space: pre-wrap;">{{ $ivent->time }}</td>
          </tr>
          <tr>
            <th>場所</th>
            <td style="white-space: pre-wrap;">{{ $ivent->place }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
<div class="mb-4 text-center" style="margin-top:10px">
  <a href=" {{ route('ivents.index') }}" class="btn btn-gradient">戻る</a>
</div>
@if ($user_id == $ivent->user_id)
<div class="mb-4 text-center" style="margin-top:10px">
  <a href="{{route('ivents.edit', $ivent->id)}}" class="btn btn-primary">
    編集する
  </a>
  <form style="display: inline-block;" method="POST" action="{{ route('ivents.destroy', $ivent->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除する</button>
  </form>
</div>
@endif
@endsection
