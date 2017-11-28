<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>一树设计 官网</title>
    <meta name="keywords" content="一树设计，杭州包装设计，企业品牌形象设计，文化创意开发，产品包装设计，纸盒包装创意设计，杭州包装设计公司，logo设计，平面海报设计，UI设计，设计公司，企业品牌形象上设计，品牌策划设计，杭州品牌策划设计公司，杭州文化创意公司，文化创意设计，创意设计">
    <meta name="description" content="一树设计，全国领先的设计公司，致力于为广大用户提供专业、完善的包装设计/企业品牌形象设计,及文创产品开发等服务。">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="css/jquery.fullPage.css">-->
    <link rel="stylesheet" href="css/common.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/index.css" type="text/css" media="screen"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <script src="js/jquery.js"></script>
    <!--    <script src="js/jquery-ui.min.js"></script>
            <script src="js/jquery.fullPage.min.js"></script>
            &lt;!&ndash; 如果 scrollOverflow 设置为 true，则需要引入 jquery.slimscroll.min.js，一般情况下不需要 &ndash;&gt;
            <script src="js/jquery.slimscroll.min.js"></script>-->
    <script src="js/parallax.js"></script>

    <script src="js/main.js"></script>
    <style>
        .login-con > li > div > a :hover{
            cursor: pointer;
            background-color: red;
        }
    </style>
