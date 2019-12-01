<?php require_once('session.php');?>
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
<form id="form1" name="form1" method="post" action="single_add_pass.php">
<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="2">&nbsp;添加最热产品</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>标题：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title" size="50"></td>
  </tr>
   <tr>
    <td width="20%" height="30" align="center">&nbsp;产品图</td>
    <td>&nbsp;<input name="single_logo" type="text" id="single_logo" value="" size="40">&nbsp;&nbsp;<input type="button" id="image3" value="上传">(建议长宽比例为200:112)</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;缩略图</td>
    <td>&nbsp;<input name="single_pic" type="text" id="single_pic" value="" size="40">&nbsp;&nbsp;<input type="button" id="image4" value="上传">(建议长宽比例为600:200)</td>
  </tr>
  <tr>
    <td width="20%" height="100" align="center">&nbsp;<span style="color:#F00">*</span>内容：</td>
    <td width="80%"><textarea name="single_keywords" cols="80" rows="6" type="text" id="single_keywords"></textarea></td>
  </tr>
  <tr>
    <td height="35" colspan="2">&nbsp;&nbsp;<input type="submit" name="Submit" value="提交"></td>
    </tr>
</table>
</form>
</body>
</html>