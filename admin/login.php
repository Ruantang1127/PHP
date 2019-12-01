<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>水蔬店铺网站后台</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
    
<link rel="shortcut icon" href="icon.ico" />

	<style type="text/css">
	#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 428px;
	top: 192px;
}
    </style>
	</head>
<script type="text/javascript">
function check(){
	var admin_name=document.getElementById('admin_name').value;
	var admin_pass=document.getElementById('admin_pass').value;
	if(admin_name==""){
		alert('用户名不能为空！');
		document.getElementById("admin_name").focus();
		return false;
	}else if(admin_pass==""){
		alert('密码不能为空！');
		document.getElementById("admin_pass").focus();
		return false;
	}else{
		document.getElementById("form1").submit();
	}
}
</script>
<body>
		<div id="container">
			<form name="form1" id="form1" method="post" action="login_check.php">
				<div class="login"><center>水蔬店铺</center></div>
				<div class="username-text">用户名:</div>
				<div class="password-text">密码:</div>
				<div class="username-field">
					<input type="text" name="admin_name" id="admin_name" />
				</div>
				<div class="password-field">
					<input type="password" name="admin_pass" id="admin_pass" />
				</div>
              <div id="apDiv1"><input id="btn" type="submit" onClick="check()" value="" /></div>
              
			</form>
		</div>
		<div id="footer">
			Copyright &copy; ***** 版权所有
		</div>
	</body>
</html>
