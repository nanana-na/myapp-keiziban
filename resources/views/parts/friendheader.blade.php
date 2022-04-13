<div class="friend-day">
  <form action="{{ url('/tomorrow') }}" method="GET">
    @csrf
    <input type="hidden" name="day" value="0">
    <button type="submit" class="btn btn-gradient2">
      <p style="font-size: 10px;">今日
    </button>
  </form>
  <form action="{{ url('/tomorrow') }}" method="GET">
    @csrf
    <input type="hidden" name="day" value="1">
    <button type="submit" class="btn btn-gradient2">
      <p style="font-size: 10px;">明日
    </button>
  </form>
  <form action="{{ url('/tomorrow') }}" method="GET">
    @csrf
    <input type="hidden" name="day" value="2">
    <button type="submit" class="btn btn-gradient2">
      <p style="font-size: 10px;">明後日
    </button>
  </form>
  <div class="friend-header">
    <a href="/List" class="btn btn-hai"><span>My
      </span><i class="bi bi-clipboard-check"></i></a>
    <a href="/askList" class="btn btn-hai"><span>Chat</span><i class="bi bi-chat-left-dots"></i></a>
    <a href="{{route('asks.index')}}" class="btn btn-hai"><span>Ask</span><i class="bi bi-envelope-plus
        @if ($user->ask_alert > 0)
        pop
        @endif
    "></i></a>
  </div>
</div>
