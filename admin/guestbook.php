<?php 
error_reporting(0); 
session_start();
require_once('session.php');
require_once('conn.php');
$result=mysqli_query($conn,"select * from contact");
$row=mysqli_fetch_array($result);
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
    <td height="30" colspan="7">&nbsp;留言列表</td>
  </tr>
  <tr>
  	<td width="15%" height="33">&nbsp;日期</td>
    <td width="10%">&nbsp;姓名</td>
    <td width="10%">&nbsp;联系方式</td>
    <td width="10%">&nbsp;标题</td>
    <td width="34%">&nbsp;留言内容</td>
   
  </tr>
	<?php
	//页面显示记录条数
	$total_num=mysqli_num_rows(mysqli_query($conn,"select id from contact"));
	$pagesize=10;
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
	$result1=mysqli_query($conn,"select * from contact limit $offset,$pagesize");
	
    $result=mysqli_query($conn,"select * from contact");
	if($total_num>0){
	while($row=mysqli_fetch_array($result)){
		while($row=mysqli_fetch_array($result1)){
    ?>
  <tr>
  	<td>&nbsp;<?php echo $row['time'];?></td>
    <td>&nbsp;<?php echo $row['username'];?></td>
    <td>&nbsp;<?php echo $row['username'];?></td>
    <td>&nbsp;<?php echo $row['usertitle'];?></td>
    <td>&nbsp;<?php echo $row['usermessage'];?></td>
    <td>&nbsp;<input type="button" name="btn3" id="btn3" value="删除" onClick="window.location.href='?act=del&id=<?=$row['id']?>'"></td>
  </tr>
  <?php
	}}}else{
  ?>
  <tr>
  	<td height="35" colspan="7" align="center" style="color:#C00">暂无记录！</td>
  </tr>
  <?php      
	
	}
	
  ?>
  	<tr>
    	<td height="40" colspan="7" align="center"><?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">尾页</a></td>
    </tr>
    
</table>
</body>
</html>
<?php
	//删除信息
	//$page1 = isset($_GET['act']);
	if($_GET['act']=='del'){
			$sql="delete from contact where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('删除成功！');window.location.href='guestbook.php'</script>";
			}else{
				echo"<script>alert('删除失败！');window.location.href='guestbook.php'</script>";
			}
	}
	mysqli_close($conn);
?>