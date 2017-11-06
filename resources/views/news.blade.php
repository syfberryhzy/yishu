<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>News</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/common.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/css/pagination.css">

    <script src="/js/jquery.js"></script>
    <script src="/js/jquery.pagination.js"></script>

</head>
<body>
<div id="h5">
    <div class="page inner-page section" id="page-1" style="position: relative">
        <div class="inner-banner" style="background-image: url({{ $banner['image'] ? '/storage/'.$banner['image'] : '/image/inner-bg.jpg'}})"></div>
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

        <div class="container viewpoint-page2-bt">
            <div>
              @foreach ($news as $key => $new)
                <div id="child1" class="child1 viewpoint-page2-child" data-id="{{$new->id}}">
                    <div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="viewpoint-page2-img1 viewpoint-page2-img-team" style="background: url(/storage/{{ $new->image }}) no-repeat;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="viewpoint-page2-content">
                                <div class="viewpoint-page2-content-title">{{ $new->title }}</div>
                                <div class="viewpoint-page2-content-text">
                                  <span>{!! mb_substr($new->description, 0, 120).'...'!!}<span>
                                    {{-- <span>近有不少设计师会跟我聊到，做云计算的交互设计与其他</span><br class="viewpoint-br"><span>设计师有什么区别吗？我其实也不知道怎么回答，能够记起的最后一...</span> --}}
                                </div>
                            </div>
                        </div>
                        <div class=" col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <div class="viewpoint-page2-date">
                                <span class="viewpoint-page2-date-month col-xs-12 col-sm-12 col-md-12 col-lg-12">{{ \Carbon\Carbon::parse($new->created_at)->month }}-{{ \Carbon\Carbon::parse($new->created_at)->day }}</span>
                                <span class="viewpoint-page2-date-year col-xs-12 col-sm-12 col-md-12 col-lg-12">{{ \Carbon\Carbon::parse($new->created_at)->year }}</span>
                                <span class="viewpoint-page2-date-day col-xs-12 col-sm-12 col-md-12 col-lg-12">&gt</span>
                            </div>
                        </div>
                    </div>
                </div>
              @endforeach
              {{ $news->links() }}

            </div>

            {{-- <div class="viewpoint-page2-m-box"></div> --}}
        </div>

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
                <span>&copy; 2000-2017 DXY All rights reserved.</span>
                <span>浙ICP备15034012号-2</span>
                <span>浙公网安备 33010802005190号</span>
            </div>
        </div>
    </div>
</div>
<script src="js/move.js"></script>
<script src="js/main.js"></script>
<script>
    $(function () {
/*        viewpiontFullpage();*/
        otherNav();
        viewpiontPagination();
    });
</script>
</body>
</html>
