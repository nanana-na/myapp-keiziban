@extends('layouts.app')
@section('content')
<div class="container" style="max-width: 850px;">
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
  <h2><span class="badge badge-info text-white">サークル/部活</span></h2>
  <div class="justify-content-center">
    <div class="bg-white">
      @foreach ($posts as $post)
      <a class="club-link" href=" {{ route('posts.show', $post->id) }}">
        <ul class="club-container">
          <li class="ml-1">
            <div class="{{ $post->icon }}"></div>
            </span>
          </li>
          <li>
            <h4 style="font-size: 18px;">{{ $post->group }}</h4>
          </li>
          <li class="mr-0">
            <i class="bi bi-chevron-right text-lowblack"></i>
          </li>
        </ul>
      </a>
      @endforeach
    </div>
  </div>
</div>
@endsection
