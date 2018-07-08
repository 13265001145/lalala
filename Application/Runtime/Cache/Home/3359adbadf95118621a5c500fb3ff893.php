<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="astray.cn" />

	<title>注册</title>
    <link rel="stylesheet" type="text/css" href="/public/css/form.css" />
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/back.js"></script>
    <script>
		f=new Array("#user","#pwd","#surepwd","#pwdquestion","#pwdanswer");
		fname=new Array("用户名","密码","确认密码","密保问题","密保问题答案");
		
        $(document).ready(function(){
            $(".reg").click(function(){
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
				
				if($("#pwd").val()!=$("#surepwd").val()){
                   alert("两次密码不一致!!!"); 
				   return false;
                }  
            });
			
        })
    </script>
  	<style>
		.hp{
			background-image:url(/Public/image/headTitle.JPG);
			background-repeat:no-repeat;
			background-size:100% 100%;
			}
		.tips{
			color:#F00;
			}
	</style>
</head>

<body>
<form name="register" method="post" enctype="multipart/form-data" action="/index.php/Home/User/dealRegister">
<table width="75%" border="1" cellpadding="
0" cellspacing="0" bordercolor="#f4e4b3" align="center" class="table_b">
<tr>
<td height="206" class="hp" colspan="2"> 
</td>
</tr>
<tr>
<td class="tb1" colspan="2" align="center">
<span style="color:#FFF; font-size:16px;">注册信息</span>
</td>
</tr>
<tr>
<td class="tb2" width="200" align="right">
用户名：
</td>
<td class="tb2">
<input id="user" name="user" type="text"/>
&nbsp;&nbsp;
<span class="tips">* 只能由大小写字母和数字组成</span>
</td>
</tr>
<tr>
<td class="tb3" align="right">
密码：
</td>
<td class="tb3">
<input id="pwd" name="pwd" type="password"/>
&nbsp;&nbsp;
<span class="tips">* 长度不能少于6位或者超过18位</span>
</td>
</tr>
<tr>
<td class="tb2" align="right">
确认密码：
</td>
<td class="tb2">
<input id="surepwd" name="surepwd" type="password"/>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb3" align="right">
密保问题：
</td>
<td class="tb3">
<input id="pwdquestion" type="text" name="pwdQuestion"/>
&nbsp;&nbsp;
<span class="tips">* 密保问题是你找回密码的途径</span>
</td>
</tr>
<tr>
<td class="tb2" align="right">
密保问题答案：
</td>
<td class="tb2">
<input id="pwdanswer" type="text" name="pwdAnswer"/>
&nbsp;&nbsp;
<span class="tips">* 请牢记您的密保答案</span>
</td>
</tr>
<tr>
<td class="tb3" colspan="2" align="center">
<button class="reg" type="submit">注册</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" onclick="back()">返回</button>
</td>
</tr>
</table>
</form>

</body>
</html>