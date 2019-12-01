<?php
require_once('admin/conn.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
</head>

<body>
<?php
	date_default_timezone_set('prc');
	$author=$_POST['author'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$text=$_POST['text'];
	$time= date("Y-m-d H:i:s");
	if($author==""){
		echo"<script>alert('姓名不能为空！');history.go(-1)</script>";
	}else if($email==""){
		echo"<script>alert('联系方式不能为空！');history.go(-1)</script>";
	}else if($subject==""){
		echo"<script>alert('标题不能为空！');history.go(-1)</script>";
	}else if($text==""){
		echo"<script>alert('留言不能为空！');history.go(-1)</script>";
	}
	
	//提交数据库
	$sql="insert into contact(username,useremail,usertitle,usermessage,time) values('".$_POST['author']."','".$_POST['email']."' ,'".$_POST['subject']."','".$_POST['text']."','".$time."')";
	mysqli_query($conn,$sql);
	echo"<script>alert('发送成功！');window.location.href='contact.php'</script>";

	mysqli_close($conn);
?>
</body>
</html>
