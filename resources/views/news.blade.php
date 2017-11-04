<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>观点资讯</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/pagination.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery.pagination.js"></script>

</head>
<body>
<div id="h5">
    <div class="page inner-page section" id="page-1" style="position: relative">
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

        <div class="container viewpoint-page2-bt">
            <div>
              @foreach ($news as $key => $new)
                <div id="child1" class="child1 viewpoint-page2-child" data-id="{{$new->id}}">
                    <div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="viewpoint-page2-img1 viewpoint-page2-img-team" style="background: url(storage/{{ $new->image }}) no-repeat;"></div>
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
                {{-- <div id="child1" class="child1 viewpoint-page2-child">
                    <div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="viewpoint-page2-img1 viewpoint-page2-img-team"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                            <div class="viewpoint-page2-content">
                                <div class="viewpoint-page2-content-title">为什么现今标志设计越来越简洁化？</div>
                                <div class="viewpoint-page2-content-text">
                                    <span>近有不少设计师会跟我聊到，做云计算的交互设计与其他</span><br class="viewpoint-br"><span>设计师有什么区别吗？我其实也不知道怎么回答，能够记起的最后一...</span>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xs-12 col-sm-12 col-md-2 col-lg-2">
                            <div class="viewpoint-page2-date">
                                <span class="viewpoint-page2-date-month col-xs-12 col-sm-12 col-md-12 col-lg-12">08-29</span>
                                <span class="viewpoint-page2-date-year col-xs-12 col-sm-12 col-md-12 col-lg-12">2017</span>
                                <span class="viewpoint-page2-date-day col-xs-12 col-sm-12 col-md-12 col-lg-12">&gt</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="child2 viewpoint-page2-child">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="viewpoint-page2-img2 viewpoint-page2-img-team"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="viewpoint-page2-content">
                            <div class="viewpoint-page2-content-title">又一个大杀器！你们为什么不能对设计师好点?</div>
                            <div class="viewpoint-page2-content-text">
                                <span>做了好多年的设计师，觉得这个行业真的很苦，几乎任何</span><br class="viewpoint-br"><span>一个人都能特别自信的站在你身后说：我觉得这个图标可以往左挪一...</span>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div class=" viewpoint-page2-date">
                            <span class="viewpoint-page2-date-month col-xs-12 col-sm-12 col-md-12 col-lg-12">08-29</span>
                            <span class="viewpoint-page2-date-year col-xs-12 col-sm-12 col-md-12 col-lg-12">2017</span>
                            <span class="viewpoint-page2-date-day col-xs-12 col-sm-12 col-md-12 col-lg-12">&gt</span>
                        </div>
                    </div>
                </div>

                <div class="child3 viewpoint-page2-child">

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="viewpoint-page2-img3 viewpoint-page2-img-team"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="viewpoint-page2-content">
                            <div class="viewpoint-page2-content-title">高手经验！FACEBOOK的360全景VR应用设计总结</div>
                            <div class="viewpoint-page2-content-text">
                                <span>FB团队设计的一款Gear VR（三星VR设备）平台的全</span><br class="viewpoint-br"><span>景应用过程总结，其中包含一些很有价值的VR实战经验与设计原则...</span>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div class=" viewpoint-page2-date">
                            <span class="viewpoint-page2-date-month col-xs-12 col-sm-12 col-md-12 col-lg-12">08-29</span>
                            <span class="viewpoint-page2-date-year col-xs-12 col-sm-12 col-md-12 col-lg-12">2017</span>
                            <span class="viewpoint-page2-date-day col-xs-12 col-sm-12 col-md-12 col-lg-12">&gt</span>
                        </div>
                    </div>
                </div>
                <div class="child4 viewpoint-page2-child">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="viewpoint-page2-img4 viewpoint-page2-img-team"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="viewpoint-page2-content">
                            <div class="viewpoint-page2-content-title">用这个方法，让你的设计轻松通过！</div>
                            <div class="viewpoint-page2-content-text"><span>Hey熙：相信很多体验设计师在与产品需求方进行设计提案</span><br
                                    class="viewpoint-br"><span>的时候都会遇到这样的情景：你阐述自己的设计推导过程，从产品目...</span>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div class=" viewpoint-page2-date">
                            <span class="viewpoint-page2-date-month col-xs-12 col-sm-12 col-md-12 col-lg-12">08-29</span>
                            <span class="viewpoint-page2-date-year col-xs-12 col-sm-12 col-md-12 col-lg-12">2017</span>
                            <span class="viewpoint-page2-date-day col-xs-12 col-sm-12 col-md-12 col-lg-12">&gt</span>
                        </div>
                    </div>
                </div>
                <div class="child5 viewpoint-page2-child">
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <div class="viewpoint-page2-img5 viewpoint-page2-img-team"></div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                        <div class="viewpoint-page2-content">
                            <div class="viewpoint-page2-content-title">想提示用户有错误？不会这五个设计方法怎么行</div>
                            <div class="viewpoint-page2-content-text"><span>每个系统软件在运行的过程中都会出错，可能是用户操作造</span><br
                                    class="viewpoint-br"><span>成的，也可能是系统错误，局域这两种情况，如何正确的提示错误信息...</span>
                            </div>
                        </div>
                    </div>
                    <div class=" col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div class=" viewpoint-page2-date">
                            <span class="viewpoint-page2-date-month col-xs-12 col-sm-12 col-md-12 col-lg-12">08-29</span>
                            <span class="viewpoint-page2-date-year col-xs-12 col-sm-12 col-md-12 col-lg-12">2017</span>
                            <span class="viewpoint-page2-date-day col-xs-12 col-sm-12 col-md-12 col-lg-12">&gt</span>
                        </div>
                    </div>
                </div> --}}

            </div>

            {{-- <div class="viewpoint-page2-m-box"></div> --}}
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
                        <div class="qrcode"><img src="image/code.jpg"/></div>
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