<body>
<div id="h5">
    <div class="page section1 section" id="page-1" style="position: relative">
        <div id="intro">
            <div class="greeting">
                <div class="home-page1-test"></div>
                <img src="image/banner/layer6.png" class="greeting-icon">
            </div>
            <div id="scene-container">
                <ul id="scene">
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-01">
                            <img src="image/banner/layer1.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-02">
                            <img src="image/banner/layer2.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-03">
                            <img src="image/banner/layer3.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-04">
                            <img src="image/banner/layer4.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-05">
                            <img src="image/banner/layer11.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-07">
                            <img src="image/banner/layer12.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-08">
                            <img src="image/banner/layer8.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-09">
                            <img src="image/banner/layer9.png">
                        </div>
                    </li>
                    <li class="layer" data-depth="1.50">
                        <div class="shapes-10">
                            <img src="image/banner/layer10.png">
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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
    <div class="page section2 section home-page2-section" id="page-2">
        <div class="home-design">
            <div class="block-title">
                <h1>服务架构</h1>
                <hr class="center-block home-hr"/>
                <h4>你需要的，由我们为你量身打造</h4>
            </div>
            <div class="home-design-content block-content clearfix">
                <div class="item">
                    <div class="item-title">
                        <img src="image/brand_design_b.png"/>
                        <div class="item-title-subtitle">品牌视觉设计</div>
                        <div class="item-title-subtitle-en">VI Design</div>
                    </div>
                    <div class="item-content">
                        Visual Identity（视觉识别系统），这是一个国际全新的设计理念，包括图形（LOGO）设计，专用字体，标准色彩等。设计到位、实施科学的视觉识别系统，是传播企业经营理念、建立企业知名度、塑造企业形象的快速便捷之途。企业通过VI设计，对内可以征得员工的认同感，归属感，加强企业凝聚力，对外可以树立企业的整体形象。
                    </div>
                </div>
                <div class="item">
                    <div class="item-title">
                        <img src="image/package_design_b.png"/>
                        <div class="item-title-subtitle">包装</div>
                        <div class="item-title-subtitle-en">Package</div>
                    </div>
                    <div class="item-content">
                        我们通过大量市场调查，为您的产品找寻最恰当的市场定位。并且通过市场定位和您的企业形象，重新设计产品包装，为您的产品实现进一步的价值提升。我们以一树纸业作为依托，从原纸到成品包装，从头到尾为您定制一站式服务。我们不做华而不实的图片，我们只做功能与美观兼备的包装，从而助力您的企业发展。
                    </div>
                </div>
                <div class="item">
                    <div class="item-title">
                        <img src="image/Cultural_Creativity_b.png"/>
                        <div class="item-title-subtitle">文化创意产品</div>
                        <div class="item-title-subtitle-en">Cultural & Creative Products</div>
                    </div>
                    <div class="item-content">
                        我们拥有独具风格的文创品牌，以文化为元素，利用不同载体呈现出再造与创新的文化产品。如文具、纪念品、创意礼品、贺卡海报等。我们天马行空，发挥极致的创造力，决心要为“沉闷”已久的市场，注入年轻活力的设计。
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 第二屏结束 -->
    <!-- 第三屏 -->
    <div class="home-page2-flex page section3 section index-section3 home-page3-section " id="page-3">
        <div class="home-about">
            <div class="block-title">
                <h1><a style="color: #333" href="{{route('abouts')}}">关于一树</a></h1>
                <hr class="center-block home-hr"/>
                <h4>我们年轻活力，我们专业认真</h4>
            </div>
            <div class="home-about-content clearfix">
                <div class="item-image">
                    <img src="image/company.jpg" class="home-about-item-image-pc">
                    <img src="image/company-mobile.jpg" class="home-about-item-image-mobile">
                </div>
                <div class="item-desc">
                    <div class="item-desc-logo">
                      <h3>ISU DESIGN</h3>
                      <h4>品<span class="point">·</span>牌<span class="point">·</span>故<span class="point">·</span>事</h4>
                      <img src="image/line.png"/>
                    </div>
                    <div class="item-desc-content">
                      <p>
                        一树设计是一树纸业集团旗下的专业设计公司，主营专业设计服务，包装设计，企业品牌形象设计以及文创产品开发。我们的团队由业内知名设计总监带领，所有设计师均经过层层选拔。公司在前期工作室阶段完成商业项目百余项，并且取得了一系列重要成果：
                      </p>
                      <p>
                        囊括世界3大设计奖:德国if、红点、美国IDEA设计奖以及一系列国内外权威奖项。<br/>
                        获得联合国世界包装组织世界之星包装奖国内目前唯一主席大奖（每年全球3名）。<br/>
                        获得6项世界之星包装奖（联合国世界包装组织）<br/><br/>
                        公司成员获得设计人才的国家级奖项： 2016中国光华龙腾提名奖设计业10大杰出青年（国家科技奖励办公室）
                        获得中国包装科学技术奖,公司骨干入选国家双创人才计划重点人才库。<br/>
                        获得国家专利20多项。
                      </p>
                      <p>
                        我们是个充满活力的，完全由“设计强迫症”“完美主义者”组建而成的年轻团队。年轻绝对不代表我们不专业，正因为年轻，我们更不敢懈怠，您的每一次设计，我们都会作为我们最好的宣传案例，全力以赴。
                      </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- 第三屏结束 -->
    <!-- 第四屏 -->
    <div class="page section4 section" id="page-4">
        <div class="home-page4-sj">
            <div class="container home-page4-bottom home-page4-bottom-bt" style="position:relative;">
                <h1 class="text-center home-page2-big-title"><a style="color: #333" href="{{route('case')}}">案例介绍</a></h1>
                <hr class="center-block home-hr"/>
                <h4 class="text-center home-page2-big-title-txt">每位伙伴，我们都用百分百的诚意来服务</h4>
            </div>
            <div class="container home-page4-imgbox " style="position:relative;">

                <div class="home-page4-pc home-page4-pc1 col-xs-12 col-sm-5 col-md-5 col-lg-5 hiden">
                    <div class="imga home-page4-img1-box " id="img_box1">
                        <div class="home-page4-img1 " id="home_page4_img1"></div>
                        <div class="alta home-page4-bac1 home-page4-bac-item home-page4-img1-box"></div>
                        <div id="home_page4_img1_alt" class="alta home-page4-img-alt home-page4-img1-box ">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="home-page4-pc col-xs-12 col-sm-7 col-md-7 col-lg-7 hiden">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 home-page4-pc2">
                        <div class="home-page4-img2-box imga" id="img_box2">
                            <div class="home-page4-img2" id="home_page4_img2"></div>
                            <div class="alta home-page4-bac2 home-page4-bac-item home-page4-img2-alt home-page4-img2-box"></div>
                            <div id="home_page4_img2_alt"
                                 class="alta home-page4-img2-alt home-page4-img-alt home-page4-img2-box">
                                <p>
                                    我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 home-page4-pc3">
                        <div class="home-page4-img3-box imga" id="img_box3">
                            <div class="home-page4-img3" id="home_page4_img3"></div>
                            <div class="alta home-page4-bac-item home-page4-bac3 home-page4-img3-box-bt">
                            </div>
                            <div id="home_page4_img3_alt" class="alta home-page4-img-alt home-page4-img3-box-bt">
                                <p>
                                    我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 home-page4-pc4">
                        <div id="img_box4" class="imga home-page4-img4-box">
                            <div class="home-page4-img4" id="home_page4_img4"></div>
                            <div class="alta home-page4-img4-alt home-page4-bac-item home-page4-bac4 home-page4-img4-box">
                            </div>
                            <div id="home_page4_img4_alt"
                                 class="alta home-page4-img4-alt home-page4-img-alt home-page4-img4-box hiden">
                                <p>
                                    我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="home-page4-pc home-page4-pc5 col-xs-12 col-sm-12 col-md-12 col-lg-12 hiden">

                    <div class="imga home-page4-section4-child-img-size home-page4-bottomimg-item img5-par"
                         id="img_box5">
                        <div class="home-page4-section4-child-img-size home-page4-img5" id="home_page4_img5"></div>

                        <div class="alta home-page4-img5-alt home-page4-bac-item home-page4-bac5">
                        </div>
                        <div id="home_page4_img5_alt" class="alta home-page4-img-alt home-page4-img5-alt">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                    <div class="imga home-page4-section4-child-img-size home-page4-bottomimg-item" id="img_box6">
                        <div class="home-page4-section4-child-img-size home-page4-img6" id="home_page4_img6"></div>
                        <div class="alta home-page4-img5-alt home-page4-bac-item home-page4-bac6">
                        </div>
                        <div id="home_page4_img6_alt" class="alta home-page4-img-alt home-page4-img5-alt">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                    <div class="imga home-page4-section4-child-img-size home-page4-bottomimg-item" id="img_box7">
                        <div class="home-page4-section4-child-img-size home-page4-img7" id="home_page4_img7"></div>
                        <div class="alta home-page4-img5-alt home-page4-bac-item home-page4-bac7">
                        </div>
                        <div id="home_page4_img7_alt" class="alta home-page4-img-alt home-page4-img5-alt">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>
                    <div class="imga home-page4-section4-child-img-size home-page4-bottomimg-item" id="img_box8">
                        <div class="home-page4-section4-child-img-size home-page4-img8" id="home_page4_img8"></div>
                        <div class="alta home-page4-img5-alt home-page4-bac-item home-page4-bac8">
                        </div>
                        <div id="home_page4_img8_alt" class="alta home-page4-img-alt home-page4-img5-alt">
                            <p>
                                我们年轻活力，我们专业认真.每位伙伴，我们都用百分百的诚意来服务.</p>
                        </div>
                    </div>

                </div>

                <div class="home-page4-mobile">
                    <div id="home_page4_now"></div>
                    <div id="home_page4_left"></div>
                    <div id="home_page4_right"></div>
                </div>

            </div>
        </div>
        <div style="width:100%; height:286px;"></div>
        <div class="home-page4-btn-box">
            <div class="home-page4-btn2-write mobile-btn hiden" id="home_page4_btn2"></div>
            <div class="home-page4-btn1-write mobile-btn hiden" id="home_page4_btn1"></div>
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

    <!-- 第四屏结束 -->
