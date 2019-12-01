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
//是否为空
if(isset($_POST['title'])==""){
	echo "<script>alert('标题不能为空！');history.back();</script>";
	exit;
	}
if(isset($_POST['content'])==""){
	echo "<script>alert('内容不能为空！');history.back();</script>";
	exit;
	}

$sql="insert into product(title,content) values('".$_POST['title']."','".$_POST['content']."')";
mysqli_query($conn,$sql);
echo"<script>alert('添加成功！');window.location.href='produce_add.php'</script>";
exit;
mysqli_close($conn);
?>
</body>
</html>