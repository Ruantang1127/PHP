<?php
session_start();
require_once('session.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>admin</title>
</head>
<frameset rows="120,*">
    <frame src="admin_add.php" scrolling="no" name="admin_add"/>
    <frame src="admin_list.php" scrolling="auto" name="admin_list"/>
</frameset>
<noframes>
</noframes>
</html>