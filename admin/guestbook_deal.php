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
if(isset($_GET['deal'])=="yes"){
	mysqli_query($conn,"update guestbook set deal='是' where id='".$_GET['id']."'");
	echo"<script>alert('已设置为\“已处理\”！');window.location.href='guestbook.php'</script>";
}
if(isset($_GET['deal'])=="no"){
	mysqli_query($conn,"update guestbook set deal='否' where id='".$_GET['id']."'");
	echo"<script>alert('已设置为\"未处理\"！');window.location.href='guestbook.php'</script>";
}
?>
</body>
</html>