<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>一树品牌设计，一树文化创意产品，一树包装设计，一树联系方式</title>
    <meta name="keywords" content="一树，杭州一树，一树品牌策划，一树品牌设计，一树文化创意产品开发，一树产品包装设计">
    <meta name="description" content="一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔，拥有多年的技术经验。联系一树电话+86 0571-87550583 联系地址 杭州市上城区海运国际大厦">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon"type="image/x-icon" href="images/banner/layer6.png"media="screen" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css" type="text/css" media="screen"/>
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
                    <div class="menu-block"><span>红点奖</span><br><span>IF 奖</span></div>
                    <div class="menu-block"><span>世界之星奖</span><br><span>IDEA奖</span></div>
                </div>
            </div>
            <div class="other-nav logo-btn-box">
                <div class="logo-a">
                    <a class="logo-a-en  {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'selected' : 'unselected'}}" href="http://en.isudesign.com">EN</a>
                    <span> / </span>
                    <a class="cn {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'unselected': 'selected' }}" href="http://www.isudesign.com">中文</a>
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
    <div class="page section2 section" id="page-2">

        <div class="container contact-module">
            <div class="address col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-address-box">
                    <div class="contact-address-img"></div>
                    <div class="contact-address-title">联系地址</div>
                    <div class="contact-address-text"><h4>{!!$config['address']!!}</h4></div>
                </div>
            </div>
            <div class="phone col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-phone-box">
                    <div class="contact-phone-img"></div>
                    <div class="contact-phone-title">联系电话</div>
                    <div class="contact-phone-text"><h4>{!!$config['phone']!!}</h4> </div>
                </div>
            </div>
            <div class="email col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="contact-email-box">
                    <div class="contact-email-img"></div>
                    <div class="contact-email-title">邮箱地址</div>
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
              <span>Copyright &copy; isudesign.com</span>
              <span>浙ICP备17047746号-1</span>
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
    function map() {
        var points = [{
            id: 1,
            lng: 120.182749,
            lat: 30.219782,
            title: "地址：{{$config['address']}}",
            content: ["电话：{{$config['phone']}}", "邮箱：{{$config['email']}}", ]
        }];
        new BaiduMap({
            id: "contact_map_container1",
            level: 16,
            titleClass: "title",
            contentClass: "content",
            centerPoint: {
                // 地图中心点经纬度
                lng: 120.182749,
                lat: 30.219782
            },
            index: -1,
            points: points,
            // showLabel: true
        });

    }
</script>
</body>
</html>
