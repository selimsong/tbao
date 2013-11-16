<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>mei94 淘宝交流  淘宝网店装修   淘宝店铺装修免费模版</title>
	<meta name="keywords" content="mei94,淘宝装修模板,淘宝模板,网店装修,淘宝店铺装修免费模板,淘宝店铺免费装修,淘宝装修免费模板,淘宝模板免费下载,淘宝免费模板,网店模板,淘宝店铺装修教程"/>
<meta name="description" content="mei94网店装修网提供装修淘宝店铺所需的全套淘宝装修模板、淘宝客服中心模板、宝贝描述模板、店招图片素材、宝贝分类图片素材、旺铺促销模板等淘宝店铺装修免费模板代码与淘宝装修图片素材"/>
			
		<link rel="stylesheet" href="./css/a.tbcdn.cn.css" /><!-- end vmc css 3.1-->
	<script src="http://a.tbcdn.cn/??s/kissy/1.2.0/kissy-min.js,p/global/1.0/global-min.js?t=201211021123.js"></script>
		<link rel="stylesheet" href="./css/nav.css" /><!-- end vmc css 3.1-->
	<script src="http://a.tbcdn.cn/apps/bbs/pie/common/nav.js"></script>
	
	<link rel="stylesheet" href="./css/style-min.css" />
	

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
	    <!-- start vmc 3.1 -->
	    <!-- -->
        <!-- 全网顶通 -->
        <!-- end vmc 3.1 -->
<script> 
      TB.Global.init({mc: -1}); 
    </script>

</div>
<div id="header">
	<h1 id="logo">
		<a href="/" class="mainlogo" target="_top" >
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
	<div id="sub-nav">
		<div class="sub-nav-wrap">
    		<div class="sub-nav-box">
    			    			<ul class="J_IsSubnav" id="J_Sub_index">
    				<li id="J_Subnav_zatan"><a href="http://bbs.taobao.com/catalog/424015.htm" target="_blank">淘宝杂谈</a></li>
    				<li id="J_Subnav_lunjian" class="subnav-last"><a href="http://bbs.taobao.com/catalog/963001--1.htm" target="_blank">网商论剑</a></li>
    			</ul>
    			  <ul class="J_IsSubnav" id="J_Sub_zhengce">
    				<li id="J_Subnav_jujiao" class="subnav-last"><a href="http://bbs.taobao.com/catalog/thread/16029511-259778216.htm" target="_blank">热点聚焦</a></li>
    				
    			</ul>
    			
    			    			<ul class="J_IsSubnav" id="J_Sub_maijia">
    				<li id="J_Subnav_jingyan"><a href="http://bbs.taobao.com/catalog/963001-1061105.htm#ThreadList" target="_blank">实战经验</a></li>
    				<li id="J_Subnav_xiaoermei" class="subnav-last"><a href="http://bbs.taobao.com/catalog/12005010.htm#ThreadList" target="_blank">淘宝小而美</a></li>
    			</ul>
    			
    			    			<ul class="J_IsSubnav" id="J_Sub_guanfang">
    				<li id="J_Subnav_taobaogonggao"><a href="http://bbs.taobao.com/catalog/438501.htm" target="_blank">淘宝公告</a></li>
    				<li class="subnav-last" id="J_Subnav_cuxiaohui"><a href="http://bbs.taobao.com/catalog/11298010.htm" target="_blank">值得买</a></li>
			</ul>
    		</div>
		</div>
	</div>
</div>

		<input type="hidden" value="J_Nav_index" id="J_NavLight">

  
