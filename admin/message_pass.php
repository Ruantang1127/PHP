<?php
require_once('session.php');
require_once('conn.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
</head>

<body>
<?php 
if($_POST['contact']==""){
	echo"<script>alert('联系方式不能为空！');history.go(-1)</script>";
exit;
}
if($_POST['content']==""){
	echo"<script>alert('留言内容不能为空！');history.go(-1)</script>";
exit;
}
$sql="insert into guestbook(title,pudate,name,contact,content) values('".$_POST['title']."','".$_POST['pudate']."','".$_POST['name']."','".$_POST['contact']."','".$_POST['content']."')";
mysql_query($sql,$conn);
echo"<script>alert('提交成功！');window.location.href='../message.php'</script>";
exit;
mysql_close($conn);
?>
</body>
</html>