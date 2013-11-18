<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>mei94 淘宝学院 淘宝学习  淘宝网店装修   淘宝店铺装修免费模版</title>
	<meta name="keywords" content="mei94,淘宝装修模板,淘宝模板,网店装修,淘宝店铺装修免费模板,淘宝店铺免费装修,淘宝装修免费模板,淘宝模板免费下载,淘宝免费模板,网店模板,淘宝店铺装修教程"/>
<meta name="description" content="mei94网店装修网提供装修淘宝店铺所需的全套淘宝装修模板、淘宝客服中心模板、宝贝描述模板、店招图片素材、宝贝分类图片素材、旺铺促销模板等淘宝店铺装修免费模板代码与淘宝装修图片素材"/>		
	<link rel="stylesheet" href="./css/a.tbcdn.cn.css" /><!-- end vmc css 3.1-->
	<script src="http://a.tbcdn.cn/??s/kissy/1.2.0/kissy-min.js,p/global/1.0/global-min.js?t=201211021123.js"></script>
	<link rel="stylesheet" href="./css/nav.css" /><!-- end vmc css 3.1-->
	<script src="http://a.tbcdn.cn/apps/bbs/pie/common/nav.js"></script>
	<link rel="stylesheet" href="./css/style-min.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
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
    				<li id="J_Subnav_zatan"><a href="#" target="_blank">淘宝杂谈</a></li>
    				<li id="J_Subnav_lunjian" class="subnav-last"><a href="#" target="_blank">网商论剑</a></li>
    			</ul>
    			  <ul class="J_IsSubnav" id="J_Sub_zhengce">
    				<li id="J_Subnav_jujiao" class="subnav-last"><a href="#" target="_blank">热点聚焦</a></li>
    				
    			</ul>
    			
    			    			<ul class="J_IsSubnav" id="J_Sub_maijia">
    				<li id="J_Subnav_jingyan"><a href="#" target="_blank">实战经验</a></li>
    				<li id="J_Subnav_xiaoermei" class="subnav-last"><a href="#" target="_blank">淘宝小而美</a></li>
    			</ul>
    			
    			    			<ul class="J_IsSubnav" id="J_Sub_guanfang">
    				<li id="J_Subnav_taobaogonggao"><a href="#" target="_blank">淘宝公告</a></li>
    				<li class="subnav-last" id="J_Subnav_cuxiaohui"><a href="#" target="_blank">值得买</a></li>
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
			 $result = mysql_query("SELECT a.ID,a.post_date,a.post_title,b.guid as picture, m.meta_value as description FROM  `t_posts` a left join `t_posts` b ON b.post_parent = a.ID  left join `t_postmeta` m ON m.post_id = a.ID left join `t_term_relationships` c ON c.object_id = a.ID  where a.post_type='post' and a.post_status='publish' and b.post_type='attachment' and meta_key='desc' and c.term_taxonomy_id='1' order by a.post_date desc LIMIT 0 , 7"); 
			 
		?>
    	<ul id="hot">
		   <?php 
		       while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {

		   ?>
           <li  class="hot-list" >
                <a class="hot-img" target="_blank" href="article-<?php echo alphaID($row['ID']);  ?>.html" title="<?php echo $row['post_title']; ?>">
                    <img class="image" src="<?php echo $row['picture']; ?>">
                </a>
                <div class="hot-info">
                    <div class="title">
                        <h3><a href="article-<?php echo alphaID($row['ID']);  ?>.html" target="_blank"><?php echo $row['post_title']; ?></a></h3>
                    </div>
                    <p class="detail"><?php echo $row['description']; ?></p>
                    <p class="time">发表于 <?php echo $row['post_date']; ?></p>
                </div>
            </li>
			<?php   
			 }
			 
			?>
    	</ul>
    </div>
</div>			
   
<?php
		 
	$result = mysql_query("SELECT a.ID, a.post_title  FROM  `t_posts` a left join `t_term_relationships` c ON c.object_id = a.ID  where a.post_type='post' and c.term_taxonomy_id='6' order by a.post_date desc LIMIT 0 , 7"); 
	 $list_content = array();
     while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		 $list_content[] = array('ID'=>$row['ID'], 'post_title'=>$row['post_title']);
	 }
	  