<div id="content">
	<div class="layout layout-fs">
                <div class="col-main">
                  <div class="hots">

    	<dl class="hots-title">
    		<dt class="word" title="热点关注"></dt>
    		<dd>
          
                                                          
   		  </dd>
    	</dl>
		<?php
             include_once 'config.php';
			 $result = mysql_query("SELECT a.ID,a.post_date,a.post_title,b.guid as picture, m.meta_value as description FROM  `t_posts` a left join `t_posts` b ON b.post_parent = a.ID  left join `t_postmeta` m ON m.post_id = a.ID  where a.post_type='post' and a.post_status='publish' and b.post_type='attachment' and meta_key='desc'  LIMIT 0 , 7");

			 while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
					var_dump($row);
			  }
			  mysql_close($link);
		?>
    	<ul id="hot">
                		<li  class="hot-list" >
                <a class="hot-img" target="_blank" href="http://bbs.taobao.com/catalog/thread/154517-264924154.htm?spm=1.356795.294482.10" title="如何养精蓄锐再战双12">
                    <img class="image" src="http://gtms01.alicdn.com/tps/i1/T1gCs9FgVaXXaCwpjX.png">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="http://bbs.taobao.com/catalog/thread/154517-264924154.htm?spm=1.356795.294482.11" title="如何养精蓄锐再战双12">如何养精蓄锐再战双12</a></h3>
                        
              
                    </div>
                    <p class="detail">双11过后，中小卖家要如何养精蓄锐再战双12，创下新绩。</p>
                    <p class="time">发表于 2013-11-15 10:31</p>
                </div>
            </li>
                		<li  class="hot-list" >
                <a class="hot-img" target="_blank" href="http://bbs.taobao.com/catalog/thread/1338197-264925096.htm?spm=1.356795.294482.14" title="鬼脚七解读1212策略">
                    <img class="image" src="http://gtms01.alicdn.com/tps/i1/T1Nv31FkpdXXb1upjX.jpg">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="http://bbs.taobao.com/catalog/thread/1338197-264925096.htm?spm=1.356795.294482.15" title="鬼脚七解读1212策略">鬼脚七解读1212策略</a></h3>
                        
                        <div class="view-reply">
                            <span class="post-view"><a class="J_View" href="http://bbs.taobao.com/catalog/thread/1338197-264925096.htm?spm=1.356795.294482.16" target="_blank">0</a> 查看</span>
                            <span class="post-reply"><a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/1338197-264925096.htm?spm=1.356795.294482.17" target="_blank">0</a> 回复</span>
                        </div>
                    </div>
                    <p class="detail">淘宝一直在强调生态，为了长远的发展，必须让更多的卖家能得到成长，今年的1212，口号是“万能的淘宝”，出发点是希望让更多的中小卖家玩起来，最终有尽可能多的卖家有成交...</p>
                    <p class="time">发表于 2013-11-15 12:31</p>
                </div>
            </li>
                		<li  class="hot-list" >
                <a class="hot-img" target="_blank" href="http://bbs.taobao.com/catalog/thread/154517-264943134.htm?spm=1.356795.294482.18" title="报名双12要避免踩地雷">
                    <img class="image" src="http://img01.taobaocdn.com/imgextra/i1/11130030826495397/T2C8KbXA0aXXXXXXXX_!!594721130-0-martrix_bbs.jpg">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="http://bbs.taobao.com/catalog/thread/154517-264943134.htm?spm=1.356795.294482.19" title="报名双12要避免踩地雷">报名双12要避免踩地雷</a></h3>
                        
                        <div class="view-reply">
                            <span class="post-view"><a class="J_View" href="http://bbs.taobao.com/catalog/thread/154517-264943134.htm?spm=1.356795.294482.20" target="_blank">0</a> 查看</span>
                            <span class="post-reply"><a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/154517-264943134.htm?spm=1.356795.294482.21" target="_blank">0</a> 回复</span>
                        </div>
                    </div>
                    <p class="detail">双12报名时间是11月15日12点12分，截止时间为12月10日18点整，双12有很多要注意的细节和误区，中小卖家报名时要避免踏入误区，踩到地雷。</p>
                    <p class="time">发表于 2013-11-15 15:31</p>
                </div>
            </li>
                		<li  class="hot-list" >
                <a class="hot-img" target="_blank" href="http://bbs.taobao.com/catalog/thread/154517-264820847.htm?spm=1.356795.294482.22" title="淘宝来往杂堆如何玩">
                    <img class="image" src="http://img02.taobaocdn.com/imgextra/i2/11130032452703914/T2uSOAXyJaXXXXXXXX_!!594721130-2-martrix_bbs.png">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="http://bbs.taobao.com/catalog/thread/154517-264820847.htm?spm=1.356795.294482.23" title="淘宝来往杂堆如何玩">淘宝来往杂堆如何玩</a></h3>
                        
                        <div class="view-reply">
                            <span class="post-view"><a class="J_View" href="http://bbs.taobao.com/catalog/thread/154517-264820847.htm?spm=1.356795.294482.24" target="_blank">0</a> 查看</span>
                            <span class="post-reply"><a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/154517-264820847.htm?spm=1.356795.294482.25" target="_blank">0</a> 回复</span>
                        </div>
                    </div>
                    <p class="detail">手机的普及，淘宝来往的推出，紧密的联系着买家和卖家，那么我们要如何来往这个平台推动起来呢？关于淘宝来往扎堆要如何玩呢？</p>
                    <p class="time">发表于 2013-11-09 16:16</p>
                </div>
            </li>
                		<li  class="hot-list" >
                <a class="hot-img" target="_blank" href="http://bbs.taobao.com/catalog/thread/154503-264417060.htm?spm=1.356795.294482.26" title="告别背黑锅时代不是梦">
                    <img class="image" src="http://gtms01.alicdn.com/tps/i1/T1vIQ6FXXcXXb1upjX.jpg">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="http://bbs.taobao.com/catalog/thread/154503-264417060.htm?spm=1.356795.294482.27" title="告别背黑锅时代不是梦">告别背黑锅时代不是梦</a></h3>
                        
                        <div class="view-reply">
                            <span class="post-view"><a class="J_View" href="http://bbs.taobao.com/catalog/thread/154503-264417060.htm?spm=1.356795.294482.28" target="_blank">0</a> 查看</span>
                            <span class="post-reply"><a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/154503-264417060.htm?spm=1.356795.294482.29" target="_blank">0</a> 回复</span>
                        </div>
                    </div>
                    <p class="detail">随着网购的兴起，淘宝掌柜这样的群体与日俱增，让很多人加入了这个行列，也给消费者提供了……</p>
                    <p class="time">发表于 2013-10-09 00:03</p>
                </div>
            </li>
                		<li  class="hot-list" >
                <a class="hot-img" target="_blank" href="http://bbs.taobao.com/catalog/thread/154503-264405002.htm?spm=1.356795.294482.30" title="新偶像的小而美之约！">
                    <img class="image" src="http://gtms01.alicdn.com/tps/i1/T1uvdbFsXXXXaCwpjX.png">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="http://bbs.taobao.com/catalog/thread/154503-264405002.htm?spm=1.356795.294482.31" title="新偶像的小而美之约！">新偶像的小而美之约！</a></h3>
                        
                        <div class="view-reply">
                            <span class="post-view"><a class="J_View" href="http://bbs.taobao.com/catalog/thread/154503-264405002.htm?spm=1.356795.294482.32" target="_blank">0</a> 查看</span>
                            <span class="post-reply"><a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/154503-264405002.htm?spm=1.356795.294482.33" target="_blank">0</a> 回复</span>
                        </div>
                    </div>
                    <p class="detail">2013年对于我来说是个很不平常的一年，远离了学校，开了淘宝店。18岁的年龄说大是一定不大的……</p>
                    <p class="time">发表于 2013-10-08 19:42</p>
                </div>
            </li>
                		<li  class="hot-list" >
                <a class="hot-img" target="_blank" href="http://bbs.taobao.com/catalog/thread/154503-264420087.htm?spm=1.356795.294482.34" title="超值优惠，反被骗子敲诈投诉！">
                    <img class="image" src="http://img03.taobaocdn.com/sns_album/i3/T1e9YUXnJlXXaH.X6X.JPEG">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="http://bbs.taobao.com/catalog/thread/154503-264420087.htm?spm=1.356795.294482.35" title="超值优惠，反被骗子敲诈投诉！">超值优惠，反被骗子敲诈投诉！</a></h3>
                        
                        <div class="view-reply">
                            <span class="post-view"><a class="J_View" href="http://bbs.taobao.com/catalog/thread/154503-264420087.htm?spm=1.356795.294482.36" target="_blank">0</a> 查看</span>
                            <span class="post-reply"><a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/154503-264420087.htm?spm=1.356795.294482.37" target="_blank">0</a> 回复</span>
                        </div>
                    </div>
                    <p class="detail">身在广州的女装卖家二嫂，在经历了一个月的时间，终于将店铺做到了一个钻，亮闪闪的蓝钻让她心里别样的滋味，酸甜苦辣，皆在心中。</p>
                    <p class="time">发表于 2013-10-09 11:43</p>
                </div>
            </li>
                        
            
    	</ul>
    </div>
