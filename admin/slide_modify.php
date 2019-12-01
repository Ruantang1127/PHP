<?php 
session_start();
require_once('session.php');
require_once('conn.php');
$result=mysqli_query($conn,"select * from slide where id='".$_GET['id']."'");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
<link rel="stylesheet" href="kindeditor/themes/default/default.css" />
<script charset="utf-8" src="kindeditor/kindeditor-min.js"></script>
<script charset="utf-8" src="kindeditor/lang/zh_CN.js"></script>
<script type="text/javascript">
var editor;
KindEditor.ready(function(K){
	var editor=K.editor({	
		allowFileManager:true
	});
	K('#image3').click(function(){
		editor.loadPlugin('image',function(){
			editor.plugin.imageDialog({
				showRemote:true,
				imageUrl:K('#url3').val(),
				clickFn:function(url,title,width,height,border,align){
					K('#url3').val(url);
					editor.hideDialog();
				}
		    });
		});
	});
});
</script>
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
    <td height="30" colspan="2">&nbsp;修改产品</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>标题：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title" size="50" value="<?=$row['title']?>"></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">备注：</td>
    <td width="80%">&nbsp;<input name="link" type="text" id="link"  value="<?=$row['link']?>"></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>缩略图：</td>
    <td width="80%">&nbsp;<input name="thumbnail" type="text" id="url3" value="<?=$row['thumbnail']?>">&nbsp;&nbsp;<input type="button" id="image3" value="上传"><!--(建议大小为70px*70px)--></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>价钱：</td>
    <td width="80%">&nbsp;<input name="orderid" type="text" id="orderid" value="<?=$row['orderid']?>"></td>
  </tr>
  <tr>
    <td height="35" colspan="2">&nbsp;&nbsp;<input type="submit" name="Submit" value="修改"></td>
    </tr>
</table>
</form>
</html>
<?php
if(isset($_GET['act'])=='modify'){
if(isset($_POST['title'])==""){
	echo"<script>alert('标题不能为空！');history.go(-1)</script>";
exit;
}
if(isset($_POST['thumbnail'])==""){
	echo"<script>alert('缩略图没有上传！');history.go(-1)</script>";
exit;
}
if(!is_numeric($_POST['orderid'])){
	echo"<script>alert('价钱必须是数字！');history.go(-1)</script>";
exit;
}
$sql="update slide set title='".$_POST['title']."',link='".$_POST['link']."',thumbnail='".$_POST['thumbnail']."',orderid='".$_POST['orderid']."' where id='".$_GET['id']."'";
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('修改成功！');window.location.href='slide_list.php'</script>";
		exit;
		}else{
		echo"<script>alert('修改失败！');window.location.href='slide_list.php'</script>";
		exit;
	}
}
mysqli_close($conn);
?>