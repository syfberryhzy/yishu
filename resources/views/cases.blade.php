<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>案例介绍</title>
    <link rel="icon" href="fav.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/image/fav.ico" type="image/x-icon">
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
                    <div class="menu-block"><span>红点奖</span><br><span>IF 奖</span></div>
                    <div class="menu-block"><span>世界之星奖</span><br><span>IDEA奖</span></div>
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
    <div class="example-page">
        <div class="container">
            <div class="block-title">
                <h1>案例介绍</h1>
                <hr class="center-block home-hr"/>
                <h4>每位伙伴，我们都用百分百的诚意来服务</h4>
            </div>
            <div class="example-tab">
                <ul>
                    <li class="on"><a href="javascript:void(0)">全部</a></li>
                    <li><a href="javascript:void(0)">文创</a></li>
                    <li><a href="javascript:void(0)">包装</a></li>
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
                                    <div class="example-page2-hover"><a href="/case/{{$val->id}}">查看详情</a></div>
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
                                        <div class="example-page2-hover"><a href="/case/{{$val->id}}">查看详情</a></div>
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
                                    <div class="example-page2-hover"><a href="/case/{{$val->id}}">查看详情</a></div>
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
                                      <div class="example-page2-hover"><a href="/case/{{$val->id}}">查看详情</a></div>
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
