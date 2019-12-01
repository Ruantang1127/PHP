<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" type="text/css" href="css/top.css">
</head>

<body>
<div class="top">
	<div id="left"></div>
    <div id="right">时间：<span id="time"><script>
        document.getElementById('time').innerHTML=new Date().toLocaleString()+'周'+'日一二三四五六'.charAt(new Date().getDay());
		setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString()+'星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
        </script></span></div>
</div>
<div class="p"><div class="p_right">欢迎您：<span style="color:#C33; font-weight:600"><?php echo $_SESSION['admin_name'] ?></span>,你现在登录的是水蔬店铺网站后台管理系统<input type="button" value="退出" onClick="window.parent.location.href='login.php'" style=" height:auto; margin-right:5px;margin-top:3px;"></div></div>
</body>
</html>