</div>			
        
  <div class="col-sub">
    		<div class="hot-post focus">
        <h4 class="post-title">热点议题：<a href="http://bbs.taobao.com/catalog/thread/16329010-264844309.htm?spm=1.358604.295672.1" target="_blank">1212要尽量避免的失误</a><s class="icon"></s></h4>
        <div class="hot-img" href="http://bbs.taobao.com/catalog/thread/16329010-264844309.htm?spm=1.358604.295672.2">
            <a href="http://bbs.taobao.com/catalog/thread/16329010-264844309.htm?spm=1.358604.295672.3" target="_blank" title="1212要尽量避免的失误">
                <img src="http://img03.taobaocdn.com/imgextra/i3/11130032222267719/T2j6N1XB4aXXXXXXXX_!!594721130-2-martrix_bbs.png">
            </a>
            <div class="hot-detail">
                中小卖家如何避免双12可能存在的风险...<a href="http://bbs.taobao.com/catalog/thread/16329010-264844309.htm?spm=1.358604.295672.4">[详情]</a>
            </div>
        </div>
        <div class="info">
            <div class="post-view-rely">
                <span class="post-view"><a class="J_View" href="http://bbs.taobao.com/catalog/thread/16329010-264844309.htm?spm=1.358604.295672.5" target="_blank">0</a> 查看</span>
                <span class="post-reply"><a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16329010-264844309.htm" target="_blank">0</a> 回复</span>
            </div>
            <dl class="reply-list">
                <dt>卖家小静</dt>
                <dd>搞活动的同时，好好研究规则，注意别给自己上圈套</dd>
                <dt>卖家小芬</dt>
                <dd>其实对于每一个事物来说都会存在利弊两面，如何去扩展对于我们有利的地方</dd>
                <dt>买家花儿</dt>
                <dd>再者不要虚假促销，混水摸鱼，违者经举报淘宝一定要严格处理的。祝大家好运！</dd>
            </dl>

        </div>
    </div>
    		<div class="right-box policy">
            
        <h2 class="icon-title"><a href="http://bbs.taobao.com/catalog/963001-12933510.htm?spm=1.358605.295673.1" title="政策解读" target="_blank"></a></h2>
          
        
        <div class="hot-news">
            <a href="http://bbs.taobao.com/catalog/thread/16329010-264500109-1.htm?spm=1.358605.295673.2" target="_blank" title="【万圣节购物车狂欢】活动等你爆发">
                <img src="http://gtms01.alicdn.com/tps/i1/T1tBElFbFXXXcWwx.o-290-140.jpg">
                <span>【万圣节购物车狂欢】活动等你爆发</span>                
            </a>
        </div>
        
        <ul class="post-list">
            
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/16329010-264499101.htm?spm=1.358605.295673.3" title="【实操干货】天天特价，爆棚的福音来了">【实操干货】天天特价，爆棚的福音来了</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16329010-264499101.htm?spm=1.358605.295673.4">0回复</a>
            </li>
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/16329010-264120192.htm?spm=1.358605.295673.5" title="【经典必读】骗局，你还能骗谁？">【经典必读】骗局，你还能骗谁？</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16329010-264120192.htm?spm=1.358605.295673.6">0回复</a>
            </li>
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/16329010-264526225.htm?spm=1.358605.295673.7" title="【卖家案例】3金冠每日增加上万元">【卖家案例】3金冠每日增加上万元</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16329010-264526225.htm?spm=1.358605.295673.8">0回复</a>
            </li>
                        
        </ul>
    </div>
    		<div class="right-box ju">
            
        <h2 class="icon-title"><a href="http://bbs.taobao.com/catalog/11482010.htm?spm=1.358606.295674.1" title="聚划算专区" target="_blank"></a></h2>
          
        
        <div class="hot-news">
            <a href="http://bbs.taobao.com/catalog/thread/16329010-264635764.htm?spm=1.358606.295674.2" target="_blank" title="【1212预演】 2钻卖家的破万抱团营销">
                <img src="http://gtms01.alicdn.com/tps/i1/T1XzkfFipbXXcWwx.o-290-140.jpg">
                <span>【1212预演】 2钻卖家的破万抱团营销</span>                
            </a>
        </div>
        
        <ul class="post-list">
            
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/16329010-263745959.htm?spm=1.358606.295674.3" title="失物招领：手作的温度">失物招领：手作的温度</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16329010-263745959.htm?spm=1.358606.295674.4">0回复</a>
            </li>
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/16329010-263747641.htm?spm=1.358606.295674.5" title="文艺合伙人成长记">文艺合伙人成长记</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16329010-263747641.htm?spm=1.358606.295674.6">0回复</a>
            </li>
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/16329010-263737452.htm?spm=1.358606.295674.7" title="墨立方：九成流量来自微博">墨立方：九成流量来自微博</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16329010-263737452.htm?spm=1.358606.295674.8">0回复</a>
            </li>
                        
        </ul>
    </div>
    		<div class="right-box service">
            
        <h2 class="icon-title"><a href="#" title="服务之声专区" target="_blank"></a></h2>
          
        
        <div class="news-img-info">
            <a class="news-img" href="http://bbs.taobao.com/catalog/thread/16329010-264871747.htm?spm=1.358607.295675.1" target="_blank" title=""扫货买家" 看你还催我!">                    
                <img src="http://gtms01.alicdn.com/tps/i1/T1gDcNFnlfXXbCFbsb-100-100.jpg">                     
            </a>
            <div class="news-info">
                <h4><a href="http://bbs.taobao.com/catalog/thread/16329010-264871747.htm?spm=1.358607.295675.2">"扫货买家" 看你还催我!</a></h4>
                <p>
                    今天双十一，桃子在网上看了很多神贴，什么输错密码啊，请假在家盯着老婆啊~你们有这样么，嘿嘿~桃子在凌晨的时候苦苦守候在电脑前扫货！太刺激，太惊险了！！…
                    <a href="http://bbs.taobao.com/catalog/thread/16329010-264871747.htm?spm=1.358607.295675.3">[详细]</a>
                </p>
            </div>
        </div>
        
        <ul class="post-list">
            
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/508895-264596629.htm?spm=1.358607.295675.4" title="十万淘女郎邀你一起入驻“来往”">十万淘女郎邀你一起入驻“来往”</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/508895-264596629.htm?spm=1.358607.295675.5">0回复</a>
            </li>
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/508895-264519349.htm?spm=1.358607.295675.6" title="“全家店取服务”教你一起如何玩转">“全家店取服务”教你一起如何玩转</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/508895-264519349.htm?spm=1.358607.295675.7">0回复</a>
            </li>
                        <li>
                <s class="dot"></s>
                <p><a href="http://bbs.taobao.com/catalog/thread/16029511-264412064.htm?spm=1.358607.295675.8" title="个人网店开店仅需1-2天？！">个人网店开店仅需1-2天？！</a></p>
                <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/16029511-264412064.htm?spm=1.358607.295675.9">0回复</a>
            </li>
                        
        </ul>
    </div>
  
		</div>
    </div>
	
    <div class="layout layout-ss">
				<div class="ss-box deep">
            <h2 class="icon-title" title="深度解读"><strong></strong></h2>
			 <div class="news-img-info">
    <a class="news-img" href="http://bbs.taobao.com/catalog/thread/14190010-260735060.htm?spm=1.356809.294507.1" target="_blank" title="[规则解读]百货类目售后">                    
        <img src="http://img02.taobaocdn.com/tps/i2/T1uqxMXwxbXXaCwpjX.png">                     
    </a>
    <div class="news-info">
        <h4><a href="http://bbs.taobao.com/catalog/thread/14190010-260735060.htm?spm=1.356809.294507.2">[规则解读]百货类目售后</a></h4>
        <p>
           百货类目商品居多，回顾过往，整理百货类目所有卖家以往所有引起售后投诉原因发现，以下几大原因引…
            <a href="http://bbs.taobao.com/catalog/thread/14190010-260735060.htm?spm=1.356809.294507.3">[详细]</a>
        </p>
    </div>
