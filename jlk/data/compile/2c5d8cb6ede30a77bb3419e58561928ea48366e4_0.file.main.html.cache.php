<?php
/* Smarty version 3.1.30, created on 2018-12-29 08:31:32
  from "D:\www\php-jlk\jlk\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c2730e4ef88d4_89796069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c5d8cb6ede30a77bb3419e58561928ea48366e4' => 
    array (
      0 => 'D:\\www\\php-jlk\\jlk\\main.html',
      1 => 1484659583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2730e4ef88d4_89796069 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\www\\php-jlk\\jlk\\lib\\smarty3\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '15245785795c2730e4ea1a61_24009865';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>关于我们</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="洁立康环保 http://www.qzjlk.com" />
<link rel="stylesheet" href="/jlk/css/reset.css" />
<link rel="stylesheet" href="/jlk/css/head.css" />
<link rel="stylesheet" href="/jlk/css/main.css" />
<link rel="stylesheet" href="/jlk/css/posterTvGrid.css">
<link rel="stylesheet" href="/jlk/css/general.css" />
<link rel="stylesheet" href="/jlk/css/slider.css" />
<link rel="stylesheet" href="/jlk/css/service_hot.css" />

	<?php echo '<script'; ?>
>window.jQuery || document.write('<?php echo '<script'; ?>
 src="/jlk/js/jquery-1.11.0.js"><\/script>');<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/jlk/js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/ScrollToPlugin.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/TweenMax.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/rocket.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/jquery.smoove.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/jlk/js/posterTvGrid.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/jlk/js/slider.js"><?php echo '</script'; ?>
>
</head>
    <body>
    	 <div id="rocket">
		  <span id="gotop1">
		    <img src="/zwj/view/images/front/rocked.png" alt="返回顶部小火箭">
		  </span>
	  </div>
    	<div id="header">
	    	<img src="/jlk/images/company.png" alt="logo" class="img_one"/>
	    	<img src="/jlk/images/服务热线.png" alt="服务热线" class="img_two"/>
	    	<ul class="nav">
	    		<li class="first"><a href="/main.php" >网站首页</a></li>
	    		<li><a href="/jlk/about.php" >关于我们</a>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['about_result']->value, 'about_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['about_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/about.php?id=<?php echo $_smarty_tpl->tpl_vars['about_value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['about_value']->value['title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/cases.php" >项目实例</a>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cases_result']->value, 'cases_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cases_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/cases.php?id=<?php echo $_smarty_tpl->tpl_vars['cases_value']->value['cat_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['cases_value']->value['cat_title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/product.php" >产品中心</a>
				 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product_result']->value, 'product_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/product.php?id=<?php echo $_smarty_tpl->tpl_vars['product_value']->value['cat_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['product_value']->value['cat_title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/culture.php" >企业文化</a>
			     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['culture_result']->value, 'culture_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['culture_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/culture.php?id=<?php echo $_smarty_tpl->tpl_vars['culture_value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['culture_value']->value['title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/news.php" >新闻资讯</a>
			    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news_result']->value, 'news_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news_value']->value) {
?>
			     <ul class="nav_son">
	    				<li><a href="/jlk/news.php?id=<?php echo $_smarty_tpl->tpl_vars['news_value']->value['cat_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['news_value']->value['cat_title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/joins.php" >加入我们</a>
			     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['joins_result']->value, 'joins_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['joins_value']->value) {
?>
			       <ul class="nav_son">
	    				<li><a href="/jlk/joins.php?id=<?php echo $_smarty_tpl->tpl_vars['joins_value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['joins_value']->value['title'];?>
</a></li>
	    		    </ul>
	    		 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    		</li>
	    		<li><a href="/jlk/contact.php" >联系我们</a>
			       <ul class="nav_son">
			       	     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_result']->value, 'contact_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact_value']->value) {
?>
	    				<li><a href="/jlk/contact.php?id=<?php echo $_smarty_tpl->tpl_vars['contact_value']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['contact_value']->value['title'];?>
</a></li>
	    			     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	    			     <li><a href="/jlk/message.php">留言反馈</a></li>
	    		    </ul>
	    		</li>
	    	</ul>
    	</div>
    	<div class="clear"></div>
	    <div class="flexslider" >
		  <ul class="slides">

		    <li ><img src="/jlk/images/4.jpg" alt="1.jpg" /></li>
		    <li ><img src="/jlk/images/1.jpg" alt="2.jpg" /></li>
		    <li ><img src="/jlk/images/2.jpg" alt="3.jpg" /></li>
		    <li ><img src="/jlk/images/5.jpg" alt="4.jpg" /></li>
		  </ul>
	   </div>
	   <div class="clear"></div>
	 <!-- <div id="here"></div> -->
	   <div  class="index_about">
	   <div  style="width:90%;margin:0px auto 0px auto;">
		  <div id="company_profile">
		  	<span class="content_title"><a href="/jlk/about.php" class="company">公司介绍</a></span>
		  	<img src="/jlk/images/company_profile.png" alt=""  />
		  	<span class="content_title_detail"><a href="/jlk/about.php" class="company_plus">+</a></span>
		  	<div class="clear"></div>
		  	<div class="company_profile_left" >
		  		<img src="/jlk/images/公司介绍6.png" alt="" style="max-width:100%;"/>
		  	</div>
		  	<div class="company_profile_right" ><?php echo $_smarty_tpl->tpl_vars['about_result']->value[0]['content'];?>
</div>
		  </div>
		  <div id="company_case" >
		  	<span class="content_title"><a href="/jlk/cases.php" class="company">施工案例</a></span>
		  	<img src="/jlk/images/company_cases.png" alt=""  />
		  	<span class="content_title_detail"><a href="/jlk/cases.php" class="company_plus">+</a></span>
		  	<div class="clear"></div>
		  	<img src="/jlk/images/1.png"  class="goLeft"/>
		  	<img src="/jlk/images/2.png"  class="goRight"/>

	<div class="wrap">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cases']->value, 'cv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cv']->value) {
?>
			<li><a href="/jlk/casesinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['cv']->value['id'];?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['cv']->value['cat_id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['cv']->value['img'];?>
" style="width:200px;height:200px;" alt="未上传图片"></a></li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
	</div>
		  </div>
	  </div><div class="clear"></div></div>
	  	<div class="clear"></div>
	  	<div  class="product_display "><img src="/jlk/images/product.jpg" alt="" style="max-width:100%;dispaly:block;" /></div>
		  <div id="posterTvGrid" style="margin:0px auto;" >
		  	
		  </div>
		<div style="width:100%;background:url(/jlk/images/index_news.jpg);height:470px;margin-top:-50px;" >
			<div class="company_contact block1 right_content" data-move-y="200px" data-move-x="-200px">
				<span class="content_title"><a href="/jlk/news.php" >新闻资讯</a></span>
			  	<img src="/jlk/images/company_news.png" alt=""  />
			  	<span class="content_title_detail"><a href="/jlk/news.php" class="company_plus">+</a></span>
			  	<div class="clear"></div>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'nv');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nv']->value) {
?>
					<a href="/jlk/newsinfo.php?id=<?php echo $_smarty_tpl->tpl_vars['nv']->value['id'];?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['nv']->value['cat_id'];?>
&table=news&time=<?php echo $_smarty_tpl->tpl_vars['nv']->value['publish_time'];?>
">
						<img src="/jlk/images/arrow_right.png" alt="" />
						<?php if (mb_strlen($_smarty_tpl->tpl_vars['nv']->value['link_title']) >= 20) {?>
						<div class="left_title"><?php echo mb_substr($_smarty_tpl->tpl_vars['nv']->value['link_title'],0,20,'utf-8');?>
...</div>
						<div class="right_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['nv']->value['publish_time'],'%Y-%m-%d');?>
</div>
						<?php } else { ?>
						<div class="left_title"><?php echo $_smarty_tpl->tpl_vars['nv']->value['link_title'];?>
</div>
						<div class="right_date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['nv']->value['publish_time'],'%Y-%m-%d');?>
</div>
						<?php }?>
						 <div class="clear"></div>
				          </a>
				          <div class="clear"></div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</div>
			<div class="company_news block1" data-move-y="200px" data-move-x="200px"><a href="/jlk/contact.php"><img src="/jlk/images/联系我们2.jpg" alt="" style="max-width:100%;"/></a></div>
		</div>
		
	   <div id="footer"  >
	   	<pre>   电话：0595-85050607     地址：晋江市青阳街道洪山路一百文创园1#楼402-3
版权所有@ 泉州市洁立康环保工程有限公司</pre>
	   </div>
	   <div id="service_hot_show"><img src="/jlk/images/服务热线3.png" alt="" /></div>
	   <div id="service_hot_hide">
	   	<div id="service_hot_hide_top"><div class="close"><img src="/jlk/images/关闭4.png" alt="" /></div></div>
	   	<div id="service_hot_hide_bottom">
	   		<img src="/jlk/images/qqonline.gif" alt="" /><span>在线QQ咨询：</span>
	   		<div class="clear"></div>
	   		<div class="hot_here"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=693170717&site=qq&menu=yes">693170717</a></div>
	   		<img src="/jlk/images/tel.gif" alt="" /><span style="margin-top:11px;display:block;margin-left:5px;">咨询热线：</span>
	   		<div class="clear"></div>
	   		<div style="margin-left:50px;color:rgb(245,45,34);font-weight:bold;padding-top:11px;">0595-85050607</div>
	   		<div style="margin-left:50px;color:rgb(245,45,34);font-weight:bold;padding-top:11px;">13305060599</div>
	   		<img src="/jlk/images/msg.gif" alt="" style="margin-top:11px;" /><a style="margin-top:11px;display:block;float:left;color:rgb(51,51,51);margin-left: 11px;font-size:13px;font-weight: bold;">留言咨询：</a>
	   		<div class="clear"></div>
	   		<a class="message_here" href="/jlk/message.php">点这里留言</a>
	   	</div>
	   </div>
		<?php echo '<script'; ?>
 type="text/javascript">
		var json_arr=<?php echo $_smarty_tpl->tpl_vars['json_arr']->value;?>

		
			var posterTvGrid = new posterTvGrid('posterTvGrid',{className: "posterTvGrid"},[
			{"img":""+json_arr[0]['img'],"title":"Lorem ipsum dolor sit amet","url":"/jlk/productinfo.php?id="+json_arr[0]['id']+"&cat_id="+json_arr[0]['cat_id']},
			{"img":""+json_arr[1]['img'],"title":"Lorem ipsum dolor sit amet","url":"/jlk/productinfo.php?id="+json_arr[1]['id']+"&cat_id="+json_arr[1]['cat_id']},
			{"img":""+json_arr[2]['img'],"title":"Lorem ipsum dolor sit amet","url":"/jlk/productinfo.php?id="+json_arr[2]['id']+"&cat_id="+json_arr[2]['cat_id']},
			{"img":""+json_arr[3]['img'],"title":"Lorem ipsum dolor sit amet","url":"/jlk/productinfo.php?id="+json_arr[3]['id']+"&cat_id="+json_arr[3]['cat_id']}
			
		]
		);
			$(function(){
				$('.block1').smoove({offset:'30%'});
				
			});
			
		<?php echo '</script'; ?>
>	
		
    </body>
</html><?php }
}
