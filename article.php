<html>
<?php
 include_once 'config.php';
 $id = alphaID($_GET['id'] , true);
 $result = mysql_query("SELECT ID,post_date,post_title,post_content FROM `t_posts` where ID='".addslashes($id)."'    LIMIT 0 , 1"); 
 $row = mysql_fetch_array($result, MYSQL_ASSOC);
?>
<head><script src="http://a.tbcdn.cn/apps/matrix-mission/feedback/feedback.js" async=""></script>
	<meta charset="utf-8">
	<title>mei94 <?php  echo $row['post_title'];  ?></title>
	<meta name="keywords" content="mei94,淘宝装修模板,淘宝模板,网店装修,淘宝店铺装修免费模板,淘宝店铺免费装修,淘宝装修免费模板,淘宝模板免费下载,淘宝免费模板,网店模板,淘宝店铺装修教程">
<meta name="description" content="mei94网店装修网提供装修淘宝店铺所需的全套淘宝装修模板、淘宝客服中心模板、宝贝描述模板、店招图片素材、宝贝分类图片素材、旺铺促销模板等淘宝店铺装修免费模板代码与淘宝装修图片素材">
			
		<link rel="stylesheet" href="./css/a.tbcdn.cn.css"><!-- end vmc css 3.1-->
	<script src="http://a.tbcdn.cn/??s/kissy/1.2.0/kissy-min.js,p/global/1.0/global-min.js?t=201211021123.js"></script>
		<link rel="stylesheet" href="./css/nav.css"><!-- end vmc css 3.1-->
	<script src="http://a.tbcdn.cn/apps/bbs/pie/common/nav.js"></script>
	
	<link rel="stylesheet" href="./css/style-min-article.css">
	

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<script> 
      TB.Global.init({mc: -1}); 
    </script>


<div id="header">
	<h1 id="logo">
		<a href="/" class="mainlogo" target="_top">
			<img width="140" height="43" src="./img/logo.png" alt="mei94">
		</a>
	</h1>
		<script type="text/javascript">
    KISSY.ready(function(S) {
        var D = S.DOM,E = S.Event;

        var trigger = D.get(".J_MorePromotionsT"),
            panel = D.get(".J_MorePromotions");

        E.on([trigger, panel], 'mouseenter mouseleave', function(ev) {
            if (ev.type === 'mouseenter') {
                D.addClass(trigger, 'ju123-m-hover');
                D.show(panel);
            }
            else {
                D.removeClass(trigger, 'ju123-m-hover');
                D.hide(panel);
            }
        })
    });
</script>	
			<div class="J_Type" id="J_Type">
			</div>

</div>

<div id="main-nav">
	<div id="nav">
		<div class="navigation">
	  <div class="single-nav" id="single-nav">
				<a href="#" id="J_Nav_index" class="trigger-index">首页</a>
				<a href="#" id="J_Nav_zhengce" class="trigger-zhengce">聚焦热点</a>
				<a href="#" id="J_Nav_maijia" class="trigger-maijia">卖家交流</a>
				<a href="#" id="J_Nav_guanfang" class="trigger-guanfang">官方专区</a>
			</div>
		</div>
	</div>
	<div id="sub-nav" class="">
		<div class="sub-nav-wrap">
    		<div class="sub-nav-box">
    			    			<ul class="J_IsSubnav" id="J_Sub_index" style="display: none;">
    				<li id="J_Subnav_zatan"><a href="http://bbs.taobao.com/catalog/424015.htm" target="_blank">淘宝杂谈</a></li>
    				<li id="J_Subnav_lunjian" class="subnav-last"><a href="http://bbs.taobao.com/catalog/963001--1.htm" target="_blank">网商论剑</a></li>
    			</ul>
    			  <ul class="J_IsSubnav" id="J_Sub_zhengce" style="display: none;">
    				<li id="J_Subnav_jujiao" class="subnav-last"><a href="http://bbs.taobao.com/catalog/thread/16029511-259778216.htm" target="_blank">热点聚焦</a></li>
    				
    			</ul>
    			
    			    			<ul class="J_IsSubnav" id="J_Sub_maijia" style="display: none;">
    				<li id="J_Subnav_jingyan"><a href="http://bbs.taobao.com/catalog/963001-1061105.htm#ThreadList" target="_blank">实战经验</a></li>
    				<li id="J_Subnav_xiaoermei" class="subnav-last"><a href="http://bbs.taobao.com/catalog/12005010.htm#ThreadList" target="_blank">淘宝小而美</a></li>
    			</ul>
    			
    			    			<ul class="J_IsSubnav" id="J_Sub_guanfang" style="display: none;">
    				<li id="J_Subnav_taobaogonggao"><a href="http://bbs.taobao.com/catalog/438501.htm" target="_blank">淘宝公告</a></li>
    				<li class="subnav-last" id="J_Subnav_cuxiaohui"><a href="http://bbs.taobao.com/catalog/11298010.htm" target="_blank">值得买</a></li>
			</ul>
    		</div>
		</div>
	</div>