</div>

<ul class="post-list">
  
        <li>
      <s class="dot"></s>
      <p><a href="http://bbs.taobao.com/catalog/thread/14190010-260377107.htm?spm=1.356809.294507.4" title="[客服支招]超时退款规则">[客服支招]超时退款规则</a></p>
      <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/14190010-260377107.htm?spm=1.356809.294507.5">0回复</a>
    </li>
        <li>
      <s class="dot"></s>
      <p><a href="http://bbs.taobao.com/catalog/thread/14190010-260413185.htm?spm=1.356809.294507.6" title="[规则解读]母婴类目指导">[规则解读]母婴类目指导</a></p>
      <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/14190010-260413185.htm?spm=1.356809.294507.7">0回复</a>
    </li>
        <li>
      <s class="dot"></s>
      <p><a href="http://bbs.taobao.com/catalog/thread/14190010-260333763.htm?spm=1.356809.294507.8" title="[规则解读]宝贝尺码问题">[规则解读]宝贝尺码问题</a></p>
      <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/14190010-260333763.htm?spm=1.356809.294507.9">0回复</a>
    </li>
        <li>
      <s class="dot"></s>
      <p><a href="http://bbs.taobao.com/catalog/thread/14190010-260324433.htm?spm=1.356809.294507.10" title="[客服支招]如何避免诈骗">[客服支招]如何避免诈骗</a></p>
      <a class="J_Reply" href="http://bbs.taobao.com/catalog/thread/14190010-260324433.htm?spm=1.356809.294507.11">0回复</a>
    </li>
      
