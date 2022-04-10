@extends('layouts.app')

@section('content')
<div class="container">
  バイト作成
  <div class="row justify-content-center">
    <div class="col-md-8">
      @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <p style="margin: 3px;">{{ $error }}</p>
        @endforeach
      </div>
      @endif
      <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="image">画像</label>
          <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
          <label>会社名</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="会社を入力して下さい" name="company" value="{{ old('company') }}">
          </div>
        </div>

        <div class="form-group">
          <label>時給 例時給850円～　＊22時以降は時給1063円～(研修100時間/時給810円)</label>
          <textarea class="form-control" placeholder="時給850円～　＊22時以降は時給1063円～\n(研修100時間/時給810円)
          " rows="4" name="money">{{ old('money') }}</textarea>
        </div>
        <div class="form-group">
          <label>場所</label>
          <textarea class="form-control" placeholder="場所" rows="3" name="place">{{ old('place') }}</textarea>
        </div>
        <div class="form-group">
          <label>近くの建物</label>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="近くの建物を入力して下さい" name="near" value="{{ old('near') }}">
          </div>
        </div>
        <div class="form-group">
          <label>場所google(450*200)</label>
          <textarea class="form-control" placeholder="場所" rows="3" name="place_path">{{ old('place_path') }}</textarea>
        </div>
        <div class="form-group">
          <label>仕事内容</label>
          <textarea class="form-control" placeholder="仕事内容" rows="5" name="work_content">{{ old('work_content') }}</textarea>
        </div>
        <div class="form-group">
          <label>特徴</label>
          <textarea class="form-control" placeholder="特徴" rows="5" name="feature">{{ old('feature') }}</textarea>

          <input type="checkbox" id="scales" name="feature" value="1"> <label></label>
          <input type="checkbox" id="scales" name="feature" value="2"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="3"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="4"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="5"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="6"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="7"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="8"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="9"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="10"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="11"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="12"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="13"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="14"> <label>Scales</label>
          <input type="checkbox" id="scales" name="feature" value="15"> <label>Scales</label>


          <div class="form-group">
            <label>電話番号</label>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="電話番号" name="call" value="{{ old('call') }}">
            </div>
          </div>
          <div class="form-group">
            <label>応募方法</label>
            <textarea class="form-control" placeholder="応募方法" rows="2" name="apply">{{ old('apply') }}</textarea>
          </div>
          <div class="form-group">
            <label>応募期間</label>
            <div class="form-group">
              <input type="text" class="form-control" name="period" value="{{ old('period') }}">
            </div>
          </div>
          <button type="submit" class="btn btn-primary">作成する</button>
      </form>
    </div>
  </div>
</div>
@endsection
