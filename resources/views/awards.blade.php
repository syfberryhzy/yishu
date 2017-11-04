<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="shortcut icon"type="image/x-icon" href="images/banner/layer6.png"media="screen" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/common.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/winning_records.css" type="text/css" media="screen"/>
    <title>获奖记录</title>
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
    <div class="winning-records-page">
        <div class="win-page2-sj">
            <div class="win-page2-contain">
                <div class="block-title">
                    <h1>获奖说明</h1>
                    <hr class="center-block home-hr"/>
                    <h4>获得红点奖，IF奖，世界之星包装奖等一系列国内外大奖</h4>
                </div>
                <div class="win-points">
                    <div class="win-points-inner">
                        <div class="win-points-img">
                            <img src="storage/{{$post['image']}}"/>
                        </div>
                        <div class="win-points-list">
                          {!!$post['body']!!}
                            {{-- <ul>
                                <li>囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。</li>
                                <li>获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。</li>
                                <li>获得6项世界之星包装奖（联合国世界包装组织）</li>
                                <li>公司成员获得设计人才的国家级奖项： 2016中国光华龙腾提名奖设计业10大杰出青年（国家科技奖励办公室）</li>
                                <li>获得中国包装科学技术奖,公司骨干入选国家双创人才计划重点人才库。<br>获得国家专利20多项……</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>

                <div style="position: relative;" class="win-page2-contain-section row">
                    <!--第1行-->
                    {{-- <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-page2-contain-section-winner-img1"
                                 style="align-items: center;margin: auto"></div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                REDDOT<br>
                                德国红点设计奖<br>
                                传达设计大奖<br>
                                2010<br>
                            </div>
                        </div>

                    </div> --}}
                    @foreach ($datas as $key => $val)
                      <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                              <div class="win-page2-contain-section-winner-img-team win-imgs-1-2"
                                   style="align-items: center;margin: auto;background:url('/storage/{{$val['image']}}') no-repeat;"></div>
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

                    {{-- <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-1-2"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                CREATIVE DESIGN OF CHINA PACKKAGE<br>
                                中国包装创意设计大赛<br>
                                金奖<br>
                                2012<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-1-3"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                CREATIVE DESIGN OF CHINA PACKKAGE<br>
                                中国包装创意设计大赛<br>
                                专业组一等奖<br>
                                2014<br>
                            </div>
                        </div>
                    </div>
                    <!--第2行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-2-1"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                CHINA STAR DESIGN<br>
                                中国之星设计奖暨中国包装设计奖<br>
                                银奖<br>
                                2015<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-2-2"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                IF德国IF概念设计奖<br>
                                IF奖<br>
                                2015<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-2-3"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                WORLD STAR FOR PACKAGING<br>
                                世界包装之星<br>
                                主席奖<br>
                                2015<br>
                            </div>
                        </div>
                    </div>
                    <!--第3行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-3-1"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                光华龙腾奖 中国设计业<br>
                                十大杰出青年<br>
                                2016<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-3-2"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                DESIGN INTELLIGNC<br>
                                中国设计智造大奖<br>
                                2016<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-3-3"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                设计专利1<br>
                            </div>
                        </div>
                    </div>
                    <!--第4行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-4-1"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                设计专利2<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-4-2"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                设计专利3<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-4-3"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                设计专利4<br>
                            </div>
                        </div>
                    </div>
                    <!--第5行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-5-1"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                设计专利5<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-5-2"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                设计专利6<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-img-team win-imgs-5-3"
                                 style="align-items: center;margin: auto"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                CHINA STAR<br>
                                中国之星设计艺术大奖<br>
                                最佳设计奖<br>
                                2005<br>
                            </div>
                        </div>
                    </div>
                    <!--第6行-->
                    <div class="win-page2-contain-section-winner  col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team2 win-imgs-6-1" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                包装设计新星奖<br>
                                2003<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner  col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team2 win-imgs-6-2" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                包装设计新星奖<br>
                                2003<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner  col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team2 win-imgs-6-3" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                包装设计新星奖<br>
                                2003<br>
                            </div>
                        </div>
                    </div>
                    <!--第7行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-7-1" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                中南星奖 银奖<br>
                                2003<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner  col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-7-2" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                创新顺德国际工业设计大赛<br>
                                银奖<br>
                                2009<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner  col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-7-3" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                CHINA STAR DESIGN<br>
                                中国之星设计奖<br>
                                中国包装设计奖<br>
                                银奖<br>
                                2015<br>
                            </div>
                        </div>
                    </div>
                    <!--第8行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-8-1" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                WOELDSTAR FOR PACKAGINC<br>
                                世界包装之星<br>
                                最高奖 中国首个主席奖<br>
                                2015<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-8-2" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                WOELDSTAR FOR PACKAGINC<br>
                                世界包装之星<br>
                                最高奖 主席奖<br>
                                2015<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-8-3" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                WOELDSTAR FOR PACKAGINC<br>
                                世界包装之星<br>
                                最高奖 主席奖<br>
                                2015<br>
                            </div>
                        </div>
                    </div>
                    <!--第9行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-9-1" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                第二届<br>
                                楚天工业设计大赛<br>
                                三等奖<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-9-2" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                第五届<br>
                                安华杯中国包装品牌与创新大赛<br>
                                原创力奖<br>
                            </div>
                        </div>
                    </div>
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-9-3" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                第五届<br>
                                安华杯中国包装品牌与创新大赛<br>
                                银奖<br>
                            </div>
                        </div>
                    </div>
                    <!--第10行-->
                    <div class="win-page2-contain-section-winner col-xs-6 col-sm-4 col-md-4 col-lg-4">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-img-team3 win-imgs-10-1" style="align-items: center;"></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex">
                            <div class="win-page2-contain-section-winner-text" style="align-items: center;margin: auto">
                                华东大赛<br>
                                金奖<br>
                            </div>
                        </div>
                    </div>
                </div> --}}

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
<script src="js/move.js"></script>
<script src="js/main.js"></script>
<script>
    otherNav();
</script>
</body>
</html>
