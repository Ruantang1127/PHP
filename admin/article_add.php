<?php require_once('session.php');?>
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
<form id="form1" name="form1" method="post" action="article_add_pass.php">
<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="2">&nbsp;添加文章信息</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>标题：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title" size="50"></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;学名：</td>
    <td width="80%">&nbsp;<input name="name" type="text" id="name" value=""></td>
  </tr>
  <tr>
    <td width="20%" height="60" align="center">&nbsp;内容：</td>
    <td width="80%">&nbsp;<label for="content"></label><textarea name="content" cols="60" rows="3" id="content"></textarea></td>
  </tr>
  <tr>
    <td height="35" colspan="2">&nbsp;&nbsp;<input type="submit" name="Submit" value="提交"></td>
    </tr>
</table>
</form>
</body>
</html>