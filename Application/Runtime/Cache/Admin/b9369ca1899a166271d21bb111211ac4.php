<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户管理</title>
<link rel="icon" type="image/png" href="/Public/public_ad/i/favicon.png">
<link rel="apple-touch-icon-precomposed" href="/Public/public_ad/i/app-icon72x72@2x.png">
<meta name="apple-mobile-web-app-title" content="Amaze UI" />
<link rel="stylesheet" href="/Public/public_ad/css/amazeui.min.css"/>
<link rel="stylesheet" href="/Public/public_ad/css/admin.css">
<script src="/Public/js/jquery.js"></script>
<script>
$(document).ready(function(e) {
	$(".up").click(function(e) {
        var val=prompt("修改为:",$(this).text());
		var title=$(this).attr("title");
		var upid=$(e.target).parent().children(".id").text();
		
/*$.ajax("/index.php/Admin/Index/userUpdate?upid="+upid+"&title="+title+"&val="+val,{
				//complete无法执行，success也是！！！！！！
				complete:function(xhr)
				{
				//	if(xhr.readyState==4&&xhr.status==200)
				//	{
						$(this).text(val);
				//	}
				//	else 
				//	{
				//		alert("修改失败");	
				//	}
				}
			});	*/
		$(this).load("/index.php/Admin/Index/userUpdate?upid="+upid+"&title="+title+"&val="+val,null,function(responseTxt,statusTxt,xhr){
				if(xhr.readyState==4&&xhr.status==200)
					{
						$(this).text(val);
					}
				else 
					{
						alert("修改失败");	
					}
		});
    });	
	
	$(".del").click(function(e) {
        var delid=$(e.target).parent().parent().children(".id").text();
		
		$(this).load("/index.php/Admin/Index/userDel?delid="+delid,null,function(responseTxt,statusTxt,xhr){
				if(xhr.readyState==4&&xhr.status==200)
					{
						location.reload();
					}
				else 
					{
						alert("删除失败");	
					}
		});
    });
	
	
});
</script>
<style>
.up{}
.up:hover{
	color:#09F;
	}
</style>
</head>

<body>

      <table class="am-table">
        <thead>
          <tr>
            <th>用户ID</th>
            <th>用户名</th>
            <th>用户密码</th>
            <th>密保问题</th>
            <th>密保答案</th>
            <th>创建时间</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr id="litr">
            <td class="up id" title="id"><?php echo ($vo["id"]); ?></td>
            <td class="up" title="user"><?php echo ($vo["user"]); ?></td>
            <td class="up" title="pwd"><?php echo ($vo["pwd"]); ?></td>
            <td class="up" title="question"><?php echo ($vo["question"]); ?></td>
            <td class="up" title="answer"><?php echo ($vo["answer"]); ?></td>
            <td class="up" title="createtime"><?php echo ($vo["createtime"]); ?></td>
            <td>
                <button class="del">删除</button>
            </td>
          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
      <div style=" position:absolute; float:left; left:50%">
      <?php echo ($page); ?>
      </div>
  
</body>
</html>