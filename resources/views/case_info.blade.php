<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Case Info</title>
    <meta name="keywords" content="一树设计，杭州包装设计，企业品牌形象设计，文化创意开发，产品包装设计，纸盒包装创意设计，杭州包装设计公司，logo设计，平面海报设计，UI设计，设计公司，企业品牌形象上设计，品牌策划设计，杭州品牌策划设计公司，杭州文化创意公司，文化创意设计，创意设计">
    <meta name="description" content="一树设计，全国领先的设计公司，致力于为广大用户提供专业、完善的包装设计/企业品牌形象设计,及文创产品开发等服务。">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
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
                    <div class="menu-block"><span>Red dot Award</span><br><span>IF Award</span></div>
                    <div class="menu-block"><span>World Star Award</span><br><span>IDEA Award</span></div>
                </div>
            </div>
            <div class="other-nav logo-btn-box">
                <div class="logo-a">
                    <a class="logo-a-en  {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'selected' : 'unselected'}}" href="http://en.isudesign.com">EN</a>
                    <span> / </span>
                    <a class="cn {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'unselected': 'selected' }}" href="http://www.isudesign.com">中文</a>
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
                      <div><a href="{{route('home')}}">Home</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('case')}}">Cases</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('awards')}}">Awards</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('abouts')}}">About</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('news')}}">News</a></div>
                  </li>
                  <li>
                      <div><a href="{{route('contact')}}">Contact</a></div>
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
                          <li><a href="{{route('home')}}">Home</a></li>
                          <li><a href="{{route('case')}}">Cases</a></li>
                          <li><a href="{{route('awards')}}">Awards</a></li>
                          <li><a href="{{route('abouts')}}">About</a></li>
                          <li><a href="{{route('news')}}">News</a></li>
                          <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-contact">
                        <div class="qrcode"><img src="/storage/{{$config['qrcode']}}"/></div>
                        <div class="contact">
                            <ul>
                              <li>Tel：{{$config['phone']}}</li>
                              <li>Email：{{$config['email']}}</li>
                              <li>Address：{{$config['address']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copiright">
              <span>Copyright &copy; isudesign.com</span>
              <span>浙ICP备17047746号-1</span>
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
