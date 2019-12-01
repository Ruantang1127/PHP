<?php 
session_start();
require_once('session.php');

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
				imageUrl:K('#thumbnail').val(),
				clickFn:function(url,title,width,height,border,align){
					K('#thumbnail').val(url);
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
<form id="form1" name="form1" method="post" action="slide_add_pass.php">
<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="2">&nbsp;添加产品信息</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>标题：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title" size="50"></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;备注：</td>
    <td width="80%">&nbsp;<input name="link" type="text" id="link" value=""></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>产品图：</td>
    <td width="80%">&nbsp;<input name="thumbnail" type="text" id="thumbnail" value="">&nbsp;&nbsp;<input type="button" id="image3" value="上传"><!--(建议大小为70px*70px)--></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>价钱：</td>
    <td width="80%">&nbsp;<input name="order" type="text" id="order"></td>
  </tr>
  <tr>
    <td height="35" colspan="2">&nbsp;&nbsp;<input type="submit" name="Submit" value="提交"></td>
    </tr>
</table>
</form>
</body>
</html>
<?php 
if(isset($_GET['act'])=='add'){		
	if(isset($_POST['title'])==""){
		echo"<script>alert('标题不能为空！');history.go(-1)</script>";
	exit;
	}
	if(isset($_POST['thumbnail'])==""){
		echo"<script>alert('缩略图没有上传！');history.go(-1)</script>";
	exit;
	}
	if(!is_numeric($_POST['order'])){
		echo"<script>alert('排序必须是数字！');history.go(-1)</script>";
	exit;
	}
	mysqli_query($conn,"insert into productshow(title,link,thumbnail,order_) values('".$_POST['title']."','".$_POST['link']."','".$_POST['thumbnail']."','".$_POST['order']."')");
	echo"<script>alert('添加成功！');window.location.href='slide_add.php'</script>";
	exit;
	mysqli_close($conn);
}
?>