?>
  <div class="col-sub">
    		<div class="right-box policy">
            
        <h2 class="icon-title"><a href="#" title="淘宝推广" target="_blank"></a></h2>
        <div class="hot-news">
            <a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html" target="_blank">
                <img src="http://gtms01.alicdn.com/tps/i1/T1tBElFbFXXXcWwx.o-290-140.jpg">
                <span><?php  echo cutstr($list_content[0]['post_title'], 28);   ?></span>                
            </a>
        </div>
        
        <ul class="post-list">
            <?php foreach($list_content as $k=>$v){  
			     if(0 != $k){	
			?>
           	<li>
            <s class="dot"></s>
            <p><a href="article-<?php echo alphaID($v['ID']);  ?>.html"  target="_blank"><?php  echo $v['post_title'];   ?></a></p>
          </li>
		  <?php }} ?>         
        </ul>
    </div>
   <?php
		 
	$result = mysql_query("SELECT a.ID, a.post_title  FROM  `t_posts` a left join `t_term_relationships` c ON c.object_id = a.ID  where a.post_type='post' and c.term_taxonomy_id='7' order by a.post_date desc LIMIT 0 , 7"); 
	 $list_content = array();
     while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		 $list_content[] = array('ID'=>$row['ID'], 'post_title'=>$row['post_title']);
	 }
	  
?>  
    <div class="right-box ju">
        <h2 class="icon-title"><a href="#" title="淘宝搜索推广" target="_blank"></a></h2>
          
        
        <div class="hot-news">
            <a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html" target="_blank" title="【1212预演】 2钻卖家的破万抱团营销">
                <img src="http://gtms01.alicdn.com/tps/i1/T1XzkfFipbXXcWwx.o-290-140.jpg">
                <span><?php  echo cutstr($list_content[0]['post_title'], 28);   ?></span>                
            </a>
        </div>
        
        <ul class="post-list">
            <?php foreach($list_content as $k=>$v){  
			     if(0 != $k){	
			?>
           	<li>
            <s class="dot"></s>
            <p><a href="article-<?php echo alphaID($v['ID']);  ?>.html"  target="_blank"><?php  echo $v['post_title'];   ?></a></p>
          </li>
		  <?php }} ?> 

        </ul>
    </div>
   <?php
		 
	$result = mysql_query("SELECT a.ID, a.post_title  FROM  `t_posts` a left join `t_term_relationships` c ON c.object_id = a.ID  where a.post_type='post' and c.term_taxonomy_id='8' order by a.post_date desc LIMIT 0 , 7"); 
	 $list_content = array();
     while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		 $list_content[] = array('ID'=>$row['ID'], 'post_title'=>$row['post_title']);
	 }
	  
?>  
    	<div class="right-box service">   
        <h2 class="icon-title"><a href="#" title="淘宝直通车推广" target="_blank"></a></h2>
          
        
        <div class="hot-news">
            <a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html" target="_blank" title="【1212预演】 2钻卖家的破万抱团营销">
                <img src="http://img01.taobaocdn.com/imgextra/i1/19517032044987510/T29NaoXpJXXXXXXXXX_!!89517-0-martrix_bbs.jpg">
                <span><?php  echo cutstr($list_content[0]['post_title'], 28);   ?></span>                
            </a>
        </div>
        
        <ul class="post-list">
            <?php foreach($list_content as $k=>$v){  
			     if(0 != $k){	
			?>
           	<li>
            <s class="dot"></s>
            <p><a href="article-<?php echo alphaID($v['ID']);  ?>.html"  target="_blank"><?php  echo $v['post_title'];   ?></a></p>
          </li>
		  <?php }} ?>   
         
        </ul>
    </div>
  
		</div>
    </div>
	<?php
             
	    $result = mysql_query("SELECT a.ID, a.post_title  FROM  `t_posts` a left join  `t_postmeta` b  ON b.post_id = a.ID left join `t_term_relationships` c ON c.object_id = a.ID  where a.post_type='post' and b.meta_key='order' and c.term_taxonomy_id='2' order by b.meta_value  LIMIT 0 , 7"); 
 
	?>
    <div class="layout layout-ss">
				<div class="ss-box deep">
            <h2 class="icon-title" title="新手淘宝开店"><strong></strong></h2>
			 <div class="news-img-info">      
        <img src="http://img02.taobaocdn.com/tps/i2/T1uqxMXwxbXXaCwpjX.png">                     
    <div class="news-info">
        <h4><a href="#">新人如何开淘宝店呀？</a></h4>
        <p>
             新人开淘宝店复杂吗？一点也不会，只要看看下面的流程，大妈也可以在家开淘宝店哦！ 
        </p>
    </div>
