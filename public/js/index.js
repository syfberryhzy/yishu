$(function(){
    // 案例介绍切换
    $('.example-page2-form-control').click( function (){
        // alert(111);
                console.log(this); //HTMLElement
        
                // do sth.
                var index = $(this).index();
        
                // 改上面
                // 1. 选元素；2.（修改他的样式——表现）
                $(this).addClass('example-page2-form-control-active').siblings().removeClass('example-page2-form-control-active');
        
                // 改下面
                var x = $('.example-form-tab').eq(index);
                x.addClass('active').siblings().removeClass('active');
        
    });
});