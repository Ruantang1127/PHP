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
	background-color: #3bc0c3;
	font-weight: bolder;
	color: #fff;
}
table tr td {
	font-size: 14px;
}
</style>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="5">&nbsp;最热产品管理</td>
  </tr>
  <tr>
  	<td width="10%" height="33" align="center">&nbsp;最热产品ID</td>
    <td width="20%" height="33" align="center">&nbsp;标题</td>
    <td width="40%" colspan="2">&nbsp;操作</td> 
  </tr>
	<?php
	//页面显示记录条数
	$total_num=mysqli_num_rows(mysqli_query($conn,"select id from single"));
	$pagesize=8;
	$page_num=ceil($total_num/$pagesize);
	$page=isset($_GET['page']);
	if($page<1||$page==''){
		$page=1;
	}
	if($page>$page_num){
		$page=$page_num;
	}
	$offset=$pagesize*($page-1);
	$prepage=($page<>1)?$page-1:$page;
	$nextpage=($page<>$page_num)?$page+1:$page;
	$result1=mysqli_query($conn,"select * from single limit $offset,$pagesize");
	
    $result=mysqli_query($conn,"select * from single");
	if($total_num>0){
	while($row=mysqli_fetch_array($result)){
		while($row=mysqli_fetch_array($result1)){
    ?>
  <tr>
  	<td>&nbsp;<?php echo $row['id'];?></td>
  	<td>&nbsp;<?php echo $row['title'];?></td>
    <td width="8%">&nbsp;<input type="submit" name="btn2" id="btn2" value="修改" onClick="window.location.href='single_modify.php?id=<?=$row['id']?>'"></td>
    <td width="32%">&nbsp;<input type="button" name="btn3" id="btn3" value="删除" onClick="window.location.href='?act=del&id=<?=$row['id']?>'"></td>
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
	//删除单页信息
	if(isset($_GET['act'])=='del'){
			$sql="delete from single where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('删除成功！');window.location.href='single_list.php'</script>";
			}else{
				echo"<script>alert('删除失败！');window.location.href='single_list.php'</script>";
			}
	}
?>