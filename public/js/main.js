/**
 * Created by Administrator on 2017/9/27.
 */
//第一屏导航栏显示or隐藏star
$(function () {
    (function () {
        //顶部导航动画star
        $(window).scroll(function () {
            if ($(document).scrollTop() == 0) {
                $(".fixed-nav1").removeClass('fix-header');
            } else {
                $(".fixed-nav1").addClass('fix-header');
            }
        });
        //顶部导航动画end
    })();
});
//第一屏导航栏显示or隐藏end


//首页菜单特效star
function homeNav() {
    $('.close').on('click', function () {
        $('#paga1_nav').stop(true);
        $('.logo-a').stop(true);
        $('#intro').stop(true);
        var key = $('#intro')[0].style.opacity;
        if (key == '' || key == 1) {
            $('.open').animate({
                opacity: 0
            }, 100, function () {
                $('.close').animate({
                    opacity: 0.5
                },100);
            });
            $('.logo-a').animate({
                opacity: 0
            }, 1000);
            $('#intro').animate({
                opacity: 0.7
            }, 1000);
            $('#paga1_nav').removeClass('hiden');
            $('#paga1_nav').animate({
                opacity: 0.8
            }, 1000)
        } else {

            $('.close').animate({
                opacity: 0
            }, 100, function () {
                $('.open').animate({
                    opacity: 1
                }, 100);
            });

            $('.logo-a').animate({
                opacity: 1
            }, 1000);

            $('#intro').animate({
                opacity: 1
            }, 1000);

            $('#paga1_nav').animate({
                opacity: 0
            }, 1000, function () {
                $('#paga1_nav').addClass('hiden');
            });
        }
    });
    $('#paga1_nav').on('click', function () {
        $('#paga1_nav').stop(true);
        $('.logo-a').stop(true);
        $('#intro').stop(true);
        var key = $('#intro')[0].style.opacity;
        if (key == '') {
            return;
        } else if (key == 1) {
            return;
        } else {
            $('.close').animate({
                opacity: 0
            }, 100, function () {
                $('.open').animate({
                    opacity: 1
                }, 100);
            });
            $('.logo-a').animate({
                opacity: 1
            }, 1000);
            $('#nav').animate({
                opacity: 1
            }, 1000);
            $('#intro').animate({
                opacity: 1
            }, 1000);
            $('#paga1_nav').animate({
                opacity: 0
            }, 1000, function () {
                $('#paga1_nav').addClass('hiden');
            });
        }
    });
}
//首页菜单特效end

//除首页外其它页面菜单特效star
function otherNav() {
    $('.close').on('click', function () {
        $('#paga1_nav').stop(true);
        $('.logo-a').stop(true);
        $('.inner-banner').stop(true);
        var key = $('.inner-banner')[0].style.opacity;
        if (key == '' || key == 1) {
            $('.open').animate({
                opacity: 0
            }, 100, function () {
                $('.close').animate({
                    opacity: 0.5
                },100);
            });
            $('.logo-a').animate({
                opacity: 0
            }, 1000);
            $('.inner-banner').animate({
                opacity: 0.7
            }, 1000);
            $('#paga1_nav').removeClass('hiden');
            $('#paga1_nav').animate({
                opacity: 0.8
            }, 1000)
        } else {
            $('.close').animate({
                opacity: 0
            }, 100, function () {
                $('.open').animate({
                    opacity: 1
                }, 100);
            });
            $('.logo-a').animate({
                opacity: 1
            }, 1000);

            $('.inner-banner').animate({
                opacity: 1
            }, 1000);

            $('#paga1_nav').animate({
                opacity: 0
            }, 1000, function () {
                $('#paga1_nav').addClass('hiden');
            });
        }
    });
    $('#paga1_nav').on('click', function () {
        $('#paga1_nav').stop(true);
        $('.logo-a').stop(true);
        $('.inner-banner').stop(true);
        var key = $('.inner-banner')[0].style.opacity;
        if (key == '') {
            return;
        } else if (key == 1) {
            return;
        } else {
            $('.close').animate({
                opacity: 0
            }, 100, function () {
                $('.open').animate({
                    opacity: 1
                }, 100);
            });
            $('.logo-a').animate({
                opacity: 1
            }, 1000);
            $('#nav').animate({
                opacity: 1
            }, 1000);
            $('.inner-banner').animate({
                opacity: 1
            }, 1000);
            $('#paga1_nav').animate({
                opacity: 0
            }, 1000, function () {
                $('#paga1_nav').addClass('hiden');
            });
        }
    });
}
//除首页外其它页面菜单特效end