</div>
<script src="js/move.js"></script>
<script src="js/main.js"></script>
<script>
    $(function () {
        homeNav();
        homeParallax();
        /*homeFullpage();*/
        //第四屏动效
        mobileBtn();
        //第二屏轮播动效
        carousel2();
        //第四屏
        carousel4();
        /*轮播图按钮动效*/
        function homeCarouselHover(btnId, write, blue) {
            $(btnId).on('mouseenter', function () {
                $(btnId).removeClass(write).addClass(blue)
            }).on('mouseleave', function () {
                $(btnId).removeClass(blue).addClass(write)
            })
        }

        homeCarouselHover('#home_btn1', 'home-page2-btn1-write', 'home-page2-btn1-blue');
        homeCarouselHover('#home_btn2', 'home-page2-btn2-write', 'home-page2-btn2-blue');
        homeCarouselHover('#home_page4_btn1', 'home-page4-btn1-write', 'home-page4-btn1-blue');
        homeCarouselHover('#home_page4_btn2', 'home-page4-btn2-write', 'home-page4-btn2-blue');

        homePage4Hover('#img_box1', '#home_page4_img1', '.home-page4-bac1', '#home_page4_img1_alt');
        homePage4Hover('#img_box2', '#home_page4_img2', '.home-page4-bac2', '#home_page4_img2_alt');
        homePage4Hover('#img_box3', '#home_page4_img3', '.home-page4-bac3', '#home_page4_img3_alt');
        homePage4Hover('#img_box4', '#home_page4_img4', '.home-page4-bac4', '#home_page4_img4_alt');
        homePage4Hover('#img_box5', '#home_page4_img5', '.home-page4-bac5', '#home_page4_img5_alt');
        homePage4Hover('#img_box6', '#home_page4_img6', '.home-page4-bac6', '#home_page4_img6_alt');
        homePage4Hover('#img_box7', '#home_page4_img7', '.home-page4-bac7', '#home_page4_img7_alt');
        homePage4Hover('#img_box8', '#home_page4_img8', '.home-page4-bac8', '#home_page4_img8_alt');
    });
</script>
</body>
</html>
