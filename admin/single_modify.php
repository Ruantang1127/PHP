<?php 
session_start();
require_once('session.php');
require_once('conn.php');
$result=mysqli_query($conn,"select * from single where id='".$_GET['id']."'");
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
<script>
var editor;
 KindEditor.ready(function(K) {
                    var editor = K.editor({
                        allowFileManager: true
                    });
	K('#image3').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#single_logo').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#single_logo').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });
                    });
	K('#image4').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#single_pic').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#single_pic').val(url);
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
    <td height="30" colspan="2">&nbsp;修改单页信息</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>标题：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title" size="50" value="<?php echo $row['title']?>"></td>
  </tr>
   <tr>
    <td height="33">&nbsp;网站Logo</td>
    <td>&nbsp;<input name="single_logo" type="text" id="site_logo" value="<?php echo $row['single_logo'];?>" size="40">&nbsp;&nbsp;<input type="button" id="image3" value="上传">(建议长宽比例为200:112)</td>
  </tr>
  <tr>
    <td height="33">&nbsp;网站Logo</td>
    <td>&nbsp;<input name="single_pic" type="text" id="site_pic" value="<?php echo $row['single_pic'];?>" size="40">&nbsp;&nbsp;<input type="button" id="image4" value="上传">(建议长宽比例为600:200)</td>
  </tr>
  <tr>
    <td width="20%" height="60" align="center">&nbsp;内容：</td>
    <td width="80%">&nbsp;<textarea name="single_keywords" cols="60" rows="3" id="url3" value=""><?php echo $row['single_keywords']?></textarea></td>
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
			$sql="update single set title='".$_POST['title']."',single_keywords='".$_POST['single_keywords']."',single_logo='".$_POST['single_logo']."',single_pic='".$_POST['single_pic']."' where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('修改成功！');window.location.href='single_list.php'</script>";
				exit;
			}else{
				echo"<script>alert('修改失败！');window.location.href='single_list.php'</script>";
				exit;
			}
	}
?>