//首页去掉设计稿尺寸的类
$(function () {
    (function () {
        var cw = document.documentElement.clientWidth;
        if (cw <= 1300) {
            $('.home-page3-left-img').removeClass('home-page3-left-img-sj');
            $('.home-page4-txt2').removeClass('home-page3-right-content-box');
            $('.home-page2-center').removeClass('index-section3-son');
            $('.home-page3-left-img-box').removeClass('home-page3-left-img-box-sj');
            $('.home-page3-right-content').removeClass('home-page3-right-content-sj');
            $('.section2-box').addClass('container').removeClass('home-page2-header-content3');
            $('.home-page3-sj').addClass('container');
        }
        $(window).on('resize', function () {
            var cw = document.documentElement.clientWidth;
            if (cw <= 1300) {
                $('.home-page3-left-img').removeClass('home-page3-left-img-sj');
                $('.home-page4-txt2').removeClass('home-page3-right-content-box');
                $('.home-page2-center').removeClass('index-section3-son');
                $('.home-page3-left-img-box').removeClass('home-page3-left-img-box-sj');
                $('.home-page3-right-content').removeClass('home-page3-right-content-sj');
                $('.section2-box').addClass('container').removeClass('home-page2-header-content3');
                $('.home-page3-sj').addClass('container');
            } else {
                $('.home-page3-left-img').addClass('home-page3-left-img-sj');
                $('.home-page4-txt2').addClass('home-page3-right-content-box');
                $('.home-page2-center').addClass('index-section3-son');
                $('.home-page3-left-img-box').addClass('home-page3-left-img-box-sj');
                $('.home-page3-right-content').addClass('home-page3-right-content-sj');
                $('.section2-box').removeClass('container').addClass('home-page2-header-content3');
                $('.home-page3-sj').removeClass('container');
            }
        });
    })()
});
//菜单效果
$(function () {
    var mt = $('.login-con > li').width() * .05 + 'px';
    $('.login-con > li >div').on('mouseenter', function () {
        move(this)
            .scale(1.2)
            .end();
        move(this)
            .set('margin-top', mt)
            .end();
    }).on('mouseleave', function () {
        move(this)
            .scale(1)
            .end();
        move(this)
            .set('margin-top', '0px')
            .end();
    });
    $('.login-con > li >div').trigger('mouseenter').trigger('mouseleave');
});

//底部导航-start
$(function () {
    var cw = document.documentElement.clientWidth;
    if (cw <= 768) {
        $('.span-box-nomal').addClass('hiden');
        $('.home-bt-span-box').removeClass('hiden');
    } else {
        $('.span-box-nomal').removeClass('hiden');
        $('.home-bt-span-box').addClass('hiden');
    }
    if (cw < 412) {
        $('.cont-list-box').addClass('hiden');
        $('.home-bt-cont-list-box').removeClass('hiden');
    } else {
        $('.cont-list-box').removeClass('hiden');
        $('.home-bt-cont-list-box').addClass('hiden');
    }
    $(window).on('resize', function () {
        var cw = document.documentElement.clientWidth;
        if (cw < 412) {
            $('.cont-list-box').addClass('hiden');
            $('.home-bt-cont-list-box').removeClass('hiden');
        } else {
            $('.cont-list-box').removeClass('hiden');
            $('.home-bt-cont-list-box').addClass('hiden');
        }
        if (cw <= 768) {
            $('.span-box-nomal').addClass('hiden');
            $('.home-bt-span-box').removeClass('hiden');
        } else {
            $('.span-box-nomal').removeClass('hiden');
            $('.home-bt-span-box').addClass('hiden');
        }
    });

});
//底部导航-end

