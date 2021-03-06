<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>后台管理</title>
<meta name="description" content="后台管理系统">
<meta name="keywords" content="index">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="icon" type="image/png" href="/Public/public_ad/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/Public/public_ad/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/Public/public_ad/css/amazeui.min.css"/>
<link rel="stylesheet" href="/Public/public_ad/css/admin.css">
<script src="/Public/public_ad/js/jquery.min.js"></script>
<script src="/Public/public_ad/js/app.js"></script>
<script>
	$(document).ready(function(e) {
        
		$(".userlists").click(function(e) {
        	 $("#details").attr("src","UserList.html");
        });
		
		$(".acts").click(function(e) {
            $("#details").attr("src","/admin/act/act");
        });
		
		$(".admins").click(function(e) {
            $("#details").attr("src","/admin/ad/index");
        });
		
    });

</script>
</head>
<body>
<!--[if lte IE 9]><p class="browsehappy">升级你的浏览器吧！ <a href="http://se.360.cn/" target="_blank">升级浏览器</a>以获得更好的体验！</p><![endif]-->
</head>

<body>
<header class="am-topbar admin-header">
  <div class="am-topbar-brand"><img src="/Public/public_ad/i/logo.png"></div>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav admin-header-list">

 <li class="kuanjie">
 	
 	<a class="userlists" href="#">用户列表</a>          
 	<a class="acts" href="#">活动列表</a>  
 </li>
<!--
 <li class="soso">
 	
<p>   
	
	<select data-am-selected="{btnWidth: 70, btnSize: 'sm', btnStyle: 'default'}">
          <option value="b">全部</option>
          <option value="o">产品</option>
          <option value="o">会员</option>
          
        </select>

</p>

<p class="ycfg"><input type="text" class="am-form-field am-input-sm" placeholder="搜索" /></p>
<p><button class="am-btn am-btn-xs am-btn-default am-xiao"><i class="am-icon-search"></i></button></p>
 </li>

-->


      <li class="am-hide-sm-only" style="float: right;"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main"> 

<div class="nav-navicon admin-main admin-sidebar">
    
    
    <div class="sideMenu am-icon-dashboard" style="color:#aeb2b7; margin: 10px 0 0 0;"> 欢迎系统管理员：<?php echo ($aduser); ?></div>
    <div class="sideMenu">
      <h3 class="am-icon-flag"><em></em> <a href="#">用户管理</a></h3>
      <ul>
        <li class="userlists"><a href="#">用户列表</a></li>
        <li class="func" dataType='html' dataLink='msn.htm' iconImg='images/msn.gif'></li> 
      </ul>
      
      <h3 class="am-icon-cart-plus"><em></em> <a href="#">活动管理</a></h3>
      <ul>
        <li class="acts"><a href="#">打酱油活动</a></li>
      </ul>
      
      <h3 class="am-icon-users"><em></em> <a href="#">后台管理</a></h3>
      <ul>
        <li class="admins"><a href="#">管理员信息以及密码修改</a></li>
      </ul>
     
    </div>
    <!-- sideMenu End --> 
    
    <script type="text/javascript">
			jQuery(".sideMenu").slide({
				titCell:"h3", //鼠标触发对象
				targetCell:"ul", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
				effect:"slideDown", //targetCell下拉效果
				delayTime:300 , //效果时间
				triggerTime:150, //鼠标延迟触发时间（默认150）
				defaultPlay:true,//默认是否执行效果（默认true）
				returnDefault:true //鼠标从.sideMen移走后返回默认状态（默认false）
				});
		</script> 

    
    
    
    
    
    
    
</div>

<div class=" admin-content">
	
		<div class="daohang">
			<ul>
				<li><button type="button" class="am-btn am-btn-default am-radius am-btn-xs"> 首页 </li>
			</ul>
		</div>

<div class="admin">
	  <div class="admin-index">
      <dl data-am-scrollspy="{animation: 'slide-right', delay: 100}">
        <dt class="qs"><i class="am-icon-users"></i></dt>
        <dd><?php echo ($num["num1"]); ?></dd>
        <dd class="f12">注册人数</dd>
      </dl>
      <dl data-am-scrollspy="{animation: 'slide-right', delay: 300}">
        <dt class="cs"><i class="am-icon-users"></i></dt>
        <dd><?php echo ($num["num2"]); ?></dd>
        <dd class="f12">总报名人数</dd>
      </dl>
      <dl data-am-scrollspy="{animation: 'slide-right', delay: 600}">
        <dt class="hs"><i class="am-icon-area-chart"></i></dt>
        <dd><?php echo ($num["num3"]); ?></dd>
        <dd class="f12">总活动数量</dd>
      </dl>  
    </div>
    
    
    
    <div class="admin-biaoge">
      <div class="xinxitj">信息概况</div>
 	<iframe id="details" src="UserList.html" frameborder="0" width="100%" height="600px"></iframe>
     </div>  
    
    
    
    
    <div class="foods">
    	<ul>版权所有@广大吃瓜群众</ul>
    	<dl><a href="" title="返回头部" class="am-icon-btn am-icon-arrow-up"></a></dl>
	</div>
</div>
</div>
</div>


<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/public_ad/js/polyfill/rem.min.js"></script>
<script src="/Public/public_ad/js/polyfill/respond.min.js"></script>
<script src="/Public/public_ad/js/amazeui.legacy.js"></script>
<![endif]--> 

<!--[if (gte IE 9)|!(IE)]><!--> 
<script src="/Public/public_ad/js/amazeui.min.js"></script>
<!--<![endif]-->



</body>
</html>