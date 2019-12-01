<?php
require_once('session.php');
require_once('conn.php');
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
</head>

<body>
<?php
//检查账号
$admin_name=$_POST['admin_name'];
if($admin_name==""){
	echo"<script>alert('账号不能为空！');history.go(-1)</script>";
	exit;
}else if(mysqli_num_rows(mysqli_query($conn,"select * from admin where admin_name='".$_POST['admin_name']."'"))>0){
	echo"<script>alert('该账号已被添加提交，请更换账号！');window.location.href='admin_add.php'</script>";
	exit;
}
//检查密码
$admin_pass=$_POST['admin_pass'];
if($admin_pass==""){
	echo"<script>alert('密码不能为空！');history.go(-1)</script>";
	exit;
}
//添加管理员
$sql="insert into admin(admin_name,admin_pass) values('".$_POST['admin_name']."','".$_POST['admin_pass']."' )";
mysqli_query($conn,$sql);
echo"<script>alert('添加成功！');window.location.href='admin_add.php'</script>";
exit;
mysqli_close($conn);
?>
</body>
</html>