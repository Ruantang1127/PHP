<?php
require_once('session.php');
require_once('conn.php');
$result=mysqli_query($conn,"select * from admin");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
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
</head>
<script type="text/javascript">
	$(document).ready(function(){
		$("#btn1").click(function(){
			var admin_name=$("#admin_name").val();
			var admin_pass=$("#admin_pass").val();
			if(admin_name==""){
				alert('账号不为空！');
				$("#admin_name").focus();
				return false;
			}else if(admin_pass==""){
				alert('密码不为空！');
				$("#admin_pass").focus();
				return false;
			}else{
				$("#form1").submit();
			}
		});
	});
</script>

<body>
<form id="form1" name="form1" method="post" action="admin_add_pass.php">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="4">&nbsp;添加管理员</td>
  </tr>
  <tr>
    <td width="14%" height="33" align="center">&nbsp;<span style="color:#F00">*</span>账号</td>
    <td width="36%">&nbsp;<label for="admin_name"></label><input name="admin_name" type="text" id="admin_name" value="<?php echo $row['admin_name'];?>" size="30"></td>
    <td width="14%" height="33" align="center">&nbsp;<span style="color:#F00">*</span>密码</td>
    <td width="36%">&nbsp;<label for="admin_pass"></label><input name="admin_pass" type="text" id="admin_pass" value="<?php echo $row['admin_pass'];?>" size="30"></td>
  </tr>
  <tr>
    <td height="33" colspan="4">&nbsp;<input type="submit" name="btn1" id="btn1" value="添加"></td>
    </tr>
</table>
</form>
</body>
</html>
