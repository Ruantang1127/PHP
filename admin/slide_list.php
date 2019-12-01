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
<script type="text/javascript">
function AutoResizeImage(maxWidth,maxHeight,objImg){
	var img=new Image();
	img.src=objImg.src;
	var Ratio=1;
	var w=img.width;
	var h=img.height;
	var hRatio=maxHeight/h;
	var wRatio=maxWidth/w;
	if(maxWidth==0&&maxHeight==0){
		Ratio=1;
	}else if(maxWidth==0){
		if(hRatio<1) Ratio=hRatio;
	}else if(maxHeight==0){
		if(wRatio<1) Ratio=wRatio;
	}else if(wRatio<1 || hRatio<1){
		Ratio=(wRatio<=hRatio?wRatio:hRatio);
	}
	if(Ratio<1){
		w=w*Ratio;
		h=h*Ratio;
	}
	objImg.height=h;
	objImg.width=w;
}
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
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr id="sx">
    <td height="30" colspan="6">&nbsp;产品列表</td>
  </tr>
  <tr>
  	<td width="20%" height="33" align="center">&nbsp;标题</td>
    <td width="10%" height="33" align="center">&nbsp;产品信息</td>
    <td width="30%">&nbsp;缩略图</td>
    <td width="10%">&nbsp;价钱（元）</td>
    <td width="30%" colspan="2">&nbsp;操作</td> 
  </tr>
	<?php
	//页面显示记录条数
	$total_num=mysqli_num_rows(mysqli_query($conn,"select id from productshow"));
	$pagesize=8;
	$page_num=ceil($total_num/$pagesize);
	$page=isset($_GET['page'])?$_GET['page']:1;
	if($page<1||$page==''){
		$page=1;
	}
	if($page>$page_num){
		$page=$page_num;
	}
	$offset=$pagesize*($page-1);
	$prepage=($page<>1)?$page-1:$page;
	$nextpage=($page<>$page_num)?$page+1:$page;
	$result1=mysqli_query($conn,"select * from productshow limit $offset,$pagesize");
	
    $result=mysqli_query($conn,"select * from productshow");
	if($total_num>0){
	while($row=mysqli_fetch_array($result)){
		while($row=mysqli_fetch_array($result1)){
    ?>
  <tr>
  	<td height="100">&nbsp;<?php echo $row['title'];?></td>
  	<td>&nbsp;<?php if($row['link']==''){echo "无";}else{?><a target="_new" href="<?=$row['link']?>">查看</a><?php }?></td>
    <td>&nbsp;<img src="<?=$row['thumbnail']?>" width="0" height="0" onload="AutoResizeImage(0,60,this)" ></td>
    
    <td>&nbsp;<?php echo $row['order_'];?></td>
    <td width="15%">&nbsp;<input type="submit" name="btn2" id="btn2" value="修改" onClick="window.location.href='slide_modify.php?id=<?=$row['id']?>'"></td>
    <td width="15%">&nbsp;<input type="button" name="btn3" id="btn3" value="删除" onClick="window.location.href='?act=del&id=<?=$row['id']?>'"></td>
  </tr>
  <?php
	}}}else{
  ?>
  <tr>
  	<td height="35" colspan="6" align="center" style="color:#C00">暂无记录！</td>
  </tr>
  <?php      
	
	}
	
  ?>
  	<tr>
    	<td height="40" colspan="6" align="center"><?=$page?>/<?=$page_num?>&nbsp;&nbsp;<a href="?page=1">首页</a>&nbsp;&nbsp;<a href="?page=<?=$prepage?>">上一页</a>&nbsp;&nbsp;<a href="?page=<?=$nextpage?>">下一页</a>&nbsp;&nbsp;<a href="?page=<?=$page_num?>">尾页</a></td>
    </tr>
    
</table>
</body>
</html>
<?php
	//删除幻灯片
	if(isset($_GET['act'])=='del'){
			$sql="delete from productshow where id='".$_GET['id']."'";
			if(mysqli_query($conn,$sql)){
				echo"<script>alert('删除成功！');window.location.href='slide_list.php'</script>";
			}else{
				echo"<script>alert('删除失败！');window.location.href='slide_list.php'</script>";
			}
	}
	mysqli_close($conn);
?>