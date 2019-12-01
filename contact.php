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
<title><?php echo $row['site_title'] ?></title>
<meta name="keywords" content="fresh zone, contact page, location maps, free templates, CSS" />
<meta name="description" content="Fresh Zone, Contact Page, Location Maps, free CSS template by templatemo.com" />
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
                <li><a href="blog.php">水果知识</a></li>
                <li><a href="contact.php" class="selected">联系我们</a></li>
            </ul>
            <br style="clear: left" />
        </div> 
    </div> 
</div> 

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
    	
        <h2>联系反馈</h2>
        <div class="half float_l">
			<h4>现在给我们发个信息吧!</h4>
            <p>我们会在第一时间给您回复~</p>
            <div id="contact_form">
				<form method="post" name="contact" action="contact_pass.php">
					
					<label for="author">姓名:</label> <input type="text" id="author" name="author" class="required input_field" />
					<div class="cleaner h10"></div>
													
					<label for="email">联系方式:</label> <input type="text" class="validate-email required input_field" name="email" id="email" />

					<div class="cleaner h10"></div>
											
					<label for="subject">标题:</label> <input type="text" class="validate-subject required input_field" name="subject" id="subject"/>				               
					<div class="cleaner h10"></div>
							
					<label for="text">留言:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
					<div class="cleaner h10"></div>				
												
					<input type="submit" value="发送" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="重置" id="reset" name="reset" class="submit_btn float_r" />

				</form>
            </div>
		</div>
        <div class="half float_r">
			<h4>Our Location</h4>
            <img width="460" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="images/Location.jpg"></img>
            <div class="cleaner h40"></div>
            <h5><strong><? echo $row['company_name'] ?></strong></h5>

				地址：<br />
             <? echo $row['company_address'] ?><br />
                <br />
                
            <strong>联系电话:</strong><? echo $row['company_phone'] ?><br />
			<strong>Email:</strong><? echo $row['company_email'] ?>
        </div>
        
        <div class="cleaner h40"></div>
        
    </div> 
</div> 

<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    	<?php echo $row['site_copyright'] ?>
    </div> 
</div> 

<div style="display:none"><script src='http://v7.cnzz.com/stat?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div></body>
</html>