</div>



		<div id="content">
		<div id="crumb">
			<a class="bbs-index" href="#" target="_top">淘宝论坛</a>
<span>&gt;</span>
	        <a href="#">
        	淘宝公告栏
        </a>
	<span>&gt;</span>
<a id="J_articleTitle" href="#">
	 <?php  echo $row['post_title'];  ?>
</a>

		</div>
    	<div id="detail" data-type="isTreadDetail">
			            <div class="detail-title">
				        	<h4>
            							<img src="http://a.tbcdn.cn/apps/bbs/img/icon/post_hot.png?t=20100125.png" title="热门帖">
	
            					            					<?php  echo $row['post_title'];  ?>
            					            
            					            					            					                			</h4>
							<div class="visitor">
								查看:<em>899308</em> 							</div>

						</div>
		  <div class="bbd">

															<!--主帖-->
						  <div class="detail-post first" style="z-index: 250;">
    								<!-- 第一层楼主帖区 -->
    								<div class="floor one" id="reply0">
    									<div class="floor-wrap">
    									  <div class="bd">
										    <div class="article">
													<div class="substance">
													   <div class="ke-post">
                                                     <?php  echo wpautop($row['post_content']);  ?>
													 </div>
												</div>
										    </div>
   										  </div>
											<div class="bd">
											  <script type="text/javascript" charset="utf-8" src="http://tui.cnzz.net/cs.php?id=1000002923"></script><div id="aliyun_cnzz_tui_1000002923" style="display:block;float:none;border:0 none;margin:0;padding:0;visibility:visible;overflow:visible;*zoom:1;position:relative;z-index:1;"></div>
                                            </div>
									  </div>
    								</div>
                            <div class="sidebar"></div>
						  </div>
							

		  </div>


						                        												    						    							
    														</div>

	</div>







		


<style>
p.verify a{margin-top:0;}
</style>



<a href="http://bbs.taobao.com/catalog/thread/1093005-259414414.htm" target="_blank" class="J_siteFeedback"><s></s>改进建议</a>

		<!-- from vmcommon -->
<div id="footer">
	<div class="g_foot">
    <div class="g_foot-nav">
        <a href="#">关于我们</a>
        <a href="#">合作伙伴</a>
        <a href="#">营销中心</a>
        <a href="#">诚征英才</a>
        <a href="#">联系我们</a>
        <span> 沪ICP备13015807号</span>
    </div>
    <span class="g_foot-line"></span>
