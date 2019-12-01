<?php 
require_once('admin/conn.php');



$result=mysqli_query($conn,"select * from config where id=1");
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="shuishu.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><? echo $row['site_title'] ?></title>
<meta name="keywords" content="fresh zone, portfolio, theme, free web design, " />
<meta name="description" content="Fresh Zone, Portfolio, free CSS template by templatemo.com" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", 
	orientation: 'h', 
	classname: 'ddsmoothmenu', 
	contentsource: "markup" 
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>

<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:true,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });   
    
</script>

<script type="text/javascript" src="js/jquery-1-4-2.min.js"></script> 
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

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
                <li><a href="portfolio.php" class="selected">产品展示</a>
                 
                </li>
                <li><a href="blog.php">水果知识</a></li>
                <li><a href="contact.php">联系我们</a></li>
            </ul>
            <br style="clear: left" />
        </div> 
    </div> 
</div> 

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
		<?php
	//页面显示记录条数
	$total_num_productshow=mysqli_num_rows(mysqli_query($conn,"select id from productshow"));
	$pagesize_productshow=2;
	$page_num_productshow=ceil($total_num_productshow/$pagesize_productshow);
	//$page_productshow=$_GET['page'];
	$page_productshow=isset($_GET["page"])?$_GET["page"]:0;
	if($page_productshow<1||$page_productshow==''){
		$page_productshow=1;
	}
	if($page_productshow>$page_num_productshow){
		$page_productshow=$page_num_productshow;
	}
	$offset_productshow=$pagesize_productshow*($page_productshow-1);
	$prepage_productshow=($page_productshow<>1)?$page_productshow-1:$page_productshow;
	$nextpage_productshow=($page_productshow<>$page_num_productshow)?$page_productshow+1:$page_productshow;
	$result_productshow=mysqli_query($conn,"select * from single limit $offset_productshow,$pagesize_productshow");
	
    $result_productshow_2=mysqli_query($conn,"select * from productshow");
	while($row=mysqli_fetch_array($result_productshow)){
		while($row=mysqli_fetch_array($result_productshow_2)){
    ?>
        <div class="gallery_box">
       		<a href="images/portfolio/01.jpg" rel="lightbox[portfolio]"><img src="<?php echo $row['thumbnail'];?>" alt="Portfolio 01" class="imgage-with-frame"/></a>
            <h5><?php echo $row['title'];?></h5>
            <p><?php echo $row['order_'];?>¥/斤</p>
        </div>
		
        			<?php
	}}
  	?>
        
        <div class="cleaner"></div>
        <div class="pagging">
            <ul>
                <li><a href="#" target="_parent">上一页</a></li>
                <li><a href="#" target="_parent">1</a></li>
                <li><a href="#/page/2" target="_parent">2</a></li>
                <li><a href="#/page/7" target="_parent">下一页</a></li>
            </ul>
        </div>   
        
        
        
        
        
        <div class="cleaner"></div>
                
        <div class="cleaner"></div>
    </div> 
</div> 

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	<?php echo $row['site_copyright'] ?>
    </div>
</div> 

<div style="display:none"></div></body>
</html>