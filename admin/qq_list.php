<?php 
session_start();
require_once('session.php');
require_once('conn.php');
?>
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
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="5">&nbsp;QQ客服列表</td>
  </tr>
  <tr>
  	<td width="30%" height="33">&nbsp;职位</td>
    <td width="20%">&nbsp;QQ号码</td>
    <td width="30%">&nbsp;客服姓名</td>
    <td width="20%" colspan="2">&nbsp;操作</td> 
  </tr>
	<?php
	//页面显示记录条数
	$total_num=mysql_num_rows(mysql_query("select id from qq"));
	$pagesize=8;
	$page_num=ceil($total_num/$pagesize);
	$page=$_GET['page'];
	if($page<1||$page==''){
		$page=1;
	}
	if($page>$page_num){
		$page=$page_num;
	}
	$offset=$pagesize*($page-1);
	$prepage=($page<>1)?$page-1:$page;
	$nextpage=($page<>$page_num)?$page+1:$page;
	$result1=mysql_query("select * from qq limit $offset,$pagesize");
	
    $result=mysql_query("select * from qq");
	if($total_num>0){
	while($row=mysql_fetch_array($result)){
		while($row=mysql_fetch_array($result1)){
    ?>
  <tr>
  	<td>&nbsp;<?php echo $row['title'];?></td>
  	<td>&nbsp;<?php echo $row['num'];?></td>
    <td>&nbsp;<?php echo $row['name'];?></td>
    <td width="10%">&nbsp;<input type="submit" name="btn2" id="btn2" value="修改" onClick="window.location.href='qq_modify.php?id=<?=$row['id']?>'"></td>
    <td width="10%">&nbsp;<input type="button" name="btn3" id="btn3" value="删除" onClick="window.location.href='?act=del&id=<?=$row['id']?>'"></td>
  </tr>
  <?php
	}}}else{
  ?>
  <tr>
  	<td height="35" colspan="5" align="center" style="color:#C00">暂无记录！</td>
  </tr>
  <?php      
	
	}
	
  ?>
  	<tr>
    	<td height="40" colspan="5" align="center"><?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">尾页</a></td>
    </tr>
    
</table>
</body>
</html>
<?php
	//删除QQ客服信息
	if($_GET['act']=='del'){
			$sql="delete from qq where id='".$_GET['id']."'";
			if(mysql_query($sql)){
				echo"<script>alert('删除成功！');window.location.href='qq_list.php'</script>";
			}else{
				echo"<script>alert('删除失败！');window.location.href='qq_list.php'</script>";
			}
	}
	mysql_close($conn);
?>