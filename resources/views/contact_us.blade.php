<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="shortcut icon"type="image/x-icon" href="images/banner/layer6.png"media="screen" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css" type="text/css" media="screen"/>
    <title>联系我们</title>
    <script src="js/jquery.js"></script>
<!--    <script src="js/parallax.js"></script>-->
    <script src="js/jquery.baiduMap.min.js"></script>
    <script src="http://api.map.baidu.com/api?v=2.0&ak=A1LU7iHS0avqQwPLAxbhKn0UYSQCuRVH"></script>
</head>
<body>
<div id="h5">
    <div class="page inner-page section" style="position: relative">
        <div class="inner-banner" style="background-image: url({{$banner['image'] ? 'storage/'.$banner['image'] : 'image/inner-bg.jpg'}})"></div>
        <div class="fixed-nav1" id="fixed_nav">
            <div class="nav" id="nav">
                <div class="menu">
                    <img src="image/logo.png" class="logo"/>
                    <div class="menu-block"><span>Red dot Award</span><br><span>IF Award</span></div>
                    <div class="menu-block"><span>World Star Award</span><br><span>IDEA Award</span></div>
                </div>
            </div>
            <div class="other-nav logo-btn-box">
                <div class="logo-a">
                    <a class="logo-a-en unselected" href="{{route('home')}}">EN</a>
                    <span> / </span>
                    <a class="cn selected" href="{{route('home')}}">中文</a>
                </div>
                <div id="btnLogin" hidefocus="true" class="login-btn">
                    <div><img src="image/sanheng.png" class="open"/></div>
                    <div class="close" style="position: absolute;top: 0;left: 0;"></div>
                </div>
            </div>
            <div class="hiden paga1-nav" id="paga1_nav">
                <div hidefocus="true" class="login-btn">
                    <div><img class="close hiden" src="image/cha.png"/></div>
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
    <div class="page section2 section" id="page-2">

        <div class="container contact-module">
            <div class="address col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-address-box">
                    <div class="contact-address-img"></div>
                    <div class="contact-address-title">Address</div>
                    <div class="contact-address-text"><h4>{!!$config['address']!!}</h4></div>
                </div>
            </div>
            <div class="phone col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-phone-box">
                    <div class="contact-phone-img"></div>
                    <div class="contact-phone-title">Tel</div>
                    <div class="contact-phone-text"><h4>{!!$config['phone']!!}</h4> </div>
                </div>
            </div>
            <div class="email col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-email-box">
                    <div class="contact-email-img"></div>
                    <div class="contact-email-title">Email</div>
                    <div class="contact-email-text"><h4>{!!$config['email']!!}</h4> </div>
                </div>
            </div>
        </div>
        <!-- 地图 -->
        <div class="container contact-map" style="display: flex;">
            <div class="contact-map-box" style="align-items: center; margin: auto">
                <div id="contact_map_container1"></div>
            </div>
        </div>

        <!-- 底部 -->
        <div class="footer">
            <div class="footer-container">
                <div class="footer-container-top">
                    <div class="logo"><img src="image/logo.png"/></div>
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
                              <li>Addr：{{$config['address']}}</li>
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
<script src="js/move.js"></script>
<script src="js/main.js"></script>
<script type="text/javascript">
    $(function () {
        otherNav();
        map();
    })
</script>
</body>
</html>
