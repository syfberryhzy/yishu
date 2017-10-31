/**
 * Created by Administrator on 2017/9/27.
 */
//底部导航-start
$(function () {

    (function () {
        var lista = document.querySelectorAll('.cont-list-box>div');
        var listspan = document.querySelectorAll('.span-box > span');

        if ($(document).width() < 412) {
            document.getElementsByClassName('cont-list-box')[0].style.display = 'block';
            for (var j = 0; j < lista.length; j++) {
                lista[j].className = 'col-xs-4';
                lista[j].style.textAlign = 'center';
            }
        } else {
            document.getElementsByClassName('cont-list-box')[0].style.display = 'flex';
        }
        if ($(document).width() < 767) {
            for (var i = 0; i < listspan.length; i++) {
                listspan[i].className = 'col-xs-12';
            }
        } else {

        }
        onresize = function () {
            if ($(document).width() < 412) {
                document.getElementsByClassName('cont-list-box')[0].style.display = 'block';
                for (var j = 0; j < lista.length; j++) {
                    lista[j].className = 'col-xs-4';
                    lista[j].style.textAlign = 'center';
                }
                console.log(lista[0].className)
            } else {
                document.getElementsByClassName('cont-list-box')[0].style.display = 'flex';
                for (var j = 0; j < lista.length; j++) {
                    lista[j].className = ' ';
                }
            }
            if ($(document).width() < 767) {
                for (var i = 0; i < listspan.length; i++) {
                    listspan[i].className = 'col-xs-12';
                }
            } else {
                for (var i = 0; i < listspan.length; i++) {
                    listspan[i].className = ' ';
                }
            }
        }
    })();
});
//底部导航-end

//全屏滚动插件start
function fullpage() {
    $("#h5").fullpage(
        {
            verticalCentered: false,
            scrollOverflow: true,
            navigation: true,
            navigationPosition: 'right',
            resize: true,
            afterLoad: function (anchorLink, index) {
            }
        }
    );
}
//全屏滚动插件end


//首页动画-start
function magnify() {
    $('.home-brand-box').on('mouseenter', function () {
        move('.home-brand-box', '.home-brand', '.home-brand-cn', '.home-brand-en').scale(1.3).end();
    }).on('mouseleave', function () {
        move('.home-brand-box', '.home-brand', '.home-brand-cn', '.home-brand-en').scale(1).end();
    });

    $('.home-package-box').on('mouseenter', function () {
        move('.home-package-box', '.home-package', '.home-package-cn', '.home-package-en').scale(1.3).end();
    }).on('mouseleave', function () {
        move('.home-package-box', '.home-package', '.home-package-cn', '.home-package-en').scale(1).end();
    });

    $('.home-cultural-box').on('mouseenter', function () {
        move('.home-cultural-box', '.home-cultural', '.home-cultural-cn', '.home-cultural-en').scale(1.3).end();
    }).on('mouseleave', function () {
        move('.home-cultural-box', '.home-cultural', '.home-cultural-cn', '.home-cultural-en').scale(1).end();
    });
}
function roll() {
    var w = $('.home-page3-left-img').width();
    var h = $('.home-page3-right-content').height();
    $('.home-page3-left-img').offset({left: -w});
    $('.home-page3-right-content').offset({top: 4*h});
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
function fadeInOrOut(imgEle, altEle) {
    var imgEle = imgEle;
    var altEle = altEle;
    $(imgEle).on('mouseenter', function () {
        $(imgEle).stop(true);
        $(altEle).stop(true);
        $(imgEle).addClass('hiden');
        $(altEle).removeClass('hiden');
    });
    $(altEle).on('mouseleave', function () {
        $(imgEle).stop(true);
        $(altEle).stop(true);
        $(altEle).addClass('hiden');
        $(imgEle).removeClass('hiden');
    })
}
function fadeInOrOut1(altEle) {
    var altEle = altEle;
    $(altEle).on('mouseenter', function () {
        $(altEle).stop(true);
        $(altEle)[0].style.opacity = 1;
    });
    $(altEle).on('mouseleave', function () {
        $(altEle)[0].style.opacity = 0;
    })
}
function homeFullpage() {
    var w = $('.home-page3-left-img').width();
    var h = $('.home-page3-right-content').height();
    $('.home-page3-left-img').offset({left: -w});
    $('.home-page3-right-content').offset({top: 4*h});
    $("#h5").fullpage(
        {
            verticalCentered: false,
            scrollOverflow: true,
            navigation: true,
            navigationPosition: 'right',
            afterLoad: function (anchorLink, index) {
                if (index == 2) {
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
            }
        }
    );
}
//首页动画-end

//exanple动画start
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
//exanple动画end