<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="astray.cn" />

	<title>无标题 6</title>
    <script src="/Public/js/jquery.js"></script>
<script>
$(document).ready(function(e) {
	$("td").click(function(e) {
		/*var id0=$(this).parent().eq(0).css("color","#FF6");
		var id1=$(this).parent().eq(1).text();
		alert(id0.text());
		alert(id1);
	  		*/
		alert($("td:eq(0)").text());
    });	
});
</script>
<style>
td{
	color:#000;}
td:hover{
	color:#0CF;}
</style>
</head>

<body>
<table>
<tr>
<td>零</td>
<td>一</td>
</tr>
</table>
</body>
</html>