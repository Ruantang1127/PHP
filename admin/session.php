<?php
header("Content-Type:text/html;charset=utf-8");
if (!session_id()) {session_start();}
if(empty($_SESSION['zh'])&& $_SESSION['ischecked']!='ok'){
	echo"<script>alert('请不要非法访问！');window.location.href='login.php'</script>";
	exit;
}
?>