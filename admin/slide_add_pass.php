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
if(isset($_POST['title'])==""){
	echo"<script>alert('标题不能为空！');history.go(-1)</script>";
exit;
}
if(isset($_POST['thumbnail'])==""){
	echo"<script>alert('缩略图没有上传！');history.go(-1)</script>";
exit;
}
if(!is_numeric($_POST['order'])){
	echo"<script>alert('价钱必须是数字！');history.go(-1)</script>";
exit;
}
$sql="insert into productshow(title,link,thumbnail,order_) values('".$_POST['title']."','".$_POST['link']."','".$_POST['thumbnail']."','".$_POST['order']."')";
mysqli_query($conn,$sql);
echo"<script>alert('添加成功！');window.location.href='slide_add.php'</script>";
exit;
mysqli_close($conn);
?>

</body>
</html>