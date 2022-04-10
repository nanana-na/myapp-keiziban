@extends('layouts.app')
@section('content')
<div class=" col-md-8">
  @if ($errors->any())
  <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
  </div>
  @endif
</div>

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif
<div class="container" style="max-width: 480px;">
  <h2><span class="badge badge-info text-white">申請一覧</span></h2>
  <div class="justify-content-center">
    @include('parts.friendheader')
    <div class="bg-white">
      @foreach ($asks as $ask)
      <article>
        <div class="friend">
          <div class="friend-user">
            <div class="friend-image">
              <img src="{{ asset('storage/images/user/'.$ask->ask->image_path)}}" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;" class="friendimage d-block" style="object-fit: cover;user-select: none;" alt="">
            </div>
            <div class="friend-name">
              <p>{{ $ask->ask->name }}</p>
            </div>
          </div>
          <div class="friend-box">
            <div class="friend-info">
              <div class="friend-time">
                <p>{{ $ask->created_at->format("n月j日 G:i") }}</p>
              </div>
            </div>
            <div class="friend-title">
              <p>{{ $ask->body }}</p>
            </div>
            <div class="friend-ask" style="display: flex;justify-content: center;">
              @if($ask->evaluation < 2) <form action="{{ route('asks.update', $ask->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <input type="hidden" name="evaluation" value="2">
                <button type="submit" class="btn btn-gradient2 mr-3">
                  <p style="font-size: 10px;">許可</p>
                </button>
                </form>
                <form action="{{ route('asks.update', $ask->id) }}" method="POST">
                  {{csrf_field()}}
                  {{method_field('PATCH')}}
                  <input type="hidden" name="evaluation" value="3">
                  <button type="submit" class="btn btn-gradient2">
                    <p style="font-size: 10px;">また今度
                  </button>
                </form>
                @else
            </div>
            <div class="friend-ask" style="justify-content: center;">
              <h6>承認済</h6>
              <form action="{{ route('asks.update', $ask->id) }}" method="POST">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <input type="hidden" name="evaluation" value="3">
                <button type="submit" class="btn btn-red">
                  <p style="font-size: 10px;">取り消す <i class="bi bi-trash-fill"></i>
                </button>
              </form>
              @endif
            </div>
          </div>
        </div>
      </article>
      @endforeach
    </div>
  </div>
</div>
<!-- </div> -->
@endsection
