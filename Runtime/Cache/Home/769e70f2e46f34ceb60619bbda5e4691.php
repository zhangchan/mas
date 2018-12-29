<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">

    <title class="i18n" name='homePage'></title>
    <meta id="i18n_pagename" content="index-common">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!-- Bootstrap -->
    <link href="/Public/static/lib/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="/Public/static/css/commen.css" rel="stylesheet" >
    <link href="/Public/static/css/index.css" rel="stylesheet" >
    

</head>
<body>



<!-- 头部 head -->
<div class="head">
  <div class="container-fluid">
    <div class="row ">

      <div class="col-lg-4 col-md-4">
        <a href="index.html">
        <div ><img src="images/logo.png"> </div>
        </a>
      </div>

      <div class="col-lg-7  col-md-7 ">
        <ul class="nav nav-pills">
          <!--<li role="presentation" class="active">-->
          <!--<a href="index.html" data-toggle="dropdown" > <label class="i18n" name="homePage"></label> </a>-->
          <!--</li>-->
          <li role="presentation">
            <a href="companyprofile.html" data-toggle="dropdown" ><label class="i18n" name="companyExp"></label></a>
            <ul class="dropdown-menu ">
              <li role="presentation"><a href="companyprofile.html"><label class="i18n" name="companPprofile"></label></a></li>
              <li role="presentation"><a href="companyprofilenews.html"><label class="i18n" name="companyNews"></label></a></li>
              <li role="presentation"><a href="companyprofilePrize.html"><label class="i18n" name="awards"></label></a></li>
            </ul>
          </li>
          <li role="presentation">
            <a href="designTeam.html"><label class="i18n" name="designTeam"></label></a>
            <ul class="dropdown-menu ">
              <li role="presentation"><a href="designTeam.html"><label class="i18n" name="partner"></label></a></li>
              <li role="presentation"><a href="designTeam_cooperate.html"><label class="i18n" name="partnerTeam"></label></a></li>
            </ul>
          </li>
          <li role="presentation"><a href="designWork.html">
            <label class="i18n" name="designShow"></label></a>

            <ul class="dropdown-menu">

              <li role="presentation"><a href="designWork.html?tabid=shoppingCcenter1"><label class="i18n" name="programme"></label></a></li>
              <li role="presentation"><a href="designWork.html?tabid=shoppingCcenter2"><label class="i18n" name="synthesis"></label></a></li>
              <li role="presentation"><a href="designWork.html?tabid=shoppingCcenter"><label class="i18n" name="shoppingCenter"></label></a></li>
              <li role="presentation"><a href="designWork.html?tabid=shoppingCcenter3"><label class="i18n" name="retail"></label></a></li>
              <li role="presentation"><a href="designWork.html?tabid=shoppingCcenter4"><label class="i18n" name="commerce"></label></a></li>
              <li role="presentation"><a href="designWork.html?tabid=shoppingCcenter5"><label class="i18n" name="dwell"></label></a></li>
              <li role="presentation"><a href="designWork.html?tabid=shoppingCcenter6"><label class="i18n" name="education"></label></a></li>
              

            </ul>
          </li>
          <li role="presentation">
            <a href="contactUs.html" data-toggle="dropdown" ><label class="i18n" name="contact"></label></a>

          </li>
        </ul>

        <div class="langToggle " id="lang">
            <label class="radio-inline" >
              <input type="radio" name="inlineRadioOptions" id="inlineRadio1"  value="en">
              <i id="item1" >English</i>
            </label>
            <label class="radio-inline">
              <input type="radio" name="inlineRadioOptions" id="inlineRadio2"  value="zh-TW">
              <i id="item2" > 繁体 </i>
            </label>
          </div>
      </div>
    </div>
  </div>
</div>