</div>


<ul class="post-list">
  <?php
        while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
  ?>
        <li>
      <s class="dot"></s>
      <p><a href="article-<?php echo alphaID($row['ID']);  ?>.html" target="_blank"  title="<?php  echo $row['post_title'];  ?>">
	  <?php  echo $row['post_title'];  ?>
	  </a></p>
       
    </li>
   <?php
         }
    ?>
</ul>
        </div>
		
                <div class="ss-box honest">
            <h2 class="icon-title"><a href="#" title="诚信防骗" target="_blank"></a></h2>
<?php
		 
	$result = mysql_query("SELECT a.ID, a.post_title, b.meta_value as description  FROM  `t_posts` a left join `t_term_relationships` c ON c.object_id = a.ID  left join  `t_postmeta` b  ON b.post_id = a.ID  where a.post_type='post' and b.meta_key='desc' and c.term_taxonomy_id='3' order by a.post_date desc LIMIT 0 , 7"); 
	 $list_content = array();
     while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		 $list_content[] = array('ID'=>$row['ID'], 'post_title'=>$row['post_title'], 'description' => $row['description'] );
	 }
?>
<div class="news-img-info">
    <a class="news-img" href="" target="_blank">                    
        <img src="http://img03.taobaocdn.com/tps/i3/T1i5pSFnJcXXbCFbsb-100-100.jpg">                     
    </a>
    <div class="news-info">
        <h4><a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html" target="_blank"><?php  echo cutstr($list_content[0]['post_title'], 22);   ?></a></h4>
        <p>
            <?php  echo $list_content[0]['description'];   ?>
            <a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html"  target="_blank">[详细]</a>
        </p>
    </div>
</div>
			<ul class="post-list">
			<?php foreach($list_content as $k=>$v){  
			     if(0 != $k){	
			?>
			<li>
            <s class="dot"></s>
            <p><a href="article-<?php echo alphaID($v['ID']);  ?>.html"  target="_blank"><?php  echo $v['post_title'];   ?></a></p>
          </li>
		<?php }} ?>
	 
		  
	</ul>
        </div>
    
    <div class="ss-box line-active" id="J_Slide">
    <ul class="slide-nav">
        <li class="ks-active">淘宝热门话题<s class="icon"></s></li>
       
    </ul>
    <div class="slide-content">

        <div class="online-active">
  
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

<?php	 
	$result = mysql_query("SELECT a.ID, a.post_title, b.meta_value as description  FROM  `t_posts` a left join `t_term_relationships` c ON c.object_id = a.ID  left join  `t_postmeta` b  ON b.post_id = a.ID  where a.post_type='post' and b.meta_key='desc' and c.term_taxonomy_id='4' order by a.post_date desc LIMIT 0 , 7"); 
	 $list_content = array();
     while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		 $list_content[] = array('ID'=>$row['ID'], 'post_title'=>$row['post_title'], 'description' => $row['description'] );
	 }
?>
<div class="ss-box share">
     <h2 class="icon-title"><a href="#" title="干货分享" target="_blank"></a></h2>
