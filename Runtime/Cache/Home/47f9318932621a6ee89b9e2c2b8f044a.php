<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
 <head> 
  <meta charset="utf-8" /> 
  <title>团队伙伴</title>  
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <!-- Bootstrap --> 
  <link href="/Public/static/lib/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" /> 
  <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]--> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/css/swiper.min.css" /> 
  <script src="/Public/static/lib/grayscale/grayscale.js"></script> 
  <link href="/Public/static/css/common.css" rel="stylesheet" /> 
  <link href="/Public/static/css/profile.css" rel="stylesheet" /> 
  <link href="/Public/static/css/coorperate.css" rel="stylesheet" /> 
 </head> 
 <body> 
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
   <div class="container"> 
    <div class="row"> 
     <div class="col-lg-12 col-md-12  c_col_content"> 
      <div class="setCen"> 
       <div class="row c_row_content"> 
        <div class="col-lg-1 col-md-1 c_row_content_l" > 
         <div class="slideNav "> 
          <ul class="nav  nav-pills" role="tablist"> 
            <li role="presentation" style="margin-bottom: 20px;">
              <a href="designTeam.html">
                <label>合伙人</label>
              </a>
            </li> 
            <li role="presentation" class="active">
              <a href="designTeam_cooperate.html">
                <label>团队伙伴</label>
              </a>
            </li> 
          </ul> 
         </div> 
        </div> 
        <div class="col-lg-11 col-md-11 c_row_content_r"> 
         <!-- Tab panes --> 
         <div role="tabpanel" class="tab-pane active" id="profile" style="height: 100%"> 
           <div class="row "> 
            <div class="col-lg-12 col-md-12" id="designPic" style="padding-right: 0px; height: 100%;width: 100%;"> 
             <div class="swiper-container" id="cooperateList" style="width: 100%;height: calc(100% - 40px)"> 
              <div class="swiper-wrapper"> 
               <div class="swiper-slide"> 
                <div class=" designContContain"> 
                 <div class="designCont" id="designCont" style=""> 
                  <div class="design-row"> 
                   <div class="design-col"> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_03.png" /> 
                    </div> 
                    <div class="design-item design-text grayColor"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                   </div> 
                   <div class="design-col"> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_05.png" /> 
                    </div> 
                    <div class="design-item design-text blueColor_2"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                   </div> 
                   <div class="design-col"> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_10.png" /> 
                    </div> 
                    <div class="design-item design-text blueColor_2"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                  <div class="design-row"> 
                   <div class="design-col"> 
                    <div class="design-item design-text blueColor_2"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_03.png" /> 
                    </div> 
                   </div> 
                   <div class="design-col"> 
                    <div class="design-item design-text blueColor_3"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_03.png" /> 
                    </div> 
                   </div> 
                   <div class="design-col"> 
                    <div class="design-item design-text blueColor_1"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_03.png" /> 
                    </div> 
                   </div> 
                  </div> 
                  <div class="design-row"> 
                   <div class="design-col"> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_03.png" /> 
                    </div> 
                    <div class="design-item design-text blueColor_4"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                   </div> 
                   <div class="design-col"> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_05.png" /> 
                    </div> 
                    <div class="design-item design-text blueColor_1"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                   </div> 
                   <div class="design-col"> 
                    <div class="design-item"> 
                     <img src="/Public/static/images/cooperate/images/cooperate_10.png" /> 
                    </div> 
                    <div class="design-item design-text blueColor_3"> 
                     <div class="design-text-container"> 
                      <p>某某</p> 
                      <p>专案经理</p> 
                      <p>毕业于台湾国立成功大学研究所</p> 
                     </div> 
                    </div> 
                   </div> 
                  </div> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 

        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <!-- foot 底部 --> 
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

   <style>
    #cooperateList .swiper-slide {
        height: 100%;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }
    .designContContain{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: Center;
        flex-direction: column;
    }
    .designCont{
        width: 1100px;
        height: 550px;
    }
</style>   
 </body>
</html>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/js/swiper.js"></script> 
<script src="/Public/static/js/base.js"></script> 
<script src="/Public/static/js/designTeam_coorperate.js"></script>