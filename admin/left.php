
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/left.css">
</head>
<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".item>a").click(function(){
		$(this).next().slideToggle("fast");
	});
});
</script>
<body>
<div class="main">
	<div class="item"><a href="right.php" target="main">水蔬店铺后台管理系统</a></div>
   
    <div class="item">
    	<a href="admin.php" target="main"><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>网站后台管理员管理</a>
        <div class="sub">
        	<a href="admin_add.php" target="main">添加管理员</a>
            <a href="admin_list.php" target="main">管理员列表</a>
        </div>
    </div>
   
   
    <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>网站基本配置</a>
        <div class="sub">
        	<a href="config.php" target="main">网站首页基本信息</a>
            <a href="Productdisplay.php" target="main">产品展示信息更换</a>
        </div>
  </div>
 
    <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>最热产品管理模块</a>
        <div class="sub">
        	<a href="single_add.php" target="main">添加最热产品</a>
            <a href="single_list.php" target="main">管理最热产品</a>
        </div>
    </div>
    <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>店主推荐文章管理</a>
        <div class="sub">
        	<a href="article_add.php" target="main">添加文章信息</a>
            <a href="article_list.php" target="main">文章信息列表</a>
        </div>
    </div>
    <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>水果冷知识管理模块</a>
        <div class="sub">
        	<a href="produce_add.php" target="main">添加水果冷知识</a>
            <a href="produce_list.php" target="main">管理水果冷知识</a>
        </div>
    </div>
   
     <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>产品展示管理</a>
        <div class="sub">
        	<a href="slide_add.php" target="main">添加产品</a>
            <a href="slide_list.php" target="main">产品列表</a>
        </div>
    </div>
    <!-- <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>QQ客服管理模块</a>
        <div class="sub">
        	<a href="qq_add.php" target="main">添加QQ客服</a>
            <a href="qq_list.php" target="main">QQ客服列表</a>
        </div>
    </div>
    <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>友情链接管理模块</a>
        <div class="sub">
        	<a href="friend_add.php" target="main">添加友情链接</a>
            <a href="friend_list.php" target="main">友情链接列表</a>
        </div>
    </div>   -->
     <div class="item">
    	<a><span style="color:#09C; font-weight:bold"><img src="images/next.png" width="15" height="15"></span>留言管理</a>
         <div class="sub">
        	<a href="guestbook.php" target="main">客户留言管理</a>
      
        </div>
    </div>
</div>
</body>
</html>