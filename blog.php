<?php 
require_once('admin/conn.php');
$result=mysqli_query($conn,"select * from config where id=1");
$result_product = mysqli_query($conn,"select * from product"); 
$result_single = mysqli_query($conn,"select * from single");
$row_single=mysqli_fetch_array($result_single);
$row_product=mysqli_fetch_array($result_product);
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="shuishu.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $row['site_title'] ?></title>
<meta name="keywords" content="fresh zone, blog theme, free templates, templatemo, CSS, HTML" />
<meta name="description" content="Fresh Zone, Blog Theme, free CSS template by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />



</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    	<div id="site_title" style="margin-top:40px"><img src="<?=$row['site_logo']?>"></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">主页</a></li>
                <li><a href="about.php">店主推荐</a>
                
                </li>
                <li><a href="portfolio.php">产品展示</a>
                 
                </li>
                <li><a href="blog.php" class="selected">水果知识</a></li>
                <li><a href="contact.php">联系我们</a></li>
            </ul>
            <br style="clear: left" />
        </div> 
    </div> 
</div> 

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
    	
        <div id="content" class="float_l">
        	<?php
	//页面显示记录条数
	$total_num_single=mysqli_num_rows(mysqli_query($conn,"select id from single"));
	$pagesize_single=2;
	$page_num_single=ceil($total_num_single/$pagesize_single);
	//$page_single=$_GET['page'];
	$page_single=isset($_GET["page"])?$_GET["page"]:1;
	if($page_single<1||$page_single==''){
		$page_single=1;
	}
	if($page_single>$page_num_single){
		$page_single=$page_num_single;
	}
	$offset_single=$pagesize_single*($page_single-1);
	$prepage_single=($page_single<>1)?$page_single-1:$page_single;
	$nextpage_single=($page_single<>$page_num_single)?$page_single+1:$page_single;
	$result_single=mysqli_query($conn,"select * from single limit $offset_single,$pagesize_single");
	
    $result_single_2=mysqli_query($conn,"select * from single");
	while($row=mysqli_fetch_array($result_single)){
		while($row=mysqli_fetch_array($result_single_2)){
    ?>
        	<div class="post">
	            <div class="post_image"><img src="<?php echo $row['single_logo'];?>" alt="Image 01" /><span class="date">June 25, 2017</span></div>
                <h2><?php echo $row['title'];?></h2>
                <p><?php echo $row['single_keywords'];?>
</p>
                
        	</div>
			<?php
	}}
  	?>
        
			<div class="pagging">
            
            </div>
        </div> 
        
        <div id="sidebar" class="float_r">
        	<h3>水果冷知识</h3>
            <ul class="templatemo_list">
                <?php
	//页面显示记录条数
	$total_num=mysqli_num_rows(mysqli_query($conn,"select id from product"));
	$pagesize=10;
	$page_num=ceil($total_num/$pagesize);
	//$page=$_GET['page'];
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
	$result1=mysqli_query($conn,"select * from product limit $offset,$pagesize");
	
    $result2=mysqli_query($conn,"select * from product");
	while($row=mysqli_fetch_array($result2)){
		while($row=mysqli_fetch_array($result1)){
    ?>
    		<li><?php echo $row['content'];?></li>
     <?php
	}}
  	?>
            </ul>
            
            <div class="cleaner h50"></div>
            
         			
        </div> 
                
        <div class="cleaner"></div>
    </div> 
</div>

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    		<?php echo $row['site_copyright'] ?>
    </div>
</div> 

<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>