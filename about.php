<?php 
require_once('admin/conn.php');
$result=mysqli_query($conn,"select * from config where id=1");
$result_single = mysqli_query($conn,"select * from single ");
$result_article = mysqli_query($conn,"select * from article ");
$row=mysqli_fetch_array($result);
$row_article=mysqli_fetch_array($result_article);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="shortcut icon" href="shuishu.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $row['site_title'] ?></title>
<meta name="keywords" content="fresh zone, about us, company, theme, free templates, web design, website, CSS, HTML" />
<meta name="description" content="Fresh Zone, About Us, Company, free CSS template by templatemo.com" />


<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

</head>
<body>

<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
    		<div id="site_title" style="margin-top:40px"><img src="<?=$row['site_logo']?>"></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">主页</a></li>
                <li><a href="about.php" class="selected">店主推荐</a>
              
                </li>
                <li><a href="portfolio.php">产品展示</a>
               
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
    	
        <div class="col two-third">
            <h2>最热产品</h2>
			<img src="images/templatemo_image_01.jpg" alt="Image 01" class="image_fl" />
            <p><em>橙子</em><em>(学名:</em><em>Citrus sinensis)</em></p>
            <p>是芸香科柑橘属植物橙树的果实，亦称为黄果、柑子、金环、柳丁。橙子是一种柑果，是柚子(Citrus maxima)与橘子(Citrus reticulata)的杂交品种。

橙子起源于东南亚。果实可以剥皮鲜食其果肉，果肉也可以用作其他食物的附加物。果实的另一个重要用途为榨汁。橙子的栽培历史悠久，以其果皮含有芳香气味，古人用它作薰香代品。湖南省长沙市郊马王堆出土的西汉古墓文物中有本属植物的种子。据考证认为是香橙的种子--较粗大且略有棱角，色泽已变灰黑--认为当时是用作薰香料陪葬并保存尸体完整的材料之一。那些种子与其他同类的物品放置在棺穴的西边，而食物类则放置于东边</p>
            <div class="cleaner h30"></div>
            
			<img src="images/templatemo_image_02.jpg" alt="Image 02" class="image_fl" />
              <p><em>辣椒</em><em>(学名:</em><em>Citrus sinensis)</em></p>
              学名:Capsicum annuum L.，茄科、辣椒属。为一年或有限多年生草本植物。果实通常呈圆锥形或长圆形，未成熟时呈绿色，成熟后变成鲜红色、绿色或紫色，以红色最为常见。辣椒的果实因果皮含有辣椒素而有辣味，能增进食欲。辣椒中维生素C的含量在蔬菜中居第一位，原产墨西哥，明朝末年传入中国。还有观赏椒，圆形，不可食用，颜色有红色、紫色等。辣椒原产于中拉丁美洲热带地区，原产国是墨西哥。15世纪末，哥伦布发现美洲之后把辣椒带回欧洲，并由此传播到世界其他地方。于明代传入中国。清陈淏子之《花镜》有番椒的记载。今中国各地普遍栽培，成为一种大众化蔬菜。辣椒是中轴胎座。辣椒为一年或多年生草本植物，叶子卵状披针形，花白色。果实大多像毛笔的笔尖，也有灯笼形、心脏形等。果实未熟时呈绿色，成熟后变为红色或黄色。一般有辣味，供食用和药用。
              一般所称的"辣椒"，是指这种植物的果实。别名又有红海椒、大椒、辣虎、广椒、川椒。最辣的是印度魔鬼椒。辣椒以果实、根和茎枝入药。6～7月果红时采收，晒干。</div>
		
        <div class="col one_third no_margin_right">
        	<h3>店主推荐</h3>
            <?php
	//页面显示记录条数
	$total_num=mysqli_num_rows(mysqli_query($conn,"select id from article"));
	$pagesize=3;
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
	$result1=mysqli_query($conn,"select * from article limit $offset,$pagesize");
	
    $result2=mysqli_query($conn,"select * from article");
	while($row=mysqli_fetch_array($result2)){
		while($row=mysqli_fetch_array($result1)){
    ?>
        	<div class="testimonial">
            	<cite><?php echo $row['title'];?><a href="#"><span><?php echo $row['name'];?></span></a></cite>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['content'];?></p>
                
            </div>
		<?php
	}}
  	?>
      
            </div>
        </div> 
                
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