<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="shortcut icon"type="image/x-icon" href="images/banner/layer6.png"media="screen" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/about.css" type="text/css" media="screen"/>
    <title>关于一树</title>
    <script src="js/jquery.js"></script>

</head>
<body>
<div id="h5">
    <div class="page inner-page section" id="page-1" style="position: relative">
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
                    <a class="logo-a-en  {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'selected' : 'unselected'}}" href="http://en.isudesign.mandokg.com">EN</a>
                    <span> / </span>
                    <a class="cn {{ preg_match('/^http:\/\/en.isudesign/', request()->url()) ? 'unselected': 'selected' }}" href="http://isudesign.mandokg.com">中文</a>
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
    <div class="about-page">
        <div class="about-page-introdution">
            <div class="about-page-introdution-title">
                <div class="blue-squre">C</div>
                <div class="subtitle">
                    <span>Company 公司介绍</span>
                    <span>Introdution</span>
                </div>
            </div>
            <div class="about-page-introdution-content clearfix">
                <div class="image"><img src="storage/{{$company['image']}}"/></div>
                <div class="content">
                    <div class="content-body">
                        <div class="title">{{$company['title']}}</div>
                    {{-- <p>一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。</p> --}}
                    <p>{!!$company['body']!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page section3 section" id="page-3">
        <div class="with-page3-contain">
            <div class="container with-page3-content-box1">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 with-page3-content-team-details-title-par">
                    <div class="about-page-introdution-title">
                        <div class="blue-squre">T</div>
                        <div class="subtitle">
                            <span>Team 团队介绍</span>
                            <span>Introdution</span>
                        </div>
                    </div>

                    <div class="with-page3-content-team-details-text col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        {{-- 我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。 --}}
                        {!!$teams[0]['description']!!}
                    </div>
                        {!!$teams[0]['body']!!}
                    {{-- <ul class="with-page3-content-team-details-title-list col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <li>
                            对待设计，我们一丝不苟，不容许有任何差池和不满意。
                        </li>
                        <li>
                            对待设计，我们与国际接轨，引领高水平品味。
                        </li>
                        <li>
                            对待设计，我们想在人前，为客户做好一切准备。
                        </li>
                        <li>
                            对待设计，我们致以最高的诚信和诚意。
                        </li>

                    </ul> --}}
                </div>


                <div class="team_details_allimg col-xs-12 col-sm-12 col-md-12 col-lg-5">
                  @foreach ($members as $key => $mem)
                    @if ($key < 6)
                    <div class=" col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="with-page3-content-team-details-imgs-box">
                            <div class="with-page3-content-team-details-img-team with-page3-content-team-details-img1" style="background:url('storage/{{$mem['avatar']}}') no-repeat"></div>
                            <div class="with-page3-content-team-details-name">{{$mem['name']}}</div>
                            <div class="with-page3-content-team-details-position">{{$mem['job']}}</div>
                        </div>
                    </div>
                    @endif
                  @endforeach

                </div>

            </div>
        </div>

        <div class="about-page">
            <div class="about-bottom">
                <div class="about-bottom-image"><img src="storage/{{$teams[1]['image']}}"/></div>
                <div class="about-bottom-solgn">
                  {!!$teams[1]['body']!!}
                    {{-- <ul>
                        <li>
                            我们的设计师们，怀着对设计最强烈的<br>
                            热枕和最尊敬的态度，把最美好的设计呈现给您。
                        </li>
                    </ul> --}}
                </div>
            </div>
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
<script>
    $(function () {
        otherNav();
        withFullpage();
    });
</script>
</body>
</html>