</ul>
        </div>
		
                <div class="ss-box honest">
            <h2 class="icon-title"><a href="http://bbs.taobao.com/catalog/424023.htm?spm=1.356805.294503.1" title="诚信防骗" target="_blank"></a></h2>
  

<div class="news-img-info">
    <a class="news-img" href="http://bbs.taobao.com/catalog/thread/154504-263272995.htm?spm=1.356805.294503.2" target="_blank" title="规范音像&书籍的公告">                    
        <img src="http://img03.taobaocdn.com/tps/i3/T1i5pSFnJcXXbCFbsb-100-100.jpg">                     
    </a>
    <div class="news-info">
        <h4><a href="http://bbs.taobao.com/catalog/thread/154504-263272995.htm?spm=1.356805.294503.3">规范音像&书籍的公告</a></h4>
        <p>
           今年4月，阿里巴巴集团CEO马云宣布将与多部门联合打击淘宝网上的假冒伪劣和侵权盗版行为………
            <a href="http://bbs.taobao.com/catalog/thread/154504-263272995.htm?spm=1.356805.294503.4">[详细]</a>
        </p>
    </div>
</div>
			<ul class="post-list">
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154504-264816261.htm" title="紧急！！使用搜狗浏览器的童鞋，请尽快修改相关账户密码~">紧急！！使用搜狗浏览器的童鞋...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154504-264816261.htm">178回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154504-264800723.htm" title="卖家警惕！子账号被盗导致买家的信息泄露！">卖家警惕！子账号被盗导致买家...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154504-264800723.htm">706回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154504-264742489.htm" title="瓶瓶罐罐无小事 化妆品需&ldquo;善待&rdquo;">瓶瓶罐罐无小事 化妆品需&ldquo;善待...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154504-264742489.htm">120回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154504-264743896.htm" title="小心！电热水袋会爆炸">小心！电热水袋会爆炸</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154504-264743896.htm">155回复</a>
        </li>
	</ul>
        </div>
    
                <div class="ss-box line-active" id="J_Slide">
    <ul class="slide-nav">
        <li class="ks-active">线上活动<s class="icon"></s></li>
        <li>线下会议<s class="icon"></s></li>
    </ul>
    <div class="slide-content">

        <div class="online-active">
            
            <div class="news-img-info">
                <a class="news-img" href="http://bbs.taobao.com/catalog/thread/16329010-264907148.htm?spm=1.356806.294505.1" target="_blank" title="1212报名啦！">                    
                    <img src="http://gtms01.alicdn.com/tps/i1/T1_Xw8FlVbXXb1upjX.jpg">                     
                </a>
                <div class="news-info">
                    <h4><a href="http://bbs.taobao.com/catalog/thread/16329010-264907148.htm?spm=1.356806.294505.2">11月15日</a></h4>
                    <h4><a href="http://bbs.taobao.com/catalog/thread/16329010-264907148.htm?spm=1.356806.294505.3">1212报名啦！</a></h4>
                    <p>
                        12:12，报名正式开启！还等神马？火速杀来！…
                        <a href="http://bbs.taobao.com/catalog/thread/16329010-264907148.htm?spm=1.356806.294505.4">[详细]</a>
                    </p>
                </div>
            </div>
            
            <ul class="line-list">
                
                                                   <li class="one">
                                  
                    <span class="line-date">11月15日</span>
                    <a href="http://bbs.taobao.com/catalog/thread/244117-264898555.htm?spm=1.356806.294505.5" class="line-subject">阿里妈妈</a>
                    <a href="http://bbs.taobao.com/catalog/thread/244117-264898555.htm?spm=1.356806.294505.6" class="line-title">超级赢家送红包</a>
                </li>
                                                  	<li class="two">
                                  
                    <span class="line-date">10月09日</span>
                    <a href="http://bbs.taobao.com/catalog/11298010.htm?spm=1.356806.294505.7" class="line-subject">值得买</a>
                    <a href="http://bbs.taobao.com/catalog/thread/15198010-264300070.htm?spm=1.356806.294505.8" class="line-title">淘宝卖萌节邀你来</a>
                </li>
                                                     <li class="three">
               	                 
                    <span class="line-date">07月31日</span>
                    <a href="http://display.taobao.com/chengling/index.htm?spm=1.356806.294505.9" class="line-subject">阿里妈妈</a>

                    <a href="http://display.taobao.com/chengling/index.htm?spm=1.356806.294505.10" class="line-title">我是橙领报名启动</a>
                </li>
                                
            </ul>
        </div>
        <div class="belowline-active">
            
            <div class="news-img-info">
                <a class="news-img" href="http://bbs.taobao.com/catalog/thread/16281010-264942042.htm?spm=1.356806.294505.11" target="_blank" title="虎门服装交易会">                    
                    <img src="http://img.china.alibaba.com/cms/upload/2013/818/238/1832818_1140960970.jpg">                     
                </a>
                <div class="news-info">
                    <h4><a href="#">11月13日</a></h4>
                    <h4><a href="#">虎门服装交易会</a></h4>
                    <p>
                        看虎门服装展会直播！抢秋冬新品！…
                        <a href="http://bbs.taobao.com/catalog/thread/16281010-264942042.htm?spm=1.356806.294505.12">[详细]</a>
                    </p>
                </div>
            </div>
            
            <ul class="line-list">
                
                                
            </ul>
        </div>
    </div>
