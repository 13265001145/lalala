<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>忘记密码</title>
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

<br/>
<form name="uppersondata" method="post" enctype="multipart/form-data" action="/Home/user/dealforget">
<table width="50%" border="1" cellpadding="
0" cellspacing="0" bordercolor="#f4e4b3" align="center" class="table_b"
style="margin:0 auto">
<tr>
<td class="tb1" colspan="2" align="center">
<span style="color:#FFF; font-size:16px;">找回密码</span>
</td>
</tr>

<tr>
<td class="tb2" align="right">
用户名：
</td>
<td class="tb2">
<?php echo ($user); ?>
<input name="user" type="hidden" value="<?php echo ($user); ?>" />
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb2" align="right">
密保问题：
</td>
<td class="tb2">
<?php echo ($question); ?>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb3" align="right">
密保问题答案：
</td>
<td class="tb3">
<input id="pwdanswer" name="pwdanswer" type="text"/>
&nbsp;&nbsp;
</td>
</tr>
<tr>
<td class="tb3" colspan="2" align="center">
<button class="sure" type="submit">确定</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="button" onclick="back()">返回</button>
</td>
</tr>
</table>
</form>
</body>
</html>