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
//是否为空isset($_GET['act'])
if(isset($_POST['title'])==""){
	echo"<script>alert('标题不能为空！');history.go(-1)</script>";
exit;
}
if(isset($_POST['name'])==""){
	echo"<script>alert('学名不能为空！');history.go(-1)</script>";
exit;
}if(isset($_POST['content'])==""){
	echo"<script>alert('内容不能为空！');history.go(-1)</script>";
exit;
}

$sql="insert into article(title,name,content) values('".$_POST['title']."','".$_POST['name']."','".$_POST['content']."' )";
mysqli_query($conn,$sql);
echo"<script>alert('添加成功！');window.location.href='article_add.php'</script>";
exit;
mysqli_close($conn);
?>
</body>
</html>