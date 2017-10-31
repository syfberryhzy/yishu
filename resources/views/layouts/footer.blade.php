<div style="width:100%; height:200px;"></div>
<div class="cont-box container">
    <div class="cont-logo-box col-xs-12 col-sm-12 col-md-12">
        <div class="cont-logo"></div>
    </div>
    <div class="cont-list-box col-xs-12 col-sm-12 col-md-12 col-lg-7">
        <div><a href="{{route('home')}}">首页</a></div>
        <div><a href="{{route('case')}}">案例</a></div>
        <div><a href="{{route('awards')}}">获奖记录</a></div>
        <div><a href="{{route('abouts')}}">关于一树</a></div>
        <div><a href="{{route('news')}}">观点咨询</a></div>
        <div><a href="{{route('contact')}}">联系我们</a></div>

    </div>

    <div class="cont-info-box col-xs-12 col-sm-12 col-md-12 col-lg-5">

        <div class="cont-img-box">
          @if ($config['qrcode'])
            <div class="cont-img" style="background:url(storage/{{ $config['qrcode']}}) no-repeat;"></div>
          @else
            <div class="cont-img"></div>
          @endif
        </div>

        <div class="cont-text-box">
            <div class="cont-text">
                <div>电话: {{$config['phone']}}</div>
                <div>邮箱:{{$config['email']}}</div>
                <div>地址: {{$config['address']}}</div>
            </div>

        </div>
    </div>

</div>
<div class="cont-number col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="span-box-par col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="span-box">
            <span>© 2000-2017 DXY All rights reserved.</span>
            <span>浙ICP备15034012号-2</span>
            <span>浙公网安备 33010802005190号</span>
        </div>
    </div>

</div>
{{-- ----- --}}
</div>
<!-- 第四屏结束 -->
</div>
<script>
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
    parallax.calibrate(false, false);
    parallax.invert(false, false);
    parallax.limit(false, false);
    parallax.scalar(5, 8);
    parallax.friction(1, 1);
    parallax.origin(1, 0.5);
</script>
<script src="js/main.js"></script>
<script src="js/move.js"></script>
<!--<script src="js/jquery.slimscroll.min.js"></script>-->
<!--<script src="js/jquery.fullPage.js"></script>-->
<script>
    $(function () {
        <!--第二屏动画js-->
        magnify();
        <!--不加滚屏的第三屏动画-->
        roll();
        <!--滚屏插件中的第三屏动画js-->
        /*homeFullpage();*/
        <!--第四屏动画js-->
        {
            fadeInOrOut1('#home_page4_img1_alt');
            fadeInOrOut('#home_page4_img2', '#home_page4_img2_alt');
            fadeInOrOut('#home_page4_img3', '#home_page4_img3_alt');
            fadeInOrOut('#home_page4_img4', '#home_page4_img4_alt');
            fadeInOrOut('#home_page4_img5', '#home_page4_img5_alt');
            fadeInOrOut('#home_page4_img6', '#home_page4_img6_alt');
            fadeInOrOut('#home_page4_img7', '#home_page4_img7_alt');
            fadeInOrOut('#home_page4_img8', '#home_page4_img8_alt');
        }
    });
    
</script>
