<?php 
session_start();
require_once('session.php');?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
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
<form id="form1" name="form1" method="post" action="qq_add_pass.php">
<table align="left" width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="2">&nbsp;添加QQ客服</td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;职位：</td>
    <td width="80%">&nbsp;<input name="title" type="text" id="title"></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;<span style="color:#F00">*</span>QQ号码：</td>
    <td width="80%">&nbsp;<input name="num" type="text" id="num" value=""></td>
  </tr>
  <tr>
    <td width="20%" height="30" align="center">&nbsp;客服姓名：</td>
    <td width="80%">&nbsp;<input name="name" type="text" id="name"></td>
  </tr>
  <tr>
    <td height="35" colspan="2">&nbsp;&nbsp;<input type="submit" name="Submit" value="提交"></td>
    </tr>
</table>
</form>
</body>
</html>