<?php 
session_start();
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
if($_POST['num']==""){
	echo"<script>alert('QQ号码不能为空！');history.go(-1)</script>";
exit;
}
$sql="insert into qq(title,num,name) values('".$_POST['title']."','".$_POST['num']."','".$_POST['name']."')";
mysql_query($sql,$conn);
echo"<script>alert('添加成功！');window.location.href='qq_add.php'</script>";
exit;
mysql_close($conn);
?>
</body>
</html>