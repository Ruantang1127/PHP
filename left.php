<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>无标题文档</title>
<style type="text/css">
body{margin:0px;background:#3bc0c3;}
.main{height:450px;width:200px;}
.main .item a{
display:block;
height:35px;
line-height:35px;
color:#FFFFFF;
text-decoration:none;
font-family:微软雅黑;
font-size:18px;
padding-left:10px;
}
.submenu{
display:none;
padding-left:25px;
}
</style>
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".item>a").click(function(){
		$(this).next().slideToggle("fast");
	});
});
</script>
</head>

<body>
<div class="main">
	<div class="item"><a href="">首页</a></div>
	<div class="item">
	    <a><span style="color:#FFCC00;font-weight:bold">></span>网站基本配置</a>
		<div class="submenu">
			<a href="config.php" target="right">网站配置</a>
		</div>
	</div>
    <div class="item">
	    <a><span style="color:#FFCC00;font-weight:bold">></span>管理员管理</a>
		<div class="submenu">
			<a href="admin.php" target="right">管理员管理</a>
		</div>
	</div>
    <div class="item">
	    <a><span style="color:#FFCC00;font-weight:bold">></span>单页管理</a>
		<div class="submenu">
			<a href="single_add.php" target="right">添加单页</a>
            <a href="single_list.php" target="right">单页列表</a>
		</div>
	</div>
</div>
</body>
</html>
