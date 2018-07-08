<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>活动管理</title>
<link rel="icon" type="image/png" href="/Public/public_ad/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/Public/public_ad/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/Public/public_ad/css/amazeui.min.css"/>
<link rel="stylesheet" href="/Public/public_ad/css/admin.css">
<script src="/Public/js/jquery.js"></script>
<style>
.up{}
.up:hover{
	color:#09F;
	}
h2{
	color:#03F;
	font-weight:bold;
	}
</style>
</head>

<body>
<h2>活动管理</h2>
<table class="am-table">    
         <tr>
            <th>活动ID</th>
            <th>活动名</th>
            <th>当前报名人数</th>
            <th>活动限制人数</th>
            <th>活动发布时间</th>
            <th>活动截止时间</th>
          </tr>
          <tr>
          	<td class="up id" title="id"><?php echo ($sel1["id"]); ?></td>
            <td class="up" title="name"><?php echo ($sel1["name"]); ?></td>
            <td title="nowpeoplenum"><?php echo ($num); ?></td>
            <td class="up" title="allpeoplenum"><?php echo ($sel1["allpeoplenum"]); ?></td>
            <td class="up" title="releasedate"><?php echo ($sel1["releasedate"]); ?></td>
            <td class="up" title="deadlinedate"><?php echo ($sel1["deadlinedate"]); ?></td>
          </tr>      
</table>
<br />
<h2>活动人员管理</h2>
 <table class="am-table">
        <thead>
          <tr>
            <th>用户ID</th>
            <th>用户名</th>
 			<th>报名时间</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td class="up id" title="id"><?php echo ($sel2["id"]); ?></td>
            <td class="up" title="user"><?php echo ($sel2["user"]); ?></td>
            <td class="up" title="signintime"><?php echo ($sel2["signintime"]); ?></td>
            <td>
                <button><a href="../../../Home/View/Act/act.html">详情</a></button>
            </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
      <div style=" position:absolute; float:left; left:50%">
      <?php echo ($page); ?>
      </div>

</body>
</html>