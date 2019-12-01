<?php require_once( 'admin/conn.php'); 
$result=mysqli_query($conn,"select * from config where id=1"); 
$result_slide=mysqli_query($conn,"select * from slide where id=1"); 
$row=mysqli_fetch_array($result);
$row_slide=mysqli_fetch_array($result_slide); ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        
        <head>
       <link rel="shortcut icon" href="shuishu.ico" />
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>
                <?php echo $row['site_title'] ?>
            </title>
            <meta name="keywords" content="fresh zone, free theme, free templates, templatemo, dualSlider, CSS, HTML"
            />
            <meta name="description" content="Fresh Zone Theme, free CSS template provided by templatemo.com"
            />
            <link href="css/templatemo_style.css" rel="stylesheet" type="text/css"
            />
            <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
            <script type="text/javascript" src="js/jquery.min.js">
            </script>
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
            <link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css"
            />
            <script src="js/jquery-1.3.2.min.js" type="text/javascript">
            </script>
            <script src="js/jquery.easing.1.3.js" type="text/javascript">
            </script>
            <script src="js/jquery.timers-1.2.js" type="text/javascript">
            </script>
            <script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript">
            </script>
            <script type="text/javascript">
                $(document).ready(function() {

                    $("#carousel").dualSlider({
                        auto: true,
                        autoDelay: 6000,
                        easingCarousel: "swing",
                        easingDetails: "easeOutBack",
                        durationCarousel: 1000,
                        durationDetails: 600
                    });

                });
            </script>
        </head>
        
        <body>
            <div id="templatemo_header_wrapper">
                <div id="templatemo_header">
                    <div id="site_title" style="margin-top:40px">
                        <img src="<?=$row['site_logo']?>">
                    </div>
                    <div id="templatemo_menu" class="ddsmoothmenu">
                        <ul>
                            <li>
                                <a href="index.php" class="selected">
                                    主页
                                </a>
                            </li>
                            <li>
                                <a href="about.php">
                                    店主推荐
                                </a>
                            </li>
                            <li>
                                <a href="portfolio.php">
                                    产品展示
                                </a>
                            </li>
                            <li>
                                <a href="blog.php">
                                    水果知识
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    联系我们
                                </a>
                            </li>
                        </ul>
                        <br style="clear: left" />
                    </div>
                </div>
            </div>
            <div id="templatemo_slider_wrapper">
                <div id="templatemo_slider">
                    <div id="carousel">
                        <div class="panel">
                            <div class="details_wrapper">
                                <div class="details">
                                    <div class="detail">
                                        </br>
                                        <h2>
                                            <?php echo $row[ 'company_weixin'];?>
                                        </h2>
                                        <p>
                                            <?php echo $row[ 'slideonems']?>
                                        </p>
                                    </div>
                                    <!-- /detail -->
                                    <div class="detail">
                                        </br>
                                        <h2>
                                            <a href="#">
                                                <?php echo $row[ 'company_fax'];?>
                                            </a>
                                        </h2>
                                        <p>
                                            <?php echo $row[ 'slidetwoms'];?>
                                        </p>
                                    </div>
                                    <div class="detail">
                                        </br>
                                        <h2>
                                            <?php echo $row[ 'titlethree'];?>
                                        </h2>
                                        <p>
                                            <?php echo $row[ 'slidethreems'];?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="paging">
                                <div id="numbers">
                                </div>
                                <a href="javascript:void(0);" class="previous" title="Previous">
                                    Previous
                                </a>
                                <a href="javascript:void(0);" class="next" title="Next">
                                    Next
                                </a>
                            </div>
                        </div>
                        <div id="slider-image-frame">
                            <div class="backgrounds">
                                <div class="item item_1">
                                    <img src="<?=$row['slideone']?>">
                                </div>
                                <div class="item item_2">
                                    <img src="<?=$row['slidetwo']?>">
                                </div>
                                <div class="item item_3">
                                    <img src="<?=$row['slidethree']?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="templatemo_main_wrapper">
                <div id="templatemo_main">
                    <div class="homepage_post col half float_l">
                        <h2>
                            <a href="portfolio.php">最新产品</a>
                        </h2>
                        <br>
                        <br>
                        <img src="<?=$row['new']?>" class="image_fl imgage-with-frame"
                        alt="Image 02" />
                        <p>
                            <?php echo $row[ 'site_url'];?>
                        </p>
                        <p>
                            <?php echo $row[ 'site_keywords']?>
                        </p>
                        <a href="#" class="more">
                        </a>
                    </div>
                    <div class="col half float_r">
                        <h2>
                            <a href="blog.php">水果常识</a>
                        </h2>
                        <?php echo $row[ 'site_description']?>
                            <ul class="templatemo_list">
                                <li class="flow">
                                    西红柿是生吃好还是熟吃好
                                </li>
                                <li class="flow">
                                    饭前吃苹果好还是饭后吃苹果好
                                </li>
                                <li class="flow">
                                    什么人不宜吃辣椒
                                </li>
                                <li class="flow">
                                    李子什么时候成熟
                                </li>
                                <li class="flow">
                                    蓝莓软了还能吃吗
                                </li>
                                <li class="flow">
                                    哈密瓜不甜怎么处理
                                </li>
                                <li class="flow">
                                    青木瓜与木瓜的区别
                                </li>
                                <li class="flow">
                                    芒果可以空腹吃吗
                                </li>
                            </ul>
                    </div>
                    <div class="cleaner h40">
                    </div>
                    <div id="food-gallery">
                        <h2>
                            产品展示
                        </h2>
                        <div class="col one_fourth">
                            <img src="<?=$row['p1']?>">
                            <h5>
                                <?php echo $row[ 'p5'];?>
                            </h5>
                            <p>
                              <?php echo $row[ 'p6'];?>
                            </p>
                        </div>
                        <div class="col one_fourth fp_rw">
                         <img src="<?=$row['p2']?>">
                            
                            <h5>
                                    <?php echo $row[ 'p7'];?>
                            </h5>
                            <p>
                             <?php echo $row[ 'p8'];?>
                            </p>
                        </div>
                        <div class="col one_fourth fp_rw">
                              <img src="<?=$row['p3']?>">
                            <h5>
                                   <?php echo $row[ 'p9'];?>
                            </h5>
                            <p>
                                 <?php echo $row[ 'p10'];?>                           </p>
                        </div>
                        <div class="col one_fourth fp_rw no_margin_right">
                              <img src="<?=$row['p4']?>">
                            <h5>
                                     <?php echo $row[ 'p11'];?>
                            </h5>
                            <p>
                                    <?php echo $row[ 'p12'];?>
                            </p>
                        </div>
                    </div>
                    <div class="cleaner">
                    </div>
                </div>
            </div>
            <div id="templatemo_footer_wrapper">
                <div id="templatemo_footer">
                    <?php echo $row[ 'site_copyright'] ?>
                </div>
            </div>
            <div style="display:none">
            </div>
        </body>
    
    </html>