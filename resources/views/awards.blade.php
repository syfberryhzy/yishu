<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content="一树设计，杭州包装设计，企业品牌形象设计，文化创意开发，产品包装设计，纸盒包装创意设计，杭州包装设计公司，logo设计，平面海报设计，UI设计，设计公司，企业品牌形象上设计，品牌策划设计，杭州品牌策划设计公司，杭州文化创意公司，文化创意设计，创意设计">
    <meta name="description" content="一树设计，全国领先的设计公司，致力于为广大用户提供专业、完善的包装设计/企业品牌形象设计,及文创产品开发等服务。">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/common.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/css/winning_records.css" type="text/css" media="screen"/>
    <title>Awards</title>
    <script src="/js/jquery.js"></script>

</head>
<body>
<div id="h5">
    <div class="page inner-page section" id="page-1" style="position: relative">
        <div class="inner-banner" style="background-image: url({{$banner['image'] ? '/storage/'.$banner['image'] : '/image/inner-bg.jpg'}})"></div>
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
    <div class="winning-records-page">
        <div class="win-page2-sj">
            <div class="win-page2-contain">
                <div class="block-title">
                    <h1>Winning instructions</h1>
                    <hr class="center-block home-hr"/>
                    <h4>Won the red dot award, IF Award, World Star Packaging Award and a series of domestic and international awards</h4>
                </div>
                <div class="win-points">
                    <div class="win-points-inner">
                        <div class="win-points-img">
                            <img src="/storage/{{$post['image']}}"/>
                        </div>
                        <div class="win-points-list">
                          {!!$post['body']!!}

                        </div>
                    </div>
                </div>

                <div style="position: relative;" class="win-page2-contain-section row">
                    <!--第1行-->
                    @foreach ($datas as $key => $val)
                      <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                              <div class="win-page2-contain-section-winner-img-team"
                                   style="align-items: center;margin: auto;">
                                     <img src="/storage/{{$val['image']}}" alt="">
                                   </div>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                              <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto;">
                                  {{$val['english_name']}}<br>
                                  {{$val['name']}}<br>
                                  {{$val['ranking']}}<br>
                                  {{$val['date']}}<br>
                              </div>
                          </div>
                      </div>
                    @endforeach
            </div>
        </div>
      </div>

    </div>
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
<script src="/js/move.js"></script>
<script src="/js/main.js"></script>
<script>
    otherNav();
</script>
</body>
</html>
