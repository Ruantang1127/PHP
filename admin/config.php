<?php
 require_once( 'session.php');
 require_once( 'conn.php'); 
 $result=mysqli_query($conn,"select * from config where id=1");
  $row=mysqli_fetch_array($result); 
  error_reporting(0);?>
    <!DOCTYPE HTML>
    <html>
        
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <title>
            </title>
            <style type="text/css">
                #sx { background-color: #3bc0c3; font-weight: bolder; color: #fff; } table
                tr td { font-size: 15px; }
            </style>
            <link rel="stylesheet" href="kindeditor/themes/default/default.css" />
            <script charset="utf-8" src="kindeditor/kindeditor-min.js">
            </script>
            <script charset="utf-8" src="kindeditor/lang/zh_CN.js">
            </script>
            <script type="text/javascript">
                var editor;
                KindEditor.ready(function(K) {
                    var editor = K.editor({
                        allowFileManager: true
                    });
                    K('#image3').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#site_logo').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#site_logo').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });
                    });
                    K('#image4').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#new').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#new').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });

                    });

                    K('#image5').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#slideone').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#slideone').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });
                    });

                    K('#image6').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#slidetwo').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#slidetwo').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });

                    });

                    K('#image7').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#slidethree').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#slidethree').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });

                    });

                });
            </script>
        </head>
        
        <body>
            <form id="form1" name="form1" method="post" action="?act=modify">
                <table width="100%" border="1" cellspacing="0" cellpadding="0">
                    <tr id="sx">
                        <td height="30" colspan="2">
                            &nbsp;网站首页基础配置与内容信息
                        </td>
                    </tr>
                    <tr>
                        <td width="20%" height="33">
                            &nbsp;网站标题
                        </td>
                        <td width="325">
                            &nbsp;
                            <label for="site_title">
                            </label>
                            <input name="site_title" type="text" id="site_title" value="<?php echo $row['site_title'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;网站Logo
                        </td>
                        <td>
                            &nbsp;
                            <input name="site_logo" type="text" id="site_logo" value="<?php echo $row['site_logo'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image3" value="上传">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;最新产品
                        </td>
                        <td>
                            &nbsp;
                            <input name="new" type="text" id="new" value="<?php echo $row['new'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image4" value="上传">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;最新产品标题
                        </td>
                        <td>
                            &nbsp;
                            <input name="site_url" type="text" id="site_url" value="<?php echo $row['site_url'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="50">
                            &nbsp;最新产品文章
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="site_keywords" cols="80" rows="6" type="text" id="site_keywords">
                                <?php echo $row[ 'site_keywords']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;水果常识文章
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="site_description" cols="80" rows="6" type="text" id="site_description">
                                <?php echo $row[ 'site_description']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;首页幻灯图片一
                        </td>
                        <td>
                            &nbsp;
                            <input name="slideone" type="text" id="slideone" value="<?php echo $row['slideone'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image5" value="上传">
                            (建议大小为100px*100px)
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;首页幻灯图片二
                        </td>
                        <td>
                            &nbsp;
                            <input name="slidetwo" type="text" id="slidetwo" value="<?php echo $row['slidetwo'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image6" value="上传">
                            (建议大小为100px*100px)
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;首页幻灯图片三
                        </td>
                        <td>
                            &nbsp;
                            <input name="slidethree" type="text" id="slidethree" value="<?php echo $row['slidethree'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image7" value="上传">
                            (建议大小为100px*100px)
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;焦点幻灯标题一
                        </td>
                        <td>
                            &nbsp;
                            <input name="company_weixin" type="text" id="company_weixin" value="<?php echo $row['company_weixin'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;焦点幻灯一内容
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="slideonems" cols="80" rows="6" type="text" id="slideonems">
                                <?php echo $row[ 'slideonems']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;焦点幻灯标题二
                        </td>
                        <td>
                            &nbsp;
                            <input name="company_fax" type="text" id="company_fax" value="<?php echo $row['company_fax'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;焦点幻灯二内容
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="slidetwoms" cols="80" rows="6" type="text" id="slidetwoms">
                                <?php echo $row[ 'slidetwoms']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;焦点幻灯标题三
                        </td>
                        <td>
                            &nbsp;
                            <input name="titlethree" type="text" id="titlethree" value="<?php echo $row['titlethree'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;焦点幻灯三内容
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="slidethreems" cols="80" rows="6" type="text" id="slidethreems">
                                <?php echo $row[ 'slidethreems']?>
                            </textarea>
                        </td>
                    </tr>
                 
                    <tr>
                        <td height="33">
                            &nbsp;公司地址
                        </td>
                        <td>
                            &nbsp;
                            <input name="company_address" type="text" id="company_address" value="<?php echo $row['company_address'];?>"
                            size="80">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;底板版权信息（支持HTML标记）
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="site_copyright" cols="80" rows="6" type="text" id="site_copyright">
                                <?php echo $row[ 'site_copyright']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;公司名称
                        </td>
                        <td>
                            &nbsp;
                            <input name="company_name" type="text" id="company_name" value="<?php echo $row['company_name'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;联系电话
                        </td>
                        <td>
                            &nbsp;
                            <input name="company_phone" type="text" id="company_phone" value="<?php echo $row['company_phone'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;电子邮箱
                        </td>
                        <td>
                            &nbsp;
                            <input name="company_email" type="text" id="company_email" value="<?php echo $row['company_email'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="40" colspan="2" align="center">
                            &nbsp;
                            <input type="submit" style="width:40px;height:40px;" name="btn1" id="btn1"
                            value="提交">
                        </td>
                    </tr>
                </table>
            </form>
        </body>
    
    </html>
    <?php if($_GET['act']=='modify' ){ $re=mysqli_query($conn,
    "update config set site_title='".$_POST[ 'site_title']. "', site_url='".$_POST[ 'site_url'].
    "', site_logo='".$_POST[ 'site_logo'].
	"', site_keywords='".$_POST[ 'site_keywords']. 
	"', site_description='".$_POST['site_description'].
	"', company_name='".$_POST[ 'company_name'].
	"', company_phone='".$_POST[ 'company_phone'].
    "', company_fax='".$_POST[ 'company_fax']. 
	"', company_email='".$_POST[ 'company_email'].
    "', company_weixin='".$_POST[ 'company_weixin']. 
	"', company_address='".$_POST['company_address'].
	"', slideone='".$_POST[ 'slideone']. 
	"', slidetwo='".$_POST['slidetwo']. 
	"', slidethree='".$_POST[ 'slidethree'].
    "', titlethree='".$_POST[ 'titlethree']. 
	"', new='".$_POST[ 'new']. "'"); if($re){ echo
    "<script>alert('修改成功！');window.location.href='config.php'</script>"; exit;} } mysqli_close($conn); ?>
        <!--, site_logo='".$_POST['site_logo']."', company_ewm='".$_POST['company_ewm']."',
        site_url='".$_POST['site_url']."', site_keywords='".$_POST['site_keywords']."',
        site_description='".$_POST['site_description']."', site_copyright='".$_POST['site_copyright']."',
        company_name='".$_POST['company_name']."', company_phone='".$_POST['company_phone']."',
        company_fax='".$_POST['company_fax']."', company_email='".$_POST['company_email']."',
        company_weixin='".$_POST['company_weixin']."', company_adress='".$_POST['company_adress']."'-->