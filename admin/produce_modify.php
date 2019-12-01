<?php 
session_start();
require_once('session.php');
require_once('conn.php');
$result=mysqli_query($conn,"select * from product where id='".$_GET['id']."'");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
</head>
<style type="text/css">
#sx {
	background-color: #3bc0c3;
	font-weight: bolder;
	color: #fff;
}
table tr td {
	font-size: 14px;
}
</style>

<body>
<form id="form1" name="form1" method="post" action="?act=modify&id=<?php echo $row['id']?>">
<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="2">&nbsp;修改水果冷知识</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>标题：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title" size="50" value="<?php echo $row['title']?>"></td>
  </tr>
  <tr>
    <td width="20%" height="350" align="center">&nbsp;<span style="color:#F00">*</span>内容：</td>
    <td width="80%"><input name="content" type="text" id="title" size="50" value="<?php echo $row['title']?>"></td>
  </tr>
  <tr>
    <td height="35" colspan="2">&nbsp;&nbsp;<input type="submit" name="Submit" value="修改"></td>
    </tr>
</table>
</form>
</body>
</html>
<?php

if(isset($_GET['act'])=='modify'){
			$sql="update produce set title='".$_POST['title']."',content='".$_POST['content']."' where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('修改成功！');window.location.href='produce_list.php'</script>";
				exit;
			}else{
				echo"<script>alert('修改失败！');window.location.href='produce_list.php'</script>";
				exit;
			}
	}
mysqli_close($conn);
?>