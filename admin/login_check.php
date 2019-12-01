<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
</head>

<body>
<?php
	  $conn=mysqli_connect("localhost","root","123456");
      if(!$conn){
        die('数据库连接失败:'.mysqli_error());
      }
      $db_select=mysqli_select_db($conn,"shuishu");
      if(!$db_select){
        die('数据库选择失败:'.mysqli_error());
      }
      $admin_name=$_POST['admin_name'];
      $admin_pass=$_POST['admin_pass'];
      $sql="select * from admin where admin_name='".$admin_name."' and admin_pass='".$admin_pass."'";
	  $result=mysqli_query($conn,$sql);
	  
	  	$num=mysqli_num_rows($result);
		
		//printf($num);
		if($num>0){
			$_SESSION['ischecked']="ok";
			$_SESSION['admin_name']=$_POST['admin_name'];
			//$page=isset($_GET["page"])?$_GET["page"]:1;
			echo "<script>alert('登陆成功!');window.location.href='index.php'</script>";
			exit;
		}else{
	  		echo "<script>alert('账号或密码不正确!');window.location.href='login.php'</script>";
			exit;
	  	}
	  	
	  
	  mysqli_close($conn);
?>
</body>
</html>