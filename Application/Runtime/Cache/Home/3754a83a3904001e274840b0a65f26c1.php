<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="astray.cn" />
	
	<title>活动列表</title>
    <link rel="stylesheet" href="/Public/public_ad/css/amazeui.min.css"/>
	<link rel="stylesheet" href="/Public/public_ad/css/admin.css">
	<script src="/Public/public_ad/js/jquery.min.js"></script>
	<script src="/Public/public_ad/js/app.js"></script>
    <script src="/Public/public_ad/js/amazeui.min.js"></script>
    
    <script src="/public/js/jquery.js"></script>
    <style>
		*{margin:0; padding:0;}
		.long{
			width:200px;
			}
	</style>
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
<div style="width:80%; margin:0 auto;">
 <table width="100%" class="am-table am-table-bordered am-table-radius am-table-striped">
            <thead>
              <tr class="am-success">
                <th class="table-check"><input type="checkbox" /></th>

                <th class="table-id">活动编号</th>
                <th class="table-title">活动名称</th>
                <th class="table-type">选否</th>
                <th class="table-author am-hide-sm-only">已选/总量</th>
                <th class="table-date am-hide-sm-only long">发表日期</th>
                <th class="table-date am-hide-sm-only long">截止日期</th>
                <th width="130px" class="table-set">操作</th>
              </tr>
            </thead>
            
            
            <tbody>
              <tr>
                <td><input type="checkbox" /></td>
                
                <td><?php echo ($act['id']); ?></td>
                <td><a href="/index.php/Home/Act/act"><?php echo ($act['name']); ?></a></td>
                <td><?php echo ($ifsign); ?></td>
                <td class="am-hide-sm-only"><?php echo ($cur_num); ?>/<?php echo ($act['allpeoplenum']); ?></td>
                <td class="am-hide-sm-only"><?php echo ($act['releasedate']); ?></td>
                <td class="am-hide-sm-only"><?php echo ($act['deadlinedate']); ?></td>
                <td class="long">
                	
                	
                      	
                	<div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <a href="/index.php/Home/Act/act"><button class="am-btn am-btn-default am-btn-xs am-text-success am-round"><span class="am-icon-search" title="查看详情"></span> </button></a>
                     <a href="/index.php/Home/Act/signInOut"><button class="am-btn am-btn-default am-btn-xs am-text-secondary am-round" data-am-modal="{target: '#my-popups'}" title="报名"><span class="am-icon-pencil-square-o"></span></button></a>
                      <a href="/index.php/Home/Act/signInOut?signFlag=2"><button class="am-btn am-btn-default am-btn-xs am-text-danger am-round" title="取消报名"><span class="am-icon-trash-o" ></span></button></a>
                    </div>
                  </div>
                	
                	
                	
                	
                	
                	
                </td>
              </tr>
          
            </tbody>
          </table>
          
      <!--    
          <ul class="am-pagination am-fr">
                <li class="am-disabled"><a href="#">«</a></li>
                <li class="am-active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
          
          -->
          
      
          <hr />


</div>

</body>
</html>