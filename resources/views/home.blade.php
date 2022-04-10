@extends('layouts.app')

@section('content')
<header class="bg-danger">
    <h1>
        <a href="/">ホーム</a>
    </h1>
    <nav class="pc-nav">
        <ul>
            <li style="padding-right:30px;"><a href="/posts">サークル</a></li>
            <li style="padding-right:30px;"><a href="jobs">バイト</a></li>
            <li><a href="#">知り合い</a></li>
        </ul>
    </nav>
</header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
