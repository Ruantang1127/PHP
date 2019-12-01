<?php
require_once('session.php');
require_once('conn.php');
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

<body>

<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="4">&nbsp;管理员列表</td>
  </tr>
  <tr>
    <td width="30%" height="33" align="center">&nbsp;账号<span style="color:#F00">*</span></td>
    <td width="30%">&nbsp;密码<span style="color:#F00">*</span></td>
    <td colspan="2">&nbsp;操作</td> 
  </tr>
	<?php
	//页面显示记录条数
	$total_num=mysqli_num_rows(mysqli_query($conn,"select id from admin"));
	$pagesize=5;
	$page_num=ceil($total_num/$pagesize);
	$page=isset($_GET["page"])?$_GET["page"]:1;
	
	if($page<1||$page==''){
		$page=1;
	}
	if($page>$page_num){
		$page=$page_num;
	}
	$offset=$pagesize*($page-1);
	$prepage=($page<>1)?$page-1:$page;
	$nextpage=($page<>$page_num)?$page+1:$page;
	$result1=mysqli_query($conn,"select * from admin limit $offset,$pagesize");
	
    $result=mysqli_query($conn,"select * from admin");
	while($row=mysqli_fetch_array($result)){
		while($row=mysqli_fetch_array($result1)){
    ?>
  <form id="form.<?=$row['id']?>" method="post" action="?act=modify&id=<?=$row['id']?>">
  <tr>
  	<td>&nbsp;<input name="admin_name" disabled type="text" id="admin_name" value="<?php echo $row['admin_name'];?>" size="40"></td>
    <td>&nbsp;<input name="admin_pass" type="text" id="admin_pass" value="" size="40"></td>
    <td width="8%">&nbsp;<input type="submit" name="btn2" id="btn2" value="修改"></td>
    <td width="32%">&nbsp;<input type="button" name="btn3" id="btn3" value="删除" <?php if($row['admin_name']=='shaoge'){echo "disabled";}?> onClick="window.location.href='?act=del&id=<?=$row['id']?>'"></td>
  </tr></form>
  <?php
	}}
  ?>
  	<tr>
    	<td height="35" colspan="4" align="center"><?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">尾页</a></td>
    </tr>
    
</table>

</body>
</html>
<?php
	//删除管理员
	//isset($_GET['act'])?$_GET['act']:1;
	if(isset($_GET['act'])=='del'){
			$sql="delete from admin where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('删除成功！');window.location.href='admin_list.php'</script>";
			}else{
				echo"<script>alert('删除失败！');window.location.href='admin_list.php'</script>";
			}
	}
	//修改管理员
	
	if(isset($_GET['act'])=='modify'){
			if($_POST['admin_pass']==""){
				echo"<script>alert('密码不能为空！');window.location.href='admin_list.php'</script>";
				exit;
			}
			$sql="update admin set admin_pass='".$_POST['admin_pass']."' where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('修改成功！');window.location.href='admin_list.php'</script>";
				exit;
			}else{
				echo"<script>alert('修改失败！');window.location.href='admin_list.php'</script>";
				exit;
			}
	}
?>