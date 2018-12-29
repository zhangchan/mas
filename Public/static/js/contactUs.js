$(function () {
//    鼠标点击邮箱，弹出邮箱页面
    $(".emailE").click(function(){
        $(".email").show();
    });
    $(".contactUsItem").hover(function(){
        $(".contactUsItem").removeClass(" active ");
        $(this).addClass("active");
    },function(){});

});