//首页动画-start
function homeParallax() {
    var scene = document.getElementById('scene');
    var parallax = new Parallax(scene);
    parallax.calibrate(false, false);
    parallax.invert(false, false);
    parallax.limit(false, false);
    parallax.scalar(5, 8);
    parallax.friction(1, 1);
    parallax.origin(1, 0.5);
}
function carousel2() {
    var cw = document.documentElement.clientWidth;
    /*    var homePage2Ele = [
     0,
     $('.home-brand-box-par'),
     $('.home-package-box-par'),
     $('.home-cultural-box-par')];

     if (cw < 992) {
     $('.home-page2-header-content').removeClass('home-page2-header-content2')
     }*/

    if (cw <= 768) {
        $('.home-page4-txt1').removeClass('hiden');
        $('.home-page4-txt2').addClass('hiden');
        /*        $('#home_page2_pc').addClass('hiden');
         $('#home_page2_mobile').removeClass('hiden');
         $('#now').html(homePage2Ele[1]);
         $('#left').html(homePage2Ele[3]);
         $('#right').html(homePage2Ele[2]);*/
    } else {
        /*        $('#home_page2_pc').removeClass('hiden');
         $('#home_page2_mobile').addClass('hiden');*/
    }


    $(window).on('resize', function () {
        var cw = document.documentElement.clientWidth;

        /*        if (cw < 992) {
         $('.home-page2-header-content').removeClass('home-page2-header-content2');
         } else {
         $('.home-page2-header-content').addClass('home-page2-header-content2');
         }*/

        if (cw <= 768) {
            $('.home-page4-txt1').removeClass('hiden');
            $('.home-page4-txt2').addClass('hiden');
            /*            $('#home_page2_pc').addClass('hiden');
             $('#home_page2_mobile').removeClass('hiden');
             $('#now').html(homePage2Ele[1]);
             $('#left').html(homePage2Ele[3]);
             $('#right').html(homePage2Ele[2]);*/
        } else {

            /*            $('#home_page2_pc').removeClass('hiden');
             $('#home_page2_mobile').addClass('hiden');
             $('.home-page2-pc1').html(homePage2Ele[1][0]);
             $('.home-page2-pc2').html(homePage2Ele[2]);
             $('.home-page2-pc3').html(homePage2Ele[3]);*/
            $('.home-page4-txt1').addClass('hiden');
            $('.home-page4-txt2').removeClass('hiden');
        }
    });
}
function carousel4() {
    var cw = document.documentElement.clientWidth;
    var homePage4Ele = [
        0,
        $("#img_box1"),
        $('#img_box2'),
        $('#img_box3'),
        $('#img_box4'),
        $('#img_box5'),
        $('#img_box6'),
        $('#img_box7'),
        $('#img_box8')];

    if (cw <= 768) {
        $('#page-3').removeClass('home-page2-flex');
        $('.index-section3-son').removeClass('home-page2-center');

        $('.home-page4-mobile').removeClass('hiden');
        $('.home-page4-pc').addClass('hiden');
        $('#home_page4_now').html(homePage4Ele[1]);
        $('#home_page4_left').html(homePage4Ele[8]);
        $('#home_page4_right').html(homePage4Ele[2]);
    } else {
        $('.home-page4-mobile').addClass('hiden');
        $('.home-page4-pc').removeClass('hiden');
    }
    var nw = $('#home_page4_now').width();
    $(window).on('resize', function () {
        nw = $('#home_page4_now').width();
        var cw = document.documentElement.clientWidth;

        if (cw <= 768) {


            $('#page-3').removeClass('home-page2-flex');
            $('.index-section3-son').removeClass('home-page2-center');

            $('.home-page4-mobile').removeClass('hiden');
            $('.home-page4-pc').addClass('hiden');
            $('#home_page4_now').html(homePage4Ele[1]);
            $('#home_page4_left').html(homePage4Ele[8]);
            $('#home_page4_right').html(homePage4Ele[2]);
        } else {

            $('#page-3').addClass('home-page2-flex');
            $('.index-section3-son').addClass('home-page2-center');

            $('.home-page4-mobile').addClass('hiden');
            $('.home-page4-pc').removeClass('hiden');
            $('.home-page4-pc1').html(homePage4Ele[1]);
            $('.home-page4-pc2').html(homePage4Ele[2]);
            $('.home-page4-pc3').html(homePage4Ele[3]);
            $('.home-page4-pc4').html(homePage4Ele[4]);
            $('.home-page4-pc5').append(homePage4Ele[5]).append(homePage4Ele[6]).append(homePage4Ele[7]).append(homePage4Ele[8])
        }
    });

    var lkey = 8;
    var nkey = 1;
    var rkey = 2;


    var nw2 = (nw - 258) / 2;
    $('#home_page4_btn1').on('click', function () {
        var nc2 = $('#home_page4_now').find('.imga:first-child');
        var lc2 = $('#home_page4_left').find('.imga:first-child');
        var rc2 = $('#home_page4_right').find('.imga:first-child');
        nc2.stop(true);
        lc2.stop(true);
        rc2.stop(true);

        nc2.animate({
            marginLeft: -nw + nw2 + 'px',
            right: 0
        }, 500, function () {
            if (nkey == 8) {
                nkey = 1;
                $('#home_page4_now').html(homePage4Ele[nkey]);
                $('#home_page4_now').find('.imga:first-child').animate({
                    marginLeft: nw2 + 'px'
                }, 0);
            } else {
                ++nkey;
                $('#home_page4_now').html(homePage4Ele[nkey]);
                $('#home_page4_now').find('.imga:first-child').animate({
                    marginLeft: nw2 + 'px'
                }, 0)
            }
        });

        lc2.animate({
            marginLeft: -nw + nw2 + 'px',
            right: 0
        }, 500, function () {
            if (lkey == 8) {
                lkey = 1;
                $('#home_page4_left').html(homePage4Ele[lkey]);
                $('#home_page4_left').find('.imga:first-child').animate({
                    marginLeft: nw2 + 'px'
                }, 0);
            } else {
                ++lkey;
                $('#home_page4_left').html(homePage4Ele[lkey]);
                $('#home_page4_left').find('.imga:first-child').animate({
                    marginLeft: nw2 + 'px'
                }, 0);
            }
        });

        rc2.animate({
            marginLeft: -nw + nw2 + 'px',
            right: 0
        }, 500, function () {
            if (rkey == 8) {
                rkey = 1;
                $('#home_page4_right').html(homePage4Ele[rkey]);
                $('#home_page4_right').find('.imga:first-child').animate({
                    marginLeft: nw2 + 'px'
                }, 0);
            } else {
                ++rkey;
                $('#home_page4_right').html(homePage4Ele[rkey]);
                $('#home_page4_right').find('.imga:first-child').animate({
                    marginLeft: nw2 + 'px'
                }, 0);
            }
        });
        homePage4Hover('#img_box1', '#home_page4_img1', '.home-page4-bac1', '#home_page4_img1_alt');
        homePage4Hover('#img_box2', '#home_page4_img2', '.home-page4-bac2', '#home_page4_img2_alt');
        homePage4Hover('#img_box3', '#home_page4_img3', '.home-page4-bac3', '#home_page4_img3_alt');
        homePage4Hover('#img_box4', '#home_page4_img4', '.home-page4-bac4', '#home_page4_img4_alt');
        homePage4Hover('#img_box5', '#home_page4_img5', '.home-page4-bac5', '#home_page4_img5_alt');
        homePage4Hover('#img_box6', '#home_page4_img6', '.home-page4-bac6', '#home_page4_img6_alt');
        homePage4Hover('#img_box7', '#home_page4_img7', '.home-page4-bac7', '#home_page4_img7_alt');
        homePage4Hover('#img_box8', '#home_page4_img8', '.home-page4-bac8', '#home_page4_img8_alt');
    });
    $('#home_page4_btn2').on('click', function () {
        var nc2 = $('#home_page4_now').find('.imga:first-child');
        var lc2 = $('#home_page4_left').find('.imga:first-child');
        var rc2 = $('#home_page4_right').find('.imga:first-child');
        nc2.stop(true);
        lc2.stop(true);
        rc2.stop(true);

        nc2.animate({
            right: -nw + 'px',
            marginLeft: nw2 + 'px'
        }, 500, function () {
            if (nkey == 1) {
                nkey = 8;
                $('#home_page4_now').html(homePage4Ele[nkey]);
                $('#home_page4_now').find('.imga:first-child').animate({
                    right: 0
                }, 0);
            } else {
                --nkey;
                $('#home_page4_now').html(homePage4Ele[nkey]);
                $('#home_page4_now').find('.imga:first-child').animate({
                    right: 0
                }, 0)
            }
        });

        lc2.animate({
            right: -nw + 'px',
            marginLeft: nw2 + 'px'
        }, 500, function () {
            if (lkey == 1) {
                lkey = 8;
                $('#home_page4_left').html(homePage4Ele[lkey]);
                $('#home_page4_left').find('.imga:first-child').animate({
                    right: 0
                }, 0);
            } else {
                --lkey;
                $('#home_page4_left').html(homePage4Ele[lkey]);
                $('#home_page4_left').find('.imga:first-child').animate({
                    right: 0
                }, 0);
            }
        });

        rc2.animate({
            right: -nw + 'px',
            marginLeft: nw2 + 'px'
        }, 500, function () {
            if (rkey == 1) {
                rkey = 8;
                $('#home_page4_right').html(homePage4Ele[rkey]);
                $('#home_page4_right').find('.imga:first-child').animate({
                    right: 0
                }, 0);
            } else {
                --rkey;
                $('#home_page4_right').html(homePage4Ele[rkey]);
                $('#home_page4_right').find('.imga:first-child').animate({
                    right: 0
                }, 0);
            }
        });
        homePage4Hover('#img_box1', '#home_page4_img1', '.home-page4-bac1', '#home_page4_img1_alt');
        homePage4Hover('#img_box2', '#home_page4_img2', '.home-page4-bac2', '#home_page4_img2_alt');
        homePage4Hover('#img_box3', '#home_page4_img3', '.home-page4-bac3', '#home_page4_img3_alt');
        homePage4Hover('#img_box4', '#home_page4_img4', '.home-page4-bac4', '#home_page4_img4_alt');
        homePage4Hover('#img_box5', '#home_page4_img5', '.home-page4-bac5', '#home_page4_img5_alt');
        homePage4Hover('#img_box6', '#home_page4_img6', '.home-page4-bac6', '#home_page4_img6_alt');
        homePage4Hover('#img_box7', '#home_page4_img7', '.home-page4-bac7', '#home_page4_img7_alt');
        homePage4Hover('#img_box8', '#home_page4_img8', '.home-page4-bac8', '#home_page4_img8_alt');
    });

}
function mobileBtn() {
    var cw = document.documentElement.clientWidth;
    if (cw <= 768) {
        $('.mobile-btn').removeClass('hiden');
    } else {
        $('.mobile-btn').addClass('hiden');
    }
    $(window).on('resize', function () {
        var cw = document.documentElement.clientWidth;
        if (cw <= 768) {
            $('.mobile-btn').removeClass('hiden');
            carousel2();
            carousel4();
        } else {
            $('.mobile-btn').addClass('hiden');
        }
    })

}
function homeFullpage() {
    $('#h5').fullpage({
        scrollOverflow: true,
        afterLoad: function (anchorLink, index) {
            if (index == 2) {
                $('.section2').find('.home-page2-header-content').delay(500).animate({
                    left: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
                $('.section2').find('#par').delay(500).animate({
                    right: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');

            }
            if (index == 3) {
                $('.section3').find('.container:first-child').delay(500).animate({
                    top: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');

                $('.home-page3-left-img').animate({
                    top: 0,
                    left: 0,
                    opacity: 1
                }, 1500);
                $('.home-page3-right-content').animate({
                    top: 0,
                    opacity: 1
                }, 1500);
                $('.home-page3-left-img').animate({
                    left: 0,
                    opacity: 1
                }, 1500)
            }

            if (index == 4) {
                $('.section4').find('.container:first-child').delay(500).animate({
                    left: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
                $('.section4').find('.container:nth-child(2)').delay(500).animate({
                    right: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
                // $('.section4').find('.container:first-child').fadeIn(2000);

            }

        }
    });
    /*    $('.home-page4-img-alt').on('click',function () {
     location.href = ''
     })*/
}
function roll() {
    var w = $('.home-page3-left-img').width();
    var h = $('.home-page3-right-content').height();
    $('.home-page3-left-img').offset({left: -w});
    $('.home-page3-right-content')[0].style.top = 1000 + 'px';

    $('.home-page3-left-img').animate({
        top: 0,
        left: 0,
        opacity: 1
    }, 1000);
    $('.home-page3-right-content').animate({
        top: 0,
        left: 0,
        opacity: 1
    }, 1000)
}
function homePage4Hover(boxId, imgEle, altEle, font) {
    $(boxId).on('mouseenter', function () {
        $(altEle).stop(true);
        $(imgEle).stop(true);
        $(font).stop(true);
        move(imgEle)
            .scale(1.2)
            .end();
        $(altEle).animate({
            opacity: 0.4
        }, 400);
        $(font).animate({
            opacity: 1
        }, 400)
    }).on('mouseleave', function () {
        $(altEle).stop(true);
        $(imgEle).stop(true);
        $(font).stop(true);
        move(imgEle)
            .scale(1)
            .end();
        $(altEle).animate({
            opacity: 0
        }, 400);
        $(imgEle).animate({
            opacity: 1
        });
        $(font).animate({
            opacity: 0
        }, 400)
    })
}
//首页动画-end

//exanple动画start
function exampleFullpage() {
    $('.example-page2-hover').on('click', function () {
        location.href = './example_details.html';
    })
}
function imgHover(altEle) {
    var altEle = altEle;
    $(altEle).on('mouseenter', function () {
        $(altEle).stop(true);
        $(altEle).animate({
            opacity: 0.5
        }, 500)
    });
    $(altEle).on('mouseleave', function () {
        $(altEle).animate({
            opacity: 0
        }, 500)
    })
}
function exampleShowActive() {
    var lastIndex = 0;
    var index = 0;
    $('.example-tab li').on('mouseenter', function () {
        $(this).addClass("on").siblings().removeClass("on");

        index = $(this).index();
        $('.example-form-tab').eq(index).stop(true);
        $('.example-form-tab').eq(lastIndex).stop(true);
        $('.example-form-tab').eq(lastIndex).fadeOut(500, function () {
            $('.example-form-tab').eq(index).fadeIn(500);
        });

    }).on('mouseenter', function () {
        lastIndex = index;
    });
}
//exanple动画end

//contact_us动效star
function map() {
    var points = [{
        id: 1,
        lng: 120.182749,
        lat: 30.219782,
        title: "杭州海运国际大厦",
        content: ["地址：浙江省杭州市上城区之江中路与中河南路交汇处", "电话：0571-86805399"]
    }];
    new BaiduMap({
        id: "contact_map_container1",
        level: 16,
        titleClass: "title",
        contentClass: "content",
        centerPoint: {
            // 地图中心点经纬度
            lng: 120.182749,
            lat: 30.219782
        },
        index: -1,
        points: points,
        showLabel: true
    });
    new BaiduMap({
        id: "container2",
        level: 16,
        type: ["地图", "卫星"],
        width: 320,
        height: 70,
        titleClass: "title",
        contentClass: "content",
        showMarkPanorama: true,
        mapStyle: "light",
        icon: {
            url: "img/marker.png",
            width: 25,
            height: 96
        },
        centerPoint: { // 地图中心点经纬度
            lng: 120.182749,
            lat: 30.219782
        },
        index: 0,
        points: points
    });
    new BaiduMap({
        id: "container3",
        level: 16, //  选填--地图级别--(默认15)
        zoom: true, // 选填--是否启用鼠标滚轮缩放功能--(默认false)
        type: ["地图", "卫星", "三维"], // 选填--显示地图类型--(默认不显示)
        width: 320, // 选填--信息窗口width--(默认自动调整)
        height: 70, // 选填--信息窗口height--(默认自动调整)
        titleClass: "title",
        contentClass: "content",
        showPanorama: true, // 是否显示全景控件(默认false)
        showMarkPanorama: true, // 是否显示标注点全景图(默认false)
        showLabel: false, // 是否显示文本标注(默认false)
        mapStyle: "normal", // 默认normal,可选dark,light
        icon: { // 选填--自定义icon图标
            url: "img/marker2.png",
            width: 34,
            height: 94
        },
        centerPoint: { // 中心点经纬度
            lng: 120.182749,
            lat: 30.219782
        },
        index: 3, // 开启对应的信息窗口，默认-1不开启
        animate: true, // 是否开启坠落动画，默认false
        points: points, // 标注点--id(唯一标识)
        callback: function (id) {
            $(".contact-map-list").find("li").eq(id - 1).addClass("active").siblings().removeClass("active");
        }
    });
}
function contactUsFullpage() {
    $('#h5').fullpage({
        scrollOverflow: true,
        afterLoad: function (anchorLink, index) {
            if (index == 2) {
                $('.section2').find('.contact-module').delay(500).animate({
                    left: '0',
                    opacity: 1

                }, 1500, 'easeOutExpo');
                $('.section2').find('.contact-map').delay(500).animate({
                    bottom: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');

            }
        }
    });
}
//contact_us动效end

//exampleDetail动效star
function exampleDetailFullpage() {
    $('#h5').fullpage({
        scrollOverflow: true,
        afterLoad: function (anchorLink, index) {
            if (index == 2) {
                $('.section2').find('.detail-page2-left-content').delay(500).animate({
                    left: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
                $('.section2').find('.detail-page2-right-content').delay(500).animate({
                    right: '0',
                    opacity: 1

                }, 1500, 'easeOutExpo');

            }
            if (index == 3) {
                $('.section3').find('.example-details-page3-container1').delay(500).animate({
                    top: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
                $('.section3').find('.example-details-page3-container2').delay(500).animate({
                    bottom: '0',
                    opacity: 1

                }, 1500, 'easeOutExpo');
            }
        }
    });
}
//exampleDetail动效end

//viewpiont动效star
function viewpiontFullpage() {
    $('#h5').fullpage({
        scrollOverflow: true,
        afterLoad: function (anchorLink, index) {
            if (index == 2) {
                $('.section2').find('.viewpoint-page2-child').delay(500).animate({
                    left: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
            }

        }
    });
}
function viewpiontPagination() {
    $('.viewpoint-page2-m-box').pagination({
        pageCount: 10,
        totalData: 20,
        current: 1,
        showData: 5,
        activeCls: 'active',
        coping: true,
        count: 3
    });

    $('.viewpoint-page2-child').on('mouseenter', function () {
        move(this)
            .scale(1.1)
            .end();
        this.style.boxShadow = '7px 7px 10px #d2d2d2'
    }).on('mouseleave', function () {
        move(this)
            .scale(1)
            .end();
        this.style.boxShadow = 'none'
    }).on('click', function () {
        location.href = '/news/'+ $(this).data('id');
    })

}
//viewpiont动效end

//viewpointDetain动效star
function viewpointDetainFullpage() {
    /*    $('#h5').fullpage({
     scrollOverflow:true,
     afterLoad: function(anchorLink, index){
     if(index == 2){
     $('.section2').find('.viewpointdetail-page2-content-nav').delay(500).animate({
     left: '0',
     opacity:1
     }, 1500, 'easeOutExpo');

     $('.section2').find('.viewpointdetail-page2-content-section').delay(500).animate({

     right: '0',
     opacity:1

     }, 1500, 'easeOutExpo');

     }
     }
     });*/
    $('.viewpointdetail-page2-content-nav-button').on('click', function () {
        location.href = 'viewpoint.html'
    })
}
//viewpointDetain动效end

//winning动效star
function winningFullpage() {
    $('#h5').fullpage({
        scrollOverflow: true,
        afterLoad: function (anchorLink, index) {
            if (index == 2) {
                $('.win-page2-contain-header-son').delay(500).animate({
                    left: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
                $('.win-page2-contain-section').delay(500).animate({
                    bottom: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
                $('.win-page2-contain-header-artice').delay(500).animate({
                    right: '0',
                    opacity: 1
                }, 1500, 'easeOutExpo');
            }
        }
    });
}
//winning动效end

//with动效star
function withFullpage() {
    var h = $(window).width();
    if (h > 1200) {
        $($('.with-page2-content-text')[0]).removeClass('hiden');
    } else if (h <= 1200 && h > 993) {
        $($('.with-page2-content-text')[1]).removeClass('hiden');
    } else if (h <= 993 && h > 768) {
        $($('.with-page2-content-text')[2]).removeClass('hiden');
    } else if (h <= 768) {
        $($('.with-page2-content-text')[3]).removeClass('hiden');
    }
    $(window).on('resize', function () {
        var h = $(window).width();
        if (h > 1200) {
            $('.with-page2-content-text').removeClass('hiden').addClass('hiden');
            $($('.with-page2-content-text')[0]).removeClass('hiden');
        } else if (h <= 1200 && h > 993) {
            $('.with-page2-content-text').removeClass('hiden').addClass('hiden');
            $($('.with-page2-content-text')[1]).removeClass('hiden');
        } else if (h <= 993 && h > 768) {
            $('.with-page2-content-text').removeClass('hiden').addClass('hiden');
            $($('.with-page2-content-text')[2]).removeClass('hiden');
        } else if (h <= 768) {
            $('.with-page2-content-text').removeClass('hiden').addClass('hiden');
            $($('.with-page2-content-text')[3]).removeClass('hiden');
        }
    })
    /*    $('#h5').fullpage({
     scrollOverflow: true,
     afterLoad: function (anchorLink, index) {
     if (index == 2) {
     $('.section2').find('.with-page2-content-company-details').delay(500).animate({
     left: '0',
     opacity: 1
     }, 1500, 'easeOutExpo');
     $('.section2').find('.with-page2-content-company-details-sli').delay(500).animate({
     right: '0',
     opacity: 1
     }, 1500, 'easeOutExpo');

     }
     if (index == 3) {
     $('.section3').find('.with-page3-content-team-details-title-par').delay(500).animate({
     left: '0',
     opacity: 1
     }, 1500, 'easeOutExpo');
     $('.section3').find('.team_details_allimg').delay(500).animate({
     right: '0',
     opacity: 1
     }, 1500, 'easeOutExpo');
     $('.section3').find('.with-page3-content-box2').delay(500).animate({
     bottom: '0',
     opacity: 1
     }, 1500, 'easeOutExpo');
     }
     }
     });*/
}
//with动效end
