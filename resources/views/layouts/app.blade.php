<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('layouts.header')
</head>
<body>
    <div id="h5">
      <div id="intro">
          <div id="nav">
              <div class="translate">
                  <a>EN</a><span>|</span><a>中文</a>
              </div>
              <div class="menu">
                  <img src="image/logo.png" class="logo"/>
                  <div class="menu-block"><span>red dot award</span><br><span>IF award</span></div>
                  <div class="menu-block"><span>世界之星奖</span><br><span>IDEA奖</span></div>
                  <button id="btnLogin" hidefocus="true" class="login-btn">
                      <img src="image/sanheng.png" class="open"/><img class="close hiden" src="image/cha.png"/>
                  </button>
              </div>
          </div>
          <div class="greeting">
              <h1><span>ISU</span><span>DESIGN</span></h1>
              <image src="image/banner/layer6.png" class="greeting-icon">
          </div>
          <div id="scene-container">
              <ul id="scene">
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-01">
                          <img src="image/banner/layer1.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-02">
                          <img src="image/banner/layer2.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-03">
                          <img src="image/banner/layer3.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-04">
                          <img src="image/banner/layer4.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-05">
                          <img src="image/banner/layer11.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-07">
                          <img src="image/banner/layer12.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-08">
                          <img src="image/banner/layer8.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-09">
                          <img src="image/banner/layer9.png">
                      </div>
                  </li>
                  <li class="layer" data-depth="0.50">
                      <div class="shapes-10">
                          <img src="image/banner/layer10.png">
                      </div>
                  </li>
              </ul>
          </div>
      </div>

        @yield('content')
    </div>

    @include('layouts.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
