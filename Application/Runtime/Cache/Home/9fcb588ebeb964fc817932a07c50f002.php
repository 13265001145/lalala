<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人资料</title>
<link rel="stylesheet" type="text/css" href="/public/css/form.css" />
<script src="/public/js/back.js"></script>
<script src="/public/js/jquery.js"></script>
<script>
		f=new Array("#pwd","#pwdquestion","#pwdanswer");
		fname=new Array("密码","密保问题","密保问题答案");
		
        $(document).ready(function(){
            $(".up").click(function(){
				for(var i=0;i<f.length;i++)
				{
					if($(f[i]).val()=="")//val返回值不会是null,应该是""
					{
//数组作为JQ选择器的写法
//不用加""!!!!!!
						alert(fname[i]+"不允许为空!");
						return false;
					}
				}
            });
        })
    </script>
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
<br/>
<form name="uppersondata" method="post" enctype="multipart/form-data" action="/Home/user/perChangePwd">
<table width="50%" border="1" cellpadding="
0" cellspacing="0" bordercolor="#f4e4b3" align="center" class="table_b"
style="margin:0 auto">
<tr>
<td class="tb1" colspan="2" align="center">
<span style="color:#FFF; font-size:16px;">个人信息</span>
</td>
</tr>
<tr>
<td class="tb3" width="200" align="right">
ID：
</td>
<td class="tb3">
<?php echo ($personal["id"]); ?>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb2" align="right">
用户名：
</td>
<td class="tb2">
<?php echo ($personal["user"]); ?>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb3" align="right">
密码：
</td>
<td class="tb3">
<input id="pwd" name="newpwd" type="text" value="<?php echo ($personal["pwd"]); ?>"/>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb2" align="right">
密保问题：
</td>
<td class="tb2">
<input id="pwdquestion" name="newpwdquestion" type="text" value="<?php echo ($personal["question"]); ?>"/>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb3" align="right">
密保问题答案：
</td>
<td class="tb3">
<input id="pwdanswer" name="newpwdanswer" type="text" value="<?php echo ($personal["answer"]); ?>"/>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb3" colspan="2" align="center">
<button class="up" type="submit">修改</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" onclick="back()">返回</button>
</td>
</tr>
</table>
</form>
</body>
</html>