<!-- 内容区域 content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" style="background: gray;">
                <!-- Indicators -->
                <!--<ol class="carousel-indicators">-->
                    <!--<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
                    <!--<li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
                    <!--<li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
                <!--</ol>-->

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/Public/static/images/firstCarsoul/first_1.png" alt="...">

                    </div>
                    <div class="item">
                        <img src="/Public/static/images/firstCarsoul/first_2.png" alt="...">
                    </div>
                    <div class="item">
                        <img src="/Public/static/images/firstCarsoul/first_3.png" alt="...">
                    </div>
                </div>

                <div class="shade">
                    <!-- 从公司简介处 分左右两块 -->
                    <div class="s-l"></div>
                    <div class=""></div>

                </div>
                <img src="/Public/static/images/logo_text.png" class="logo_text" id="logoText">

                <!-- Controls -->
                <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
                    <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
                    <!--<span class="sr-only">Previous</span>-->
                <!--</a>-->
                <!--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
                    <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
                    <!--<span class="sr-only">Next</span>-->
                <!--</a>-->



            </div>
        </div>
    </div>
</div>

 <!--foot 底部-->
<div class="foot">
    <div class="container-fluid">
        <div class="row">

           <!-- 语言切换 languageToggle -->
          <div class="col-lg-offset-8 col-md-offset-8 col-lg-4  col-md-4" style="color: #999999;">
              <span>上海奇皇室内设计（集团）有限公司版权所有</span>
              <span> 沪ICP备07027802号-1</span>
          </div>
        </div>
    </div>
</div>




<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>

<script>
    $.get('header.html', function(data){
        console.log('-----', data)
        $('body').append(data)
        $('body').append(`
      <script src="js\/jquery.i18n.properties.js"><\/script>
    <script src="js\/language.js"><\/script>
      `)
    })
</script>


<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<!--<script src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
<script src="/Public/static/js/base.js"></script>

<script>

    $(function () {


        // 设置下拉列表 改成 hover 下拉显示
        $(document).off('click.bs.dropdown.data-api');

        $(".dropdown").mouseover(function () {
            $(this).addClass("open");
        }).mouseleave(function(){
            $(this).removeClass("open");
        });
        // 设置下拉列表 改成 hover 下拉显示


        var firstCarsoul = ["images/firstCarsoul/first_1.png","images/firstCarsoul/first_2.png","images/firstCarsoul/first_3.png"];  // 如果后台没有传回来数据显示本地的轮播图片
        var defaultPic = 'images/defaultPic.jpg';
        // 获取图片 、渲染轮播图片
        const param ={
                       data:{
                            op: "get_news",
                            catid:15,
                            field:'pic'
                            }
                     };
        // ajaxData( param ,function( data){
        //         // var data =  JSON.parse(data);
        //     console.log("data",data );
        //         if( data.status == 200){
        //
        //             var render = '';
        //             render +='<div class="item active" style="background-image: url('+data.data[0].pic +')"></div>';
        //
        //             for(var i =1; i < data.count ; i++ ){
        //                 render +='<div class="item" style="background-image: url('+ data.data[i].pic +')"> </div>';
        //             }
        //
        //             $(".content .carousel-inner").html( render );
        //
        //
        //
        //         }else {
        //             console.log("获取数据不成功");
        //         }
        //         console.log(data);
        //     });

        //  获取logo 图片文字图片（左下角）
        const logoText={
            data:{
                op: "get_news",
                catid:20,
                field:'pic'
            }
        }
        // ajaxData( logoText ,function( data){
        //     var data =  JSON.parse(data);
        //     console.log("data.status:",typeof data );
        //     if( data.status == 200){
        //         var logoTextSrc = data.data[0].pic;
        //         $("#logoText").attr("src",logoTextSrc);
        //
        //
        //     }else {
        //         console.log("获取数据不成功");
        //     }
        //     console.log(data);
        // });

        $("#lang input").change(function(){
          console.log($("#lang input[name='inlineRadioOptions']:checked ").val());
        });


       
    });
</script>
</body>
</html>