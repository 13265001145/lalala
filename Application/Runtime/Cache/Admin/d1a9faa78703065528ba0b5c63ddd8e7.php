<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="/public/css/form.css" />
</head>

<body>
<form method="post" enctype="multipart/form-data" action="/index.php/Admin/Ad/changePwd">
<table width="100%" border="1" cellpadding="
0" cellspacing="0" bordercolor="#f4e4b3" align="center" class="table_b">
<tr>
<td class="tb1" colspan="2" align="center">
<span style="color:#FFF; font-size:16px;">管理员信息以及密码修改</span>
</td>
</tr>
<tr>
<td class="tb2" width="200" align="right">
管理员：
</td>
<td class="tb2">
admin
</td>
</tr>
<tr>
<td class="tb3" align="right">
密码：
</td>
<td class="tb3">
<input id="newPwd" name="newPwd" type="password"/>
</td>
</tr>
<tr>
<td class="tb2" align="right">
再次输入密码：
</td>
<td class="tb2">
<input id="surepwd" name="surepwd" type="password"/>
</td>
</tr>

<tr>
<td class="tb3" colspan="2" align="center">
<button type="submit">修改</button>
</td>
</tr>
</table>
</form>
</body>
</html>