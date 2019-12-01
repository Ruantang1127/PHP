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
$sql="insert into single(title,single_logo,single_pic,single_keywords) values('".$_POST['title']."','".$_POST['single_logo']."','".$_POST['single_pic']."','".$_POST['single_keywords']."')";
mysqli_query($conn,$sql);
echo"<script>alert('添加成功！');window.location.href='single_add.php'</script>";
exit;
mysqli_close($conn);
?>
</body>
</html>