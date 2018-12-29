<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
 <head> 
  <meta charset="utf-8" /> 
  <title>设计作品</title> 
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
  <link href="/Public/static/css/work.css" rel="stylesheet" /> 
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
          <a href="/home/company/index" data-toggle="dropdown"> 
            <label>公司简介</label> 
          </a> 
          <ul class="dropdown-menu "> 
            <li role="presentation"> 
              <a href="/home/company/index"> 
                <label>公司概况</label> 
              </a> 
            </li> 
            <li role="presentation"> 
              <a href="/home/company/index"> 
                <label>公司新闻</label> 
              </a> 
            </li> 
            <li role="presentation"> 
              <a href="/home/company/index"> 
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
  <div class="content "> 
   <div class="container "> 
    <div class="row setCen"> 
        <div class="col-lg-2 col-md-2 " style="height: 100%;padding-left: 0;"> 
         <div class="slideNav "> 
          <div class="" style="height:64%; "> 
           <ul class="nav  nav-pills" role="tablist" id="myTab"> 
            <li role="presentation" class="active"><a href="#shoppingCcenter1" aria-controls="shoppingCcenter1" role="tab" data-toggle="tab"><label> 规化</label></a></li> 
            <li role="presentation"><a href="#shoppingCcenter2" aria-controls="shoppingCcenter2" role="tab" data-toggle="tab"><label> 综合体</label></a></li> 
            <li role="presentation"><a href="#shoppingCcenter" aria-controls="shoppingCcenter" role="tab" data-toggle="tab"><label> 购物中心</label></a></li> 
            <li role="presentation"><a href="#shoppingCcenter3" aria-controls="shoppingCcenter3" role="tab" data-toggle="tab"><label> 商业</label></a></li> 
            <li role="presentation"><a href="#shoppingCcenter4" aria-controls="shoppingCcenter4" role="tab" data-toggle="tab"><label> 办公</label></a></li> 
            <li role="presentation"><a href="#shoppingCcenter5" aria-controls="shoppingCcenter5" role="tab" data-toggle="tab"><label> 居住</label></a></li> 
            <li role="presentation"><a href="#shoppingCcenter6" aria-controls="shoppingCcenter6" role="tab" data-toggle="tab"><label> 教育</label></a></li> 
           </ul> 
          </div> 
         </div> 
        </div> 
        <div class="col-lg-10 col-md-10" style="height: 100%;"> 
         <!-- Tab panes --> 
         <div class="tab-content  companyProfile" style="height: 100%"> 
          <div role="tabpanel" class="tab-pane  shoppingCcenter" id="shoppingCcenter" style="height: 100%;width: 100%;"> 
           <div class="swiper-container" id="designCarsoul1" style="width: 100%;height: 100%"> 
            <div class="swiper-wrapper"> 
             <div class="swiper-slide"> 
              <div class="shoppingContainer"> 
               <div class="shoppingCcenterCent" style="height:90%;"> 
                <div class="sc-col-10 shoppingCcenterItem " style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-20 " style=""> 
                 <div class="sc-row"> 
                  <div class="sc-col-50 shoppingCcenterItem"> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_07.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                  <div class="sc-col-50 shoppingCcenterItem" style=""> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                 </div> 
                 <div class="sc-row shoppingCcenterItem" style="margin-top: 1%;"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_09.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
                <div class="sc-col-10  shoppingCcenterItem" style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-11 " style=""> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_05.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div>
          <div role="tabpanel" class="tab-pane  shoppingCcenter active" id="shoppingCcenter1" style="height: 100%;width: 100%;"> 
           <div class="swiper-container" id="designCarsoul1" style="width: 100%;height: 100%"> 
            <div class="swiper-wrapper"> 
             <div class="swiper-slide"> 
              <div class="shoppingContainer"> 
               <div class="shoppingCcenterCent" style="height:90%;"> 
                <div class="sc-col-10 shoppingCcenterItem " style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-20" style=""> 
                 <div class="sc-row"> 
                  <div class="sc-col-50 shoppingCcenterItem"> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_07.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                  <div class="sc-col-50 shoppingCcenterItem" style=""> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                 </div> 
                 <div class="sc-row shoppingCcenterItem" style="margin-top: 1%;"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_09.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
                <div class="sc-col-10  shoppingCcenterItem" style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-11" style=""> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_05.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div role="tabpanel" class="tab-pane  shoppingCcenter" id="shoppingCcenter2" style="height: 100%;width: 100%;"> 
           <div class="swiper-container" id="designCarsoul2" style="width: 100%;height: 100%"> 
            <div class="swiper-wrapper"> 
             <div class="swiper-slide"> 
              <div class="shoppingContainer"> 
               <div class="shoppingCcenterCent" style="height:90%;"> 
                <div class="sc-col-10 shoppingCcenterItem " style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-20 " style=""> 
                 <div class="sc-row"> 
                  <div class="sc-col-50 shoppingCcenterItem"> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                  <div class="sc-col-50 shoppingCcenterItem" style=""> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_07.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                 </div> 
                 <div class="sc-row shoppingCcenterItem" style="margin-top: 1%;"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_09.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
                <div class="sc-col-10  shoppingCcenterItem" style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-11 " style=""> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_05.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div role="tabpanel" class="tab-pane  shoppingCcenter" id="shoppingCcenter3" style="height: 100%;width: 100%;"> 
           <div class="swiper-container" id="designCarsoul3" style="width: 100%;height: 100%"> 
            <div class="swiper-wrapper"> 
             <div class="swiper-slide"> 
              <div class="shoppingContainer"> 
               <div class="shoppingCcenterCent" style="height:90%;"> 
                <div class="sc-col-10 shoppingCcenterItem " style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-20 " style=""> 
                 <div class="sc-row"> 
                  <div class="sc-col-50 shoppingCcenterItem"> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                  <div class="sc-col-50 shoppingCcenterItem" style=" "> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                 </div> 
                 <div class="sc-row shoppingCcenterItem" style="margin-top: 1%;"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_09.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
                <div class="sc-col-10  shoppingCcenterItem" style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-11 " style=""> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_05.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div role="tabpanel" class="tab-pane  shoppingCcenter" id="shoppingCcenter4" style="height: 100%;width: 100%;"> 
           <div class="swiper-container" id="designCarsoul4" style="width: 100%;height: 100%"> 
            <div class="swiper-wrapper"> 
             <div class="swiper-slide"> 
              <div class="shoppingContainer"> 
               <div class="shoppingCcenterCent" style="height:90%;"> 
                <div class="sc-col-10 shoppingCcenterItem " style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-20 " style=""> 
                 <div class="sc-row"> 
                  <div class="sc-col-50 shoppingCcenterItem"> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                  <div class="sc-col-50 shoppingCcenterItem" style=" "> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_07.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                 </div> 
                 <div class="sc-row shoppingCcenterItem" style="margin-top: 1%;"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_09.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
                <div class="sc-col-10  shoppingCcenterItem" style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-11 " style=""> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_05.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div role="tabpanel" class="tab-pane  shoppingCcenter" id="shoppingCcenter5" style="height: 100%;width: 100%;"> 
           <div class="swiper-container" id="designCarsoul5" style="width: 100%;height: 100%"> 
            <div class="swiper-wrapper"> 
             <div class="swiper-slide"> 
              <div class="shoppingContainer"> 
               <div class="shoppingCcenterCent" style="height:90%;"> 
                <div class="sc-col-10 shoppingCcenterItem " style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-20 " style=""> 
                 <div class="sc-row"> 
                  <div class="sc-col-50 shoppingCcenterItem"> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                  <div class="sc-col-50 shoppingCcenterItem" style=""> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_07.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                 </div> 
                 <div class="sc-row shoppingCcenterItem" style="margin-top: 1%;"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_09.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
                <div class="sc-col-10  shoppingCcenterItem" style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-11 " style=""> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_05.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
               </div> 
              </div> 
             </div> 
            </div> 
           </div> 
          </div> 
          <div role="tabpanel" class="tab-pane  shoppingCcenter" id="shoppingCcenter6" style="height: 100%;width: 100%;"> 
           <div class="swiper-container" id="designCarsoul6" style="width: 100%;height: 100%"> 
            <div class="swiper-wrapper"> 
             <div class="swiper-slide"> 
              <div class="shoppingContainer"> 
               <div class="shoppingCcenterCent" style="height:90%;"> 
                <div class="sc-col-10 shoppingCcenterItem " style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-20 " style=""> 
                 <div class="sc-row"> 
                  <div class="sc-col-50 shoppingCcenterItem"> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                  <div class="sc-col-50 shoppingCcenterItem" style=""> 
                   <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_07.png" /> 
                    <div class="shade"> 
                     <p class="descr"> 清华购物中心 </p> 
                    </div> </a> 
                  </div> 
                 </div> 
                 <div class="sc-row shoppingCcenterItem" style="margin-top: 1%;"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_09.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                </div> 
                <div class="sc-col-10  shoppingCcenterItem" style=""> 
                 <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_03.png" /> 
                  <div class="shade"> 
                   <p class="descr"> 清华购物中心 </p> 
                  </div> </a> 
                </div> 
                <div class="sc-col-11 " style=""> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_07.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
                 </div> 
                 <div class="sc-row-1 shoppingCcenterItem"> 
                  <a href="WorkDetail.html" style="display: block"> <img src="/Public/static/images/work/images/design_shoppingcenter_11.png" /> 
                   <div class="shade"> 
                    <p class="descr"> 清华购物中心 </p> 
                   </div> </a> 
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
 </body>
</html>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.0/js/swiper.js"></script> 
<script src="/Public/static/js/base.js"></script> 
<script src="/Public/static/js/designWork.js"></script>