</div>
		
		        <div class="ss-box share">
            <h2 class="icon-title"><a href="http://daohang.taobao.com/?spm=1.356808.294506.1" title="干货分享" target="_blank"></a></h2>
  

<div class="news-img-info">
    <a class="news-img" href="http://bbs.taobao.com/catalog/thread/510527-264003109.htm?spm=1.356808.294506.2" target="_blank" title="[火爆中]U站来招商了">                    
        <img src="http://img01.taobaocdn.com/imgextra/i1/732311414/T2B_7_Xd8XXXXXXXXX_!!732311414.jpg">                     
    </a>
    <div class="news-info">
        <h4><a href="http://bbs.taobao.com/catalog/thread/510527-264003109.htm?spm=1.356808.294506.3">[火爆中]U站来招商了</a></h4>
        <p>
           论坛牵手百万卖家，一起玩营销，一起做活动，一起涨流量。…
            <a href="http://bbs.taobao.com/catalog/thread/510527-264003109.htm?spm=1.356808.294506.4">[详细]</a>
        </p>
    </div>
</div>
			<ul class="post-list">
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/510527-264942619.htm" title="【干货分享】论新店铺如何养成之男装篇">【干货分享】论新店铺如何养成...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/510527-264942619.htm">40回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/510527-264941116.htm" title="【干货分享】如何站在行业的高度看低谷">【干货分享】如何站在行业的高...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/510527-264941116.htm">30回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/510527-264942616.htm" title="【干货分享】小卖家如何玩转直通车，实现质的飞越">【干货分享】小卖家如何玩转直...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/510527-264942616.htm">32回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/510527-264514003.htm" title="最简单的淘宝赚钱机器《淘宝印钞术》（二）">最简单的淘宝赚钱机器《淘宝印...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/510527-264514003.htm">310回复</a>
        </li>
	</ul>
        </div>
		
				<div class="ss-box experience">
            <h2 class="icon-title"><a href="http://bbs.taobao.com/catalog/424022.htm?spm=1.356803.294499.1" title="经验畅谈" target="_blank"></a></h2>
  

