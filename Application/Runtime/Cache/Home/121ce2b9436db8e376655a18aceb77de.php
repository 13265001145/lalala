<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="astray.cn" />
	
	<title>活动介绍</title>
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/back.js"></script>
    
</head>

<body>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="astray.cn" />

	<title></title>
    <script src="/public/js/jquery.js"></script>
    <style>
		*{margin:0; padding:0;}
		.biggest{}
		.hp{
			width:100%;
			height:206px;
			background-image:url(/Public/image/headTitle.JPG);
			background-repeat:no-repeat;
			background-size:100% 100%;
			}
		.operation{
			background-color:#6CF;
			height:40px;
			vertical-align:middle;
			}
		.operation ul{
			float:right;
			list-style:none;
			margin-right:100px;
			}
		.operation ul li{
			display:inline;
			line-height:40px;
			margin:auto 20px;
			}
		
	</style>
</head>

<body>
<div class="biggest">
	<div class="hp">
    </div>
    <div class="operation">
    	<div style="float:left; line-height:40px; left:50px; position:absolute;">您好,<?php echo ($user); ?></div>
        <ul>
        	<li><a href="/Home/user/logout">退出登录</a></li>
            <li><a href="/Home/user/persondata">个人资料/修改密码</a></li>
        </ul>
    </div>
    
   



</div>
</body>
</html>
<h2 align="center">XX活动详细介绍</h2>
<br/>
<br/>
<p align="center">吧啦吧啦吧啦吧啦吧啦吧啦吧啦吧啦吧啦吧啦吧啦吧啦吧啦吧啦......</p>

<br/><br/>
<div style="position:fixed; bottom:30px; left:50%;">
<button><a href="/index.php/Home/Act/signInOut">报名</a></button>
&nbsp;&nbsp;&nbsp;
<button onClick="back()">返回</button>
</div>

</body>
</html>