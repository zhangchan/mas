<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
 <head> 
  <meta charset="utf-8" /> 
  <title>公司新闻</title> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <!-- Bootstrap --> 
  <link href="/Public/static/lib/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" /> 
  <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
  <link rel="stylesheet" href="/Public/static/lib/swiper4.4.2/css/swiper.css" /> 
  <link href="/Public/static/css/common.css" rel="stylesheet" /> 
  <link href="/Public/static/css/profile.css" rel="stylesheet" /> 
  <link href="/Public/static/css/news.css" rel="stylesheet" /> 
 </head> 
 <body > 

  <!-- 头部 head --> 
   <div class="head"> 
   <div class="container-fluid"> 
    <div class="row headrow"> 
     <!-- <div class="col-lg-4 col-md-4"> --> 
     <div class="logocontent">
      <a href="/home/Index/index"> 
        <div class="logo"> 
          <img src="/Public/static/images/logo.png" /> 
        </div> 
      </a> 
     </div> 
     <!-- <div class="col-lg-7  col-md-7 "> --> 
     <div class="navcontent"> 
      <ul class="nav nav-pills navlist"> 
        <li role="presentation"> 
          <a href="/home/company/profile" data-toggle="dropdown"> 
            <label>公司简介</label> 
          </a> 
          <ul class="dropdown-menu "> 
            <li role="presentation"> 
              <a href="/home/company/profile"> 
                <label>公司概况</label> 
              </a> 
            </li> 
            <li role="presentation"> 
              <a href="/home/company/news"> 
                <label>公司新闻</label> 
              </a> 
            </li> 
            <li role="presentation"> 
              <a href="/home/company/prize"> 
                <label>荣获奖项</label> 
              </a> 
            </li> 
          </ul> 
        </li> 
       <li role="presentation"> 
        <a href="/home/team/team"> 
          <label>设计团队</label> 
        </a> 
        <ul class="dropdown-menu "> 
         <li role="presentation"> 
          <a href="/home/team/cooperate"> 
            <label>合伙人</label> </a> 
          </li> 
         <li role="presentation"> 
          <a href="/home/team/team"> 
            <label>团队伙伴</label> 
          </a> 
        </li> 
        </ul> 
      </li> 
       <li role="presentation"> 
        <a href="/home/work/index"> 
          <label>设计作品</label> 
        </a> 
        <ul class="dropdown-menu"> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>规化</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>综合体</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>购物中心</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>商业</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>办公</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>居住</label> 
          </a> 
        </li> 
         <li role="presentation"> 
          <a href="/home/work/index"> 
            <label>教育</label>
          </a> 
        </li> 
        </ul> 
      </li> 
       <li role="presentation"> 
        <a href="/home/contact/index" data-toggle="dropdown"> 
          <label name="contact">联系我们</label> 
        </a> 
      </li> 
      </ul> 
     </div> 
     <div class="langToggle " id="lang"> 
      <label class="radio-inline"> <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="en" /> <i id="item1">English</i> </label> 
      <label class="radio-inline"> <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="zh-TW" /> <i id="item2"> 繁体 </i> </label> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- 内容区域 content --> 
  <div class="content"> 
 <div class="row"  style="      max-width: 1200px;
    margin: 0 auto;
    position: relative;">

        <div class="c_row_content_l" > 
         <div class="slideNav1"> 
          <ul class="nav  nav-pills" role="tablist" id="myTab"> 
           <li role="presentation" ><a href="companyprofile.html"><label>公司概况</label></a></li> 
           <li role="presentation" class="active"><a href="companynews.html"><label>公司新闻</label></a></li> 
           <li role="presentation"><a href="companyPrize.html"><label>荣获奖项</label></a></li> 
          </ul> 
         </div> 
        </div> 
        <div class="c_row_content_r"> 
         <!-- Tab panes --> 
      
              <div class="title" style="margin-bottom: 10px;"> 
               <img src="/Public/static/images/max_event.png" /> 
              </div> 
              <div class="newsCont"> 
               <div class="item"> 
                  <div class="newsContPic"> 
                   <img src="/Public/static/images/news/images/news.png" /> 
                  </div> 
                  <div class="newsContDesc"> 
                   <div class="newsTitle"> 
                    <i>正青春</i> MAS新老员工户外3日拓展 
                   </div> 
                   <small>2018-5-30 16:20 </small> 
                   <div class="description">
                     新形象，新生活，新起点！ 
                   </div> 
                  </div> 
               </div> 
               <div class="item"> 
                  <div class="newsContPic"> 
                   <img src="/Public/static/images/news/images/news.png" /> 
                  </div> 
                  <div class="newsContDesc"> 
                   <div class="newsTitle"> 
                    <i>正青春</i> MAS新老员工户外3日拓展 
                   </div> 
                   <small>2018-5-30 16:20 </small> 
                   <div class="description">
                     新形象，新生活，新起点！ 
                   </div> 
                  </div> 
               </div>
               <div class="item"> 
                  <div class="newsContPic"> 
                   <img src="/Public/static/images/news/images/news.png" /> 
                  </div> 
                  <div class="newsContDesc"> 
                   <div class="newsTitle"> 
                    <i>正青春</i> MAS新老员工户外3日拓展 
                   </div> 
                   <small>2018-5-30 16:20 </small> 
                   <div class="description">
                     新形象，新生活，新起点！ 
                   </div> 
                  </div> 
               </div> 
               <div class="item"> 
                  <div class="newsContPic"> 
                   <img src="/Public/static/images/news/images/news.png" /> 
                  </div> 
                  <div class="newsContDesc"> 
                   <div class="newsTitle"> 
                    <i>正青春</i> MAS新老员工户外3日拓展 
                   </div> 
                   <small>2018-5-30 16:20 </small> 
                   <div class="description">
                     新形象，新生活，新起点！ 
                   </div> 
                  </div> 
               </div> 
               <div class="item"> 
                  <div class="newsContPic"> 
                   <img src="/Public/static/images/news/images/news.png" /> 
                  </div> 
                  <div class="newsContDesc"> 
                   <div class="newsTitle"> 
                    <i>正青春</i> MAS新老员工户外3日拓展 
                   </div> 
                   <small>2018-5-30 16:20 </small> 
                   <div class="description">
                     新形象，新生活，新起点！ 
                   </div> 
                  </div> 
               </div> 
               <div class="item"> 
                  <div class="newsContPic"> 
                   <img src="/Public/static/images/news/images/news.png" /> 
                  </div> 
                  <div class="newsContDesc"> 
                   <div class="newsTitle"> 
                    <i>正青春</i> MAS新老员工户外3日拓展 
                   </div> 
                   <small>2018-5-30 16:20 </small> 
                   <div class="description">
                     新形象，新生活，新起点！ 
                   </div> 
                  </div> 
               </div> 
            
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
 </body>
</html>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
<script src="/Public/static/lib/swiper4.4.2/js/swiper.js"></script> 
<script src="/Public/static/js/base.js"></script> 
<script src="/Public/static/js/companynews.js"></script>