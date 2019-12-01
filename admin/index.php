<?php
require_once('session.php');
require_once('conn.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>水蔬店铺网站后台管理系统</title>
  <link rel="shortcut icon" href="favicon.ico" />
</head>
<frameset rows="120,*,30">
	<frame src="top.php" name="top" style="width:100%" scrolling="no"/>
    <frameset cols="200,*">
    	<frame src="left.php" scrolling="auto" name="left"/>
        <frame src="right.php" name="main" id="main" scrolling="auto" noresize title="main"/>
    </frameset>
    <frame src="bottom.php" name="bottom"/>
</frameset>
<noframes>
</noframes>
</html>