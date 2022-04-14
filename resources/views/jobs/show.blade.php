@extends('layouts.app')
@section('content')

<div class="container">

  <div class="row justify-content-center">
    <div class="col-md-8" style="max-width:600px">
      <div style="position:relative; width: 100%; margin-top: 4px;">
        <div style="width:100%; height: auto;">
          <img src="{{ asset('storage/images/job/'.$job->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" style="width:100%; vertical-align: middle; user-select: none; border-radius: 5px;">
        </div>
      </div>
      <div class="show job">
        <table>
          <tr>
            <th>店舗名</th>
            <td class="zen" style="font-size: 1.2em;">{{ $job->company }}</td>
          </tr>
          <tr>
            <th>時給</th>
            <td style=" white-space: pre-wrap;">{{ $job->money }}</td>
          </tr>
          <tr>
            <th>仕事内容</th>
            <td style="white-space: pre-wrap;">{{ $job->work_content }}</td>
          </tr>
          <tr>
            <th>特徴</th>
            <td style="white-space: pre-wrap;">{{ $job->feature }}</td>
          </tr>
          <tr>
            <th>電話番号</th>
            <td>{{ $job->call }}</td>
          </tr>
          <tr>
            <th>応募方法</th>
            <td style="white-space: pre-wrap;">{{ $job->apply }}</td>
          </tr>
          <tr>
            <th>募集期間</th>
            <td>{{ $job->period }}</td>
          </tr>
        </table>
      </div>
      <div class="waku" style="width: 100%;">
        <div class="map-container">
          {!! $job->place_path !!}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="mb-4 mt-3 text-center" style="margin-top:10px">
  <a href=" {{ route('jobs.index') }}" class="btn btn-gradient">戻る</a>
</div>
@if ($user_id == $job->user_id)
<div class="mb-4 text-center" style="margin-top:10px">
  <a class="btn btn-primary" href="{{ route('jobs.edit', $job->id) }}">
    編集する
  </a>
  <form style="display: inline-block;" method="POST" action="{{ route('jobs.destroy', $job->id) }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="btn btn-danger" onclick='return confirm("削除しますか？");'>削除する</button>
  </form>
</div>
@endif
@endsection
