<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>案例介绍</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/example.css" type="text/css" media="screen"/>

    <script src="js/jquery.js"></script>
</head>
<body>
<div id="h5">
    <div class="page section inner-page" style="position: relative">
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
    <div class="example-page">
        <div class="container">
            <div class="block-title">
                <h1>Case introduction</h1>
                <hr class="center-block home-hr"/>
                <h4>Every partner, we all use 100% sincerity to serve</h4>
            </div>
            <div class="example-tab">
                <ul>
                    <li class="on"><a href="javascript:void(0)">All</a></li>
                    <li><a href="javascript:void(0)">Cultural</a></li>
                    <li><a href="javascript:void(0)">Package</a></li>
                    <li><a href="javascript:void(0)">VI</a></li>
                </ul>
            </div>
            <div id="example_page2_2">
                <!--全部-->
                <div class="example-form-tab active">
                  @foreach ($datas as $key => $val)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 example-module">
                        <div class="example-module-child">
                          <a href="/case/{{$val->id}}">
                            <div class="example-imgs-box">
                                <div class="example-page2-image-team example-page2-image1"style="background: url(storage/{{$val['image']}}) no-repeat;"></div>
                                <div class="example-page2-image-team example-page2-hover-box example-page2-image{{$val->id}}-alt hiden">
                                    <div class="example-page2-hover"><a href="/case/{{$val->id}}">see details</a></div>
                                </div>
                            </div>
                          </a>
                            <div class="title">{{$val['title']}}</div>
                            <div class="text">{{$val['description']}}</div>
                        </div>
                    </div>
                  @endforeach
                </div>
                <!--文创-->
                <div class="example-form-tab ">
                    @foreach ($datas as $key => $val)
                      @if ($val['category_id'] == 11)
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 example-module">
                            <div class="example-module-child">
                              <a href="/case/{{$val->id}}">
                                <div class="example-imgs-box">
                                    <div class="example-page2-image-team example-page2-image1"style="background: url(storage/{{$val['image']}}) no-repeat;"></div>
                                    <div class="example-page2-image-team example-page2-hover-box example-page2-image{{$val->id}}-alt hiden">
                                        <div class="example-page2-hover"><a href="/case/{{$val->id}}">see details</a></div>
                                    </div>
                                </div>
                              </a>
                                <div class="title">{{$val['title']}}</div>
                                <div class="text">{{$val['description']}}</div>
                            </div>
                        </div>
                      @endif
                    @endforeach
                </div>
                <!--包装-->
                <div class="example-form-tab ">
                @foreach ($datas as $key => $val)
                  @if ($val['category_id'] == 12)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 example-module">
                        <div class="example-module-child">
                          <a href="/case/{{$val->id}}">
                            <div class="example-imgs-box">
                                <div class="example-page2-image-team example-page2-image1"style="background: url(storage/{{$val['image']}}) no-repeat;"></div>
                                <div class="example-page2-image-team example-page2-hover-box example-page2-image{{$val->id}}-alt hiden">
                                    <div class="example-page2-hover"><a href="/case/{{$val->id}}">see details</a></div>
                                </div>
                            </div>
                          </a>
                            <div class="title">{{$val['title']}}</div>
                            <div class="text">{{$val['description']}}</div>
                        </div>
                    </div>
                  @endif
                @endforeach
                </div>
                <!--VI-->
                <div class="example-form-tab ">
                  @foreach ($datas as $key => $val)
                    @if ($val['category_id'] == 8)
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 example-module">
                          <div class="example-module-child">
                            <a href="/case/{{$val->id}}">
                              <div class="example-imgs-box">
                                  <div class="example-page2-image-team example-page2-image1"style="background: url(storage/{{$val['image']}}) no-repeat;"></div>
                                  <div class="example-page2-image-team example-page2-hover-box example-page2-image{{$val->id}}-alt hiden">
                                      <div class="example-page2-hover"><a href="/case/{{$val->id}}">see details</a></div>
                                  </div>
                              </div>
                            </a>
                              <div class="title">{{$val['title']}}</div>
                              <div class="text">{{$val['description']}}</div>
                          </div>
                      </div>
                    @endif
                  @endforeach
                </div>
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
<script src="js/move.js"></script>
<script src="js/main.js"></script>
<script>
$(function () {
    otherNav();
    exampleShowActive();
    exampleFullpage();
    /*图片移入动效*/

    @foreach ($datas as $key => $val)
    /*图片移入动效*/
    imgHover('.example-page2-image{{$val->id}}-alt');
    @endforeach
})
</script>
</body>
</html>
