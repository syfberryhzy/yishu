<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
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
    <title>Home</title>
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
    <div class="page section2 section home-page2-section" id="page-2">
        <div class="home-design">
            <div class="block-title">
                <h1>Custom design belongs to you</h1>
                <hr class="center-block home-hr"/>
                <h4>You need, tailored by us for you</h4>
            </div>
            <div class="home-design-content block-content clearfix">
                <div class="item">
                    <div class="item-title">
                        <img src="image/brand_design_b.png"/>
                        <div class="item-title-subtitle">品牌设计</div>
                        <div class="item-title-subtitle-en">Brand Design</div>
                    </div>
                    <div class="item-content">
                        isua Identity (visual recognition system), which is a new international design concept, including the logo (LOGO) design, special fonts, standard color and so on. Design in place, the implementation of a scientific visual identification system, is to spread business philosophy, establish business reputation, create a corporate image of fast and easy way. VI through the design of enterprises, the internal staff can get the recognition, sense of belonging, strengthen cohesion, foreign companies can establish the overall image.
                    </div>
                </div>
                <div class="item">
                    <div class="item-title">
                        <img src="image/package_design_b.png"/>
                        <div class="item-title-subtitle">包装设计</div>
                        <div class="item-title-subtitle-en">Package Design</div>
                    </div>
                    <div class="item-content">
                      isua Identity (visual recognition system), which is a new international design concept, including the logo (LOGO) design, special fonts, standard color and so on. Design in place, the implementation of a scientific visual identification system, is to spread business philosophy, establish business reputation, create a corporate image of fast and easy way. VI through the design of enterprises, the internal staff can get the recognition, sense of belonging, strengthen cohesion, foreign companies can establish the overall image.
                    </div>
                </div>
                <div class="item">
                    <div class="item-title">
                        <img src="image/Cultural_Creativity_b.png"/>
                        <div class="item-title-subtitle">文化创意</div>
                        <div class="item-title-subtitle-en">Cultural Creativity</div>
                    </div>
                    <div class="item-content">
                        isua Identity (visual recognition system), which is a new international design concept, including the logo (LOGO) design, special fonts, standard color and so on. Design in place, the implementation of a scientific visual identification system, is to spread business philosophy, establish business reputation, create a corporate image of fast and easy way. VI through the design of enterprises, the internal staff can get the recognition, sense of belonging, strengthen cohesion, foreign companies can establish the overall image.
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
                <h1><a style="color: #333" href="./with_yishu.html">About ISU</a></h1>
                <hr class="center-block home-hr"/>
                <h4>We are young and energetic, we are professional and serious</h4>
            </div>
            <div class="home-about-content clearfix">
                <div class="item-image">
                    <img src="image/company.jpg" class="home-about-item-image-pc">
                    <img src="image/company-mobile.jpg" class="home-about-item-image-mobile">
                </div>
                <div class="item-desc">
                    <div class="item-desc-logo"><img src="image/about-logo.png"></div>
                    <div class="item-desc-content" style="height: 500px;overflow: scroll;">
                        <p>
                          ISU design ISU Paper Group's professional design company, specializing in professional design services, packaging design, corporate brand image design and cultural and creative product development. Our team is led by a well-known design director in the industry and all designers are selected by layers. A series of important achievements have been made:</p>
                        <p>Including the world's three major design awards: Germany if, red dot, the United States IDEA Design Award and a series of domestic and foreign authority awards.<br>
                            Won the World Organization for Packaging Star Wrapping Award The only Chairman of the current domestic awards (three global each year).<br>
                            Won six world star packaging award.<br>
                            Won more than 20 national patents.<br>
                            China 2016 Guanghua Dragon Award design industry 10 outstanding young nominees (20 in the country, approved by the National Award Office, Lu Yongxiang personally presented).<br>
                            Access to provincial and ministerial packaging science and technology award, selected for the Ministry of education, Ministry of finance double hit talent plan national key talent pool member.</p>
                        <p>
                            We are a young, energetic young team composed solely of "obsessive-compulsive disorder" and "perfectionist". Young absolutely does not mean that we are not professional, because of young, we are more afraid to slacken, your every design, we will be our best case of propaganda, go all out.</p>
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
                <h1 class="text-center home-page2-big-title"><a style="color: #333" href="./example.html">Cases</a></h1>
                <hr class="center-block home-hr"/>
                <h4 class="text-center home-page2-big-title-txt">Every partner, we all use 100% sincerity to serve</h4>
            </div>
            <div class="container home-page4-imgbox " style="position:relative;">

                <div class="home-page4-pc home-page4-pc1 col-xs-12 col-sm-5 col-md-5 col-lg-5 hiden">
                    <div class="imga home-page4-img1-box " id="img_box1">
                        <div class="home-page4-img1 " id="home_page4_img1"></div>
                        <div class="alta home-page4-bac1 home-page4-bac-item home-page4-img1-box"></div>
                        <div id="home_page4_img1_alt" class="alta home-page4-img-alt home-page4-img1-box ">
                            <p>
                                We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.
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
                                    We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.</p>
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
                                    We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.</p>
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
                                    We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.</p>
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
                                We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.</p>
                        </div>
                    </div>
                    <div class="imga home-page4-section4-child-img-size home-page4-bottomimg-item" id="img_box6">
                        <div class="home-page4-section4-child-img-size home-page4-img6" id="home_page4_img6"></div>
                        <div class="alta home-page4-img5-alt home-page4-bac-item home-page4-bac6">
                        </div>
                        <div id="home_page4_img6_alt" class="alta home-page4-img-alt home-page4-img5-alt">
                            <p>
                                We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.</p>
                        </div>
                    </div>
                    <div class="imga home-page4-section4-child-img-size home-page4-bottomimg-item" id="img_box7">
                        <div class="home-page4-section4-child-img-size home-page4-img7" id="home_page4_img7"></div>
                        <div class="alta home-page4-img5-alt home-page4-bac-item home-page4-bac7">
                        </div>
                        <div id="home_page4_img7_alt" class="alta home-page4-img-alt home-page4-img5-alt">
                            <p>
                                We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.</p>
                        </div>
                    </div>
                    <div class="imga home-page4-section4-child-img-size home-page4-bottomimg-item" id="img_box8">
                        <div class="home-page4-section4-child-img-size home-page4-img8" id="home_page4_img8"></div>
                        <div class="alta home-page4-img5-alt home-page4-bac-item home-page4-bac8">
                        </div>
                        <div id="home_page4_img8_alt" class="alta home-page4-img-alt home-page4-img5-alt">
                            <p>
                                We are young and energetic, we are professional and serious.Each partner, we are 100% sincerity to serve.</p>
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
