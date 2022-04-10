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
      <form action="{{ route('jobs.update', $job->id) }}" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="form-group">
          <label for="image">画像</label>
          <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
          <label>会社名</label>
          <div class="form-group">
            <input type="text" class="form-control" value="{{ $job->company }}" name="company">
          </div>
        </div>
        <div class="form-group">
          <label>時給</label>
          <textarea class="form-control" rows="2" name="money">{{ $job->money }}</textarea>
        </div>
        <div class="form-group">
          <label>場所</label>
          <textarea class="form-control" rows="3" name="place">{{ $job->place }}</textarea>
        </div>
        <div class="form-group">
          <label>近くの建物</label>
          <div class="form-group">
            <input type="text" class="form-control" value="{{ $job->near }}" name="near">
          </div>
        </div>
        <div class="form-group">
          <label>仕事内容</label>
          <textarea class="form-control" rows="5" name="work_content">{{ $job->work_content }}</textarea>
        </div>
        <div class="form-group">
          <label>特徴</label>
          <textarea class="form-control" rows="5" name="feature">{{ $job->feature }}</textarea>
        </div>
        <div class="form-group">
          <label>電話番号</label>
          <div class="form-group">
            <input type="text" class="form-control" value="{{ $job->call }}" name="call">
          </div>
        </div>
        <div class="form-group">
          <label>応募方法</label>
          <textarea class="form-control" rows="2" name="apply">{{ $job->apply }}</textarea>
        </div>
        <div class="form-group">
          <label for="image">募集期間</label>
          <input type="text" class="form-control-file" name="period" value="{{ $job->period }}">
        </div>
        <button type=" submit" class="btn btn-primary">更新する</button>
      </form>
    </div>
  </div>
</div>
@endsection
