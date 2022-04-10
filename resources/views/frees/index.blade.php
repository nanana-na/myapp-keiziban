@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="alert alert-danger">
  {{ session('flash_message') }}
</div>
@endif

<div class="container" style="max-width: 850px;">
  <h2><span class=" badge badge-info text-white">チャット</span></h2>
  <div class="justify-content-center">
    <div class="bg-white">
      @foreach ($frees as $free)
      <a class="club-link" href=" {{ route('frees.show', $free->id) }}">
        <ul class="club-container">
          <li class="m-auto">
            <h4 style="font-size: 20px;margin-right: 0;">{{ $free->title }}</h4>
          </li>
          <li class="mr-0">
            <i class="bi bi-chevron-right text-lowblack"></i>
          </li>
        </ul>
      </a>
      @endforeach
    </div>
  </div>
  <!-- <div class=" card-deck">
                @foreach ($frees as $free)
                <div class="col-md-6">
                  <a href="{{ route('frees.show', $free->id) }}">
                    <div class="card border-dark m-1" style="min-width: 18rem;">
                      <div class="card-body-s">
                        <h4 class="card-title"><span>{{ $free->title }}</span></h4>
                      </div>
                    </div>
                  </a>
                </div>
                @endforeach -->
</div>
</div>
</div>

@endsection
