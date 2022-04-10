@extends('layouts.app')
@section('content')

@if (session('flash_message'))
<div class="flash_message">
  {{ session('flash_message') }}
</div>
@endif
<div class="container">
  <h2><span class="badge badge-info text-white">認証ユーザー</span></h2>
  <div class="justify-content-center">
    <div class="bg-white" style="max-width: 750px;">
      @foreach ($users as $user)
      <a class="club-link" href=" {{ route('admins.show', $user->id) }}">
        <ul class="club-container">
          <li>
            <h4 style="font-size: 18px;">{{ $user->number }}</h4>
          </li>
          <li>
            <p>{{ $user->name }}</p>
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