<div class="news-img-info">
    <a class="news-img" href="#" target="_blank" title="[火爆中]U站来招商了">                    
        <img src="http://img01.taobaocdn.com/imgextra/i1/732311414/T2B_7_Xd8XXXXXXXXX_!!732311414.jpg">                     
    </a>
    <div class="news-info">
        <h4><a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html" target="_blank"><?php  echo cutstr($list_content[0]['post_title'], 22);   ?></a></h4>
        <p>
            <?php  echo $list_content[0]['description'];   ?>
            <a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html"  target="_blank">[详细]</a>
        </p>
    </div>
</div>
			<ul class="post-list">
			<?php foreach($list_content as $k=>$v){  
			     if(0 != $k){	
			?>
			<li>
            <s class="dot"></s>
            <p><a href="article-<?php echo alphaID($v['ID']);  ?>.html"  target="_blank"><?php  echo $v['post_title'];   ?></a></p>
          </li>
		<?php }} ?>
	</ul>
        </div>
		
				<div class="ss-box experience">
            <h2 class="icon-title"><a href="http://bbs.taobao.com/catalog/424022.htm?spm=1.356803.294499.1" title="经验畅谈" target="_blank"></a></h2>
  

<?php
		 
	$result = mysql_query("SELECT a.ID, a.post_title, b.meta_value as description  FROM  `t_posts` a left join `t_term_relationships` c ON c.object_id = a.ID  left join  `t_postmeta` b  ON b.post_id = a.ID  where a.post_type='post' and b.meta_key='desc' and c.term_taxonomy_id='5' order by a.post_date desc LIMIT 0 , 7"); 
	 $list_content = array();
     while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		 $list_content[] = array('ID'=>$row['ID'], 'post_title'=>$row['post_title'], 'description' => $row['description'] );
	 }
?>
<div class="news-img-info">
    <a class="news-img" href="#" target="_blank" title="从文案提取元素做海报">                    
        <img src="http://img01.taobaocdn.com/imgextra/i1/732311414/T2B_7_Xd8XXXXXXXXX_!!732311414.jpg">                   
    </a>
    <div class="news-info">
        <h4><a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html"><?php  echo cutstr($list_content[0]['post_title'], 22);   ?></a></h4>
        <p>
            <?php  echo $list_content[0]['description'];   ?>
            <a href="article-<?php echo alphaID($list_content[0]['ID']);  ?>.html"  target="_blank">[详细]</a>
        </p>
    </div>
</div>
			<ul class="post-list">
			<?php foreach($list_content as $k=>$v){  
			     if(0 != $k){	
			?>
			<li>
            <s class="dot"></s>
            <p><a href="article-<?php echo alphaID($v['ID']);  ?>.html"  target="_blank"><?php  echo $v['post_title'];   ?></a></p>
          </li>
		<?php }} ?>
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
            <a href="#" class="juhuasuan" title="">
                <img src="http://img02.taobaocdn.com/tps/i2/T1c0jRXhNcXXartXjX.gif">            </a>        </li>
                <li>
            <a href="#" class="juhuasuan" title="">
                <img src="http://img02.taobaocdn.com/tps/i2/T1sr_MXaXrXXartXjX.gif">            </a>        </li>
                <li>
            <a href="#" class="juhuasuan" title="">
                <img src="http://img04.taobaocdn.com/tps/i4/T1STTPXXRmXXartXjX.gif">            </a>        </li>
                <li>
            <a href="#" class="juhuasuan" title="">
                <img src="http://img03.taobaocdn.com/tps/i3/T1OHqFXq4fXXceGl2V-164-124.png">            </a>        </li>
                <li>
            <a href="#" class="juhuasuan" title="">
                <img src="http://img02.taobaocdn.com/tps/i2/T1VRYQXo0eXXartXjX.gif">            </a>        </li>
                <li class="last" ><a href="#" class="juhuasuan" title=""><img src="http://img04.taobaocdn.com/tps/i4/T1yJLRXgXaXXartXjX.gif"></a></a></li>
    </ul>
</div>
</div>

	
	<script type="text/javascript">
        KISSY.use('page/init', function(S, A){
           A && A();
        });
    </script>
	
			<a href="#" target="_blank" class="J_siteFeedback"><s></s>改进建议</a>

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

<?php 

mysql_close($link);
?>
</html>