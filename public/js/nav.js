window.onload = function () {
    //处理登陆的函数
    (function () {
        function openNew() {
            //获取页面的高度和宽度
            var open = document.getElementsByClassName('open');
            var close = document.getElementsByClassName('close');
            var sWidth = document.body.scrollWidth;
            var sHeight = document.body.scrollHeight;

            //获取页面的可视区域高度和宽度
            var wHeight = document.documentElement.clientHeight;

            var oMask = document.createElement("div");
            oMask.id = "mask";
            oMask.style.height = sHeight + "px";
            oMask.style.width = sWidth + "px";
            document.body.appendChild(oMask);
            //导航部分
            var oLogin = document.createElement("div");
            oLogin.id = "login";
            oLogin.innerHTML = "<ul class='loginCon'><li><a href='/'>首页</a></li><li><a href='/case'>案例介绍</a></li><li><a href='awards'>获奖记录</a></li><li><a href='abouts'>关于一树</a></li><li><a href='/news'>观点咨询</a></li><li><a href='/contact'>联系我们</a></li>";
            document.body.appendChild(oLogin);

            var oTranslate = document.createElement("div");
            oTranslate.id="translate";
            oTranslate.innerHTML ="<a class='china'><img src='image/china.png'><span>中文</span></a><a class='english'><img src='image/english.png'><span>English</span></a>";
            document.body.appendChild(oTranslate);

            $(oMask).animate({
                opacity: 0.7
            }, 1000);
            $(oLogin).animate({
                opacity: 1
            }, 1000);
            $(oTranslate).animate({
                opacity: 1
            }, 1000);

            //获取登陆框的宽和高
            var dHeight = oLogin.offsetHeight;
            var dWidth = oLogin.offsetWidth;
            //设置登陆框的left和top
            oLogin.style.left = sWidth / 2 - dWidth / 2 + "px";
            oLogin.style.top = wHeight / 2 - dHeight / 2 + "px";

            //点击关闭按钮
            var oClose = document.getElementById("close");

            //点击登陆框以外的区域也可以隐藏登陆框
            oClose.onclick = oMask.onclick = function () {
                $(open).toggleClass('hiden');
                $(close).toggleClass('hiden');
                $(oLogin).fadeOut("slow");
                $(oTranslate).fadeOut("slow");
                $(oMask).fadeOut("slow");
            };
        }

        var open = document.getElementsByClassName('open');
        var close = document.getElementsByClassName('close');
        var oBtn = document.getElementById("btnLogin");

        //点击登录按钮
        oBtn.onclick = function () {
            $(open).toggleClass('hiden');
            $(close).toggleClass('hiden');
            openNew();
            return false;
        }
    })();

};
