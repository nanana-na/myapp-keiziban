    @extends('layouts.app')
    @section('content')

    @if (session('flash_message'))
    <div class="flash_message">
      {{ session('flash_message') }}
    </div>
    @endif
    <div class="container">
      <h4 style="font-family: 'Zen Antique Soft', serif;">その他</h4>
      <div class=" row justify-content-center mt-4">
        <ul>
          <li style="padding-right:20px;"><a class="btn etc-btn btn-hai" href="https://www.sc.admin.saga-u.ac.jp/jikannwari_kyoyo_annai.pdf" target=" _blank"><i class="bi bi-map text-gray" style="padding:7px"></i><br><span class="header-hide header-long">地図</span></a></li>
          <li style="padding-right:20px;"><a class="btn etc-btn btn-hai" href="http://sadai.jp/alumni/dousoukai/song/"><i class="bi bi-music-note-beamed text-gray" style="padding:7px" target=" _blank"></i><br><span class="header-hide">校歌</span></a></li>
          <li style="padding-right:20px;"><a class="btn etc-btn btn-hai" href="/recommend"><i class="bi bi-phone" style="padding:7px"></i></i><br><span class="header-hide">おすすめの設定</span></a></li>
        </ul>
      </div>
    </div>

    @endsection
