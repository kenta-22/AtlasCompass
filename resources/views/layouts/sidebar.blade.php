<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>AtlasBulletinBoard</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Oswald:wght@200&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="all_content">
  <div class="d-flex">
    <div class="sidebar">
      @section('sidebar')
      <p>
        <a href="{{ route('top.show') }}">
          <i class="fa-solid fa-house fa-fw" style="color: #ffffff;"></i>トップ
        </a>
      </p>
      <p>
        <a href="/logout">
          <i class="fa-solid fa-right-from-bracket fa-fw" style="color: #ffffff;"></i>ログアウト</a>
      </p>
      <p>
        <a href="{{ route('calendar.general.show',['user_id' => Auth::id()]) }}">
          <i class="fa-regular fa-calendar fa-fw" style="color: #ffffff;"></i>スクール予約
        </a>
      </p>
      @can('admin')
      <p>
        <a href="{{ route('calendar.admin.show',['user_id' => Auth::id()]) }}">
          <i class="fa-regular fa-calendar-check fa-fw" style="color: #ffffff;"></i>スクール予約確認
        </a>
      </p>
      <p>
        <a href="{{ route('calendar.admin.setting',['user_id' => Auth::id()]) }}">
          <i class="fa-regular fa-calendar-plus fa-fw" style="color: #ffffff;"></i>スクール枠登録
        </a>
      </p>
      @endcan
      <p>
        <a href="{{ route('post.show') }}">
          <i class="fa-regular fa-message fa-fw" style="color: #ffffff;"></i>掲示板
        </a>
      </p>
      <p>
        <a href="{{ route('user.show') }}">
          <i class="fa-solid fa-users fa-fw" style="color: #ffffff;"></i>ユーザー検索
        </a>
      </p>
      @show
    </div>
    <div class="main-container" style="padding-left:170px;">
      @yield('content')
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/11efa6a52c.js" crossorigin="anonymous"></script>
  <script src="{{ asset('js/register.js') }}" rel="stylesheet"></script>
  <script src="{{ asset('js/bulletin.js') }}" rel="stylesheet"></script>
  <script src="{{ asset('js/user_search.js') }}" rel="stylesheet"></script>
  <script src="{{ asset('js/calendar.js') }}" rel="stylesheet"></script>
</body>
</html>
