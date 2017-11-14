<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <title>News Info</title>
    <link rel="icon" href="fav.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/image/fav.ico" type="image/x-icon">
    <script src="/js/jquery.js"></script>
    <style>
      .news-body img {
          width: 100%;
          position: relative;
          left: -2em;
          /*height: 574px;*/
          /*background: url(../image/viewpoint.png) #f8f8f8 no-repeat;*/
          background-size: 100% 100%;
          background-position: 0px 0px;
      }
    </style>
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
                    <a class="logo-a-en  {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'selected' : 'unselected'}}" href="http://en.isudesign.mandokg.com">EN</a>
                    <span> / </span>
                    <a class="cn {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'unselected': 'selected' }}" href="http://isudesign.mandokg.com">中文</a>
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
                      <div><a href="{{route('contact')}}">Contact Us</a></div>
                  </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="page section2 section" id="page-2">
        <div class="viewpointdetail-page2-sj">
        <div class="container viewpointdetail-page2-content">
            <div class="viewpointdetail-page2-content-nav">
                <div class="viewpointdetail-page2-content-nav-viewpoint pull-left">观点资讯</div>
                <button style="color: #c0c0c0" type="button" class="btn white btn-default pull-right viewpointdetail-page2-content-nav-button">返回
                </button>
            </div>

            <div class="viewpointdetail-page2-content-section">
                <div class="viewpointdetail-page2-content-section-title">
                    {!!$data->title!!}
                </div>
                <div class="viewpointdetail-page2-content-section-date">{!!$data->created_at!!}</div>
                <div class="viewpointdetail-page2-content-section-text news-body">
                    {{-- 最近，工作没有那么忙，终于有时间学习微信小程序的开发了。学习的过程还是比较顺利的，入门相对简单，即便没有多少前端开发经验的人也能很快上手。
                    现在微信小程序的资料还比较少，查看官方文档是很好的方式。微信小程序的官方文档还是很容易阅读的，并没有什么阅读障碍。在一个悠闲的午后，泡一杯清茶，开始了我的小程序之旅。花了一下午的时间把官方文档刷了一遍。接着，下载官方提供的
                    Demo，在微信开发者工具运行，查看每个组件的效果，使用方式，调试着看界面布局，学习API接口，顺便将弹性盒子模式复习了下。<br>
                    在项目中学习才是最有效的学习方式。于是，我开始思考要做些什么项目。小程序适合开发低频使用，用完即走，业务不能太复杂的应用。工具类的应用首先被考虑，其次希望能把关注点放在微信小程序的开发，最好能有现成的后台接口。确认了方向之后，最终决定仿豆瓣
                    电影的功能，开发一款微信小程序版的豆瓣电影。 --}}
                    {!!$data->body!!}
                </div>
                {{-- <div class="viewpointdetail-page2-content-section-text-nav-img">
                </div> --}}
                {{-- <div class="viewpointdetail-page2-content-section-text">电影首页：显示“影院热映”，“即将上映”以及“精选榜单”，测试之后发现精选榜单只有Top250的
                    API
                    接口能正常使用，于是，豆瓣Top250、口碑榜、新片榜、票房榜使用同一个 API 接口，只是请求的数据参数不一样。由于微信小程序的 request 的最大并发数是
                    5，所以用户进入程序时只加载“影院热映”、“即将上映”的数据，界面滑动之后再加载榜单数据。
                </div>
                <div class="viewpointdetail-page2-content-section-text">
                    更多”右侧的箭头这里并没有使用图标，而是使用样式来实现的。微信小程序对 app
                    的体积有限制，超过1M就不能上传。其实，不只是微信小程序，网页也一样。能用样式实现的就不用字体图标；能用字体图标实现的就不用 sprite 图；能用 sprite 图实现的就不用单一图标。样式 >
                    字体图标 > sprite 图 > 单一图标，不能说是绝对，但基本原则是这样。这样做的目的也是为了减少 app 的体积，减少 HTTP 的请求次数，减轻服务器的压力。
                    我在做代销整体视觉升级前，给自己制定了一个视觉设计的时间计划表，跟团队碰撞以后，发现之前自以为考虑的比较周全的计划，还是有很多不足的。由于自身的一开始只从视觉视角触发的局限，没办法从更大局的角度来统筹整体。项目的视觉升级不仅有品牌、视觉语言推导、业务问题的收集，还要结合用户走访、页面数据现状、内容框架的整理等更多的方面来把这件事情做全。

                </div> --}}
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
                          <li><a href="{{route('contact')}}">Contact Us</a></li>
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
              <span>Copyright &copy; isudesign.com</span>
              <span>浙ICP备17047746号-1</span>
            </div>
        </div>
    </div>
</div>
<script src="/js/move.js"></script>
<script src="/js/main.js"></script>
<script>
    $(function(){
        otherNav();
        viewpointDetainFullpage();
    });
    $('.viewpointdetail-page2-content-nav-button').on('click', function () {
        location.href = '{{route('news')}}'
    })
</script>
</body>
</html>
