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
<div class="content">
    <div class="title m-b-md">
        Laravel
    </div>

    <div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>
</div>
</div>
</body>

</html>
@endsection
