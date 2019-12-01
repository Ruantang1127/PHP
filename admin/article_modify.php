<?php 
error_reporting(0);
session_start();
require_once('session.php');
require_once('conn.php');
$result=mysqli_query($conn,"select * from article where id='".$_GET['id']."'");
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
	background-color: #063;
	font-weight: bolder;
	color: #CCC;
}
table tr td {
	font-size: 14px;
}
</style>

<body>
<form id="form1" name="form1" method="post" action="?act=modify&id=<?php echo $row['id']?>">
<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="2">&nbsp;修改文章</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>标题：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title" size="50" value="<?php echo $row['title']?>"></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;学名：</td>
    <td width="80%">&nbsp;<input name="name" type="text" id="comefrom" value="<?php echo $row['name']?>"></td>
  </tr>
  </tr>
  <tr>
    <td width="20%" height="60" align="center">&nbsp;内容：</td>
    <td width="80%">&nbsp;<textarea name="content" cols="60" rows="3" id="content" value=""><?php echo $row['content']?></textarea></td>
  </tr>
  <tr>
    <td height="35" colspan="2">&nbsp;&nbsp;<input type="submit" name="Submit" value="修改"></td>
    </tr>
</table>
</form>
</body>
</html>
<?php
if($_POST['posid']<>""){
	foreach($_POST['posid'] as $i){
		$posid.=$i.",";
	}
	$posid=substr($posid,0,-1);
}else{
	$posid="";
}

if(isset($_GET['act'])=='modify'){
			$sql="update article set title='".$_POST['title']."',name='".$_POST['name']."',content='".$_POST['content']."' where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('修改成功！');window.location.href='article_list.php'</script>";
				exit;
			}else{
				echo"<script>alert('修改失败！');window.location.href='article_list.php'</script>";
				exit;
			}
	}
mysql_close($conn);
?>