<div class="news-img-info">
    <a class="news-img" href="http://bbs.taobao.com/catalog/thread/154503-264248276.htm?spm=1.356803.294499.2" target="_blank" title="从文案提取元素做海报">                    
        <img src="http://img01.taobaocdn.com/imgextra/i1/732311414/T2B_7_Xd8XXXXXXXXX_!!732311414.jpg">                   
    </a>
    <div class="news-info">
        <h4><a href="http://bbs.taobao.com/catalog/thread/154503-264248276.htm?spm=1.356803.294499.3">从文案提取元素做海报</a></h4>
        <p>
           今天给大家做带来一个海报的制作过程，从文案出发，让大家学会怎么去构思一张海报，从哪里去………
            <a href="http://bbs.taobao.com/catalog/thread/154503-264248276.htm?spm=1.356803.294499.4">[详细]</a>
        </p>
    </div>
</div>
			<ul class="post-list">
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154503-264937877.htm" title="莫让二维码成支付宝被盗&quot;地雷&quot;！消费警示需牢记！">莫让二维码成支付宝被盗&quot;地雷...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154503-264937877.htm">67回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154503-264902369.htm" title="小编说事：我要上头条！双12谁能把我推到风口浪尖上？">小编说事：我要上头条！双12谁...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154503-264902369.htm">186回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154503-264902748.htm" title="小编说事：疯狂双十一！网银如何被代支付&ldquo;抢&rdquo;空空！">小编说事：疯狂双十一！网银如...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154503-264902748.htm">49回复</a>
        </li>
			<li>
            <s class="dot"></s>
            <p><a href="http://bbs.taobao.com/catalog/thread/154503-264908746.htm" title="【名人访谈】装修技巧360度 执着追求创造&ldquo;小而美&rdquo;">【名人访谈】装修技巧360度 执...</a></p>
            <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/154503-264908746.htm">113回复</a>
        </li>
	</ul>
		</div>
		
				 <div class="ss-box ranking-list">
            <h2 class="icon-title"><strong title="一周热门回复排行"></strong></h2>
			<ul class="rank-list">
						    			                    <li class="top first">
    			        			<p><a href="http://bbs.taobao.com/catalog/thread/16329010-264787763.htm" title="优选商品、加满橱窗，报名1212商品预备走">优选商品、加满橱窗，报...</a></p>
                    <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/16329010-264787763.htm">2.1万回复</a>
				</li>
								    			                    <li class="top">
    			        			<p><a href="http://bbs.taobao.com/catalog/thread/16329010-264779564.htm" title="直击1212年终盛典 图解报名2步走起">直击1212年终盛典 图解报...</a></p>
                    <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/16329010-264779564.htm">1.3万回复</a>
				</li>
								    			                    <li class="top third">
    			        			<p><a href="http://bbs.taobao.com/catalog/thread/16329010-264846863.htm" title="1212店铺红包总动员：5种面额，超过500就送橱窗奖励哦">1212店铺红包总动员：5种...</a></p>
                    <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/16329010-264846863.htm">1.3万回复</a>
				</li>
								    			                    <li>
    			        			<p><a href="http://bbs.taobao.com/catalog/thread/16329010-264872002.htm" title="1212报名规则全解读">1212报名规则全解读</a></p>
                    <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/16329010-264872002.htm">1.1万回复</a>
				</li>
								    			                    <li>
    			        			<p><a href="http://bbs.taobao.com/catalog/thread/16329010-264891969.htm" title="马上开始报名1212商品啦 哪些商品不能报名1212？">马上开始报名1212商品啦...</a></p>
                    <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/16329010-264891969.htm">1.1万回复</a>
				</li>
								    			                    <li>
    			        			<p><a href="http://bbs.taobao.com/catalog/thread/16329010-264879534.htm" title="【有问必答】1212橱窗推荐&amp;报名年终盛典FAQ（在线答疑）">【有问必答】1212橱窗推...</a></p>
                    <a class="J_Reply_Num" href="http://bbs.taobao.com/catalog/thread/16329010-264879534.htm">7845回复</a>
				</li>
				   </ul>
        </div>
	</div>
	
	<div class="layout layout-ts"></div>
	
		
	
  <div class="layout seller-tools">
    <h2 class="icon-title"><strong title="营销工具导航">营销工具导航</strong></h2>
    <ul class="seller-tools-list">
        
                <li>
            <a href="http://ju.taobao.com/tg/seller_home.htm?spm=1.356816.294513.1" class="juhuasuan" title="">
                <img src="http://img02.taobaocdn.com/tps/i2/T1c0jRXhNcXXartXjX.gif">            </a>        </li>
                <li>
            <a href="http://www.taobao.com/go/act/sale/snsmaijiatjb.php?spm=1.356816.294513.2" class="juhuasuan" title="">
                <img src="http://img02.taobaocdn.com/tps/i2/T1sr_MXaXrXXartXjX.gif">            </a>        </li>
                <li>
            <a href="http://tejia.taobao.com/rule/calendar.htm?spm=1.356816.294513.3" class="juhuasuan" title="">
                <img src="http://img04.taobaocdn.com/tps/i4/T1STTPXXRmXXartXjX.gif">            </a>        </li>
                <li>
            <a href="http://cu.taobao.com/manager/index.htm?spm=1.356816.294513.4" class="juhuasuan" title="">
                <img src="http://img03.taobaocdn.com/tps/i3/T1OHqFXq4fXXceGl2V-164-124.png">            </a>        </li>
                <li>
            <a href="http://try.taobao.com/shoper_index.htm?spm=1.356816.294513.5" class="juhuasuan" title="">
                <img src="http://img02.taobaocdn.com/tps/i2/T1VRYQXo0eXXartXjX.gif">            </a>        </li>
                <li class="last" ><a href="http://www.tmall.com/go/chn/tmall/temai/join.php?spm=1.356816.294513.6" class="juhuasuan" title=""><a href="http://www.tmall.com/go/chn/tmall/temai/join.php?spm=1.356816.294513.6" class="juhuasuan" title=""><img src="http://img04.taobaocdn.com/tps/i4/T1yJLRXgXaXXartXjX.gif"></a></a></li>
    </ul>
</div>
</div>

	
	<script type="text/javascript">
        KISSY.use('page/init', function(S, A){
           A && A();
        });
    </script>
	
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

	
</body>
</html>