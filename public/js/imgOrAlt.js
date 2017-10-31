/**
 * Created by Administrator on 2017/9/27.
 */
function imgOrAlt(parBox, imgEle, altEle) {
    var parBox = $(parBox);
    var imgEle = $(imgEle);
    var altEle = $(altEle);


    parBox.on('mouseenter',
        function () {
            imgEle.stop(true);
            altEle.stop(true);
            imgEle.addClass('img1');
            imgEle.animate({
                opacity:0
            }, 800, function () {
                imgEle.addClass('hiden');
                imgEle.removeClass('img1');
                altEle.removeClass('hiden');
                altEle.addClass('img2');
                altEle.animate({
                    opacity: 1
                }, 800, function () {
                    altEle.removeClass('img2');
                })
            })
        }).on('mouseleave',
        function () {
            altEle.addClass('img3');
            altEle.animate({
                opacity: 0
            }, 800, function () {
                altEle.addClass('hiden');
                altEle.removeClass('img3');
                imgEle.addClass('img2');
                imgEle.removeClass('hiden');
                imgEle.animate({
                    opacity: 1
                }, 800, function () {
                    imgEle.removeClass('img2');
                });
            })
        });

}