</div>
<style>
.g_foot{
  width: 960px;
  margin: 0 auto;
  font: 12px/1.5 tahoma,arial,宋体b8b\4f53;
  padding: 7px 0 9px;
  color: #b0b0b0;
  text-align: left !important;
  position: relative;
  clear:both;
}
.g_foot a{
  margin: 0 2px;
  color: #3e3e3e;
  text-decoration:none;
}
.g_foot a:hover{
  color: #F60;
  text-decoration: underline;

}
.g_foot-ali{
  margin-right: 100px;
  padding-left: 0;
  border-bottom: 1px solid #D3D3D3;
  padding-bottom: 8px;
  height: 18px;
}
.g_foot-nohover{
  cursor: default;
}
.g_foot-nohover:hover{
  color:#3e3e3e !important;
  text-decoration:none !important;
}
.g_foot-ali a,.g_foot-ali b{
  float: left;

}
.g_foot-ali b {
  margin: 0 2px;
  color:#d3d3d3;
  font-weight: normal;
  *margin-top:-1px;
  margin-top:-1px \0/;
}
.g_foot-nav{
  margin-top: 8px;
  line-height: 20px;
}
.g_foot-nav span{
  margin-left: 50px;
}
.g_foot-toy{
  position: absolute;
  background: url(http://img01.taobaocdn.com/tps/i1/T1MMPaXkNjXXaXezbh-48-70.png) no-repeat;
  _background: url(http://img01.taobaocdn.com/tps/i1/T1XgzaXX0kXXaXezbh-48-70.png) no-repeat;
  width: 69px;
  height: 100px;
  display: block;
  right: 0px;
  top:0px;
}
/* IE9 only */
:root .g_foot-toy {
    right:-20px\9; 
 } 
.g_foot-line{
  display: none;
  position: absolute;
  background: url(http://img01.taobaocdn.com/tps/i1/T1I_56Xl0wXXXXXXXX-104-1.png) no-repeat;
  width: 104px;
  height: 1px;
  right: 45px;
  top:33px;
}

.footer-more {
  cursor: pointer;
  z-index: 1;
  position: relative;
  padding-top: 1px;
  width: 82px;
  float: left;
  *top:-1px;
  top:-2px \0/;

}
.footer-more-trigger {
  position: absolute;

  padding: 6px 11px 4px 14px;
  width: 37px;
  line-height: 1.3;
  border: 1px solid #fff;
  left:-12px;
  top:-5px;
}

.footer-more-trigger .arrow{
    position: absolute;
    display: inline-block;
    font-size: 0;
    line-height: 0;
    width: 0;
    height: 0;
    border: dashed 4px;
}
.footer-more-trigger .arrow-d {
  border-color: #666 transparent transparent transparent;
  border-top-style: solid;
  right: 12px;
  top: 11px;
}
.footer-more-panel {
  text-align: left;
  position: absolute;
  right: 26px;
  bottom: -90px;
  padding: 7px 3px 2px 2px;
  border: 1px solid #C5C5C5;
  width: 57px;
  background: 
  white;
  line-height: 1.9;
  display: none;
}
.footer-more-panel a {
  float: none;
  margin-right: 3px;
}
.footer-more-hover .footer-more-trigger,.footer-more:hover .footer-more-trigger {
  border-color: #c5c5c5;
  background: #fff;
  border-bottom: 0;
}
.footer-more-hover .footer-more-panel,.footer-more:hover .footer-more-panel  {
  display: block;
}

.footer-more-hover .footer-more-trigger .arrow-d,.footer-more:hover .footer-more-trigger .arrow-d {
  -moz-transform: rotate(180deg);
  -moz-transform-origin: 50% 30%;
  -o-transform: rotate(180deg);
  -o-transform-origin: 50% 30%;
  -webkit-transform: rotate(180deg);
  -webkit-transform-origin: 50% 30%;
  transform: rotate(180deg);
  transform-origin: 50% 30%;
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation = 2);
  *top: 8px;
  top:8px \0/;
}
</style>
	<div id="server-num">bbs167120.cm4</div>
</div>
<!-- end vmcommon -->


	
</body></html>