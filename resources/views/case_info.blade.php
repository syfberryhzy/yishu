<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>案例详情</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/common.css" type="text/css" media="screen"/>

    <script src="/js/jquery.js"></script>
    <style>

    </style>
</head>
<body>
<div id="h5">
    <div class="page inner-page section" id="page-1" style="position: relative">
        <div class="inner-banner" style="background-image: url('/image/inner-bg.jpg')"></div>
        <div class="fixed-nav1" id="fixed_nav">
            <div class="nav" id="nav">
                <div class="menu">
                    <img src="/image/logo.png" class="logo"/>
                    <div class="menu-block"><span>红点奖</span><br><span>IF 奖</span></div>
                    <div class="menu-block"><span>世界之星奖</span><br><span>IDEA奖</span></div>
                </div>
            </div>
            <div class="other-nav logo-btn-box">
                <div class="logo-a">
                    <a class="logo-a-en unselected" href="{{route('home')}}">EN</a>
                    <span> / </span>
                    <a class="cn selected" href="{{route('home')}}">中文</a>
                </div>
                <div id="btnLogin" hidefocus="true" class="login-btn">
                    <div><img src="/image/sanheng.png" class="open"/></div>
                    <div class="close" style="position: absolute;top: 0;left: 0;"></div>
                </div>
            </div>
            <div class="hiden paga1-nav" id="paga1_nav">
                <div hidefocus="true" class="login-btn">
                    <div><img class="close hiden" src="/image/cha.png"/></div>
                </div>
                <ul class='login-con'>
                  <li>
                      <div><a href="{{route('home')}}">首页</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('case')}}">案例介绍</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('awards')}}">获奖记录</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('abouts')}}">关于一树</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('news')}}">观点资讯</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('contact')}}">联系我们</a></div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="example-detail-page2-bt page section2 section" id="page-2">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 detail-page2-left-content">

                <div class="detail-page2-left-content-artice">
                    <div class="detail-page2-left-content-artice-title">{{$data['title']}}</div>

                    <hr class="detail-hr"/>

                </div>
                {!!$data['body']!!}
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 detail-page2-right-content">
                <div class="detail-page2-right-content-img" style="background: url(/storage/{{$data['image']}}) no-repeat;">
                </div>
            </div>
        </div>
    </div>
    <div class="page section3 section " id="page-3">
        <div class="example-detail-page3-sj">
        <div class="container section3-details-box">
          @if ($data['banner_image'])
            @foreach ($data['banner_image'] as $key => $img)
              <div class="example-details-page3-container1 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                  <div class="detail-page3-left-img detail-page3-img-team" style="background: url(/storage/{{$img}}) no-repeat;"></div>
              </div>
            @endforeach
          @endif
        </div>
        </div>
        <div style="width:100%; height:200px;"></div>

        <div class="footer">
            <div class="footer-container">
                <div class="footer-container-top">
                    <div class="logo"><img src="/image/logo.png"/></div>
                    <div class="footer-nav">
                        <ul>
                          <li><a href="{{route('home')}}">首页</a></li>
                          <li><a href="{{route('case')}}">案例介绍</a></li>
                          <li><a href="{{route('awards')}}">获奖记录</a></li>
                          <li><a href="{{route('abouts')}}">关于一树</a></li>
                          <li><a href="{{route('news')}}">观点资讯</a></li>
                          <li><a href="{{route('contact')}}">联系我们</a></li>
                        </ul>
                    </div>
                    <div class="footer-contact">
                        <div class="qrcode"><img src="/storage/{{$config['qrcode']}}"/></div>
                        <div class="contact">
                            <ul>
                              <li>电话：{{$config['phone']}}</li>
                              <li>邮箱：{{$config['email']}}</li>
                              <li>地点：{{$config['address']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copiright">
                <span>&copy; 2000-2017 DXY All rights reserved.</span>
                <span>浙ICP备15034012号-2</span>
                <span>浙公网安备 33010802005190号</span>
            </div>
        </div>
    </div>
</div>
<script src="/js/move.js"></script>
<script src="/js/main.js"></script>
<script>
    otherNav();
</script>
</body>
</html>
