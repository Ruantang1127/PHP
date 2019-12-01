<?php require_once( 'session.php'); require_once( 'conn.php'); 
$result=mysqli_query($conn,"select * from config where id=1");
 $row=mysqli_fetch_array($result);

  ?>
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
                    K('#image8').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#p1').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#p1').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });
                    });
                    K('#image9').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#p2').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#p2').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });

                    });

                    K('#image10').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#p3').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#p3').val(url);
                                    editor.hideDialog();
                                }
                            });
                        });
                    });

                    K('#image11').click(function() {
                        editor.loadPlugin('image',
                        function() {
                            editor.plugin.imageDialog({
                                showRemote: true,
                                imageUrl: K('#p4').val(),
                                clickFn: function(url, title, width, height, border, align) {
                                    K('#p4').val(url);
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
                            &nbsp;首页产品展示信息更换
                        </td>
                    </tr>
                    <tr>
                    
                    <tr>
                        <td height="33">
                            &nbsp;产品一图片
                        </td>
                        <td>
                            &nbsp;
                            <input name="p1" type="text" id="p1" value="<?php echo $row['p1'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image8" value="上传">
                            (建议大小为100px*200px)
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品二图片
                        </td>
                        <td>
                            &nbsp;
                            <input name="p2" type="text" id="p2" value="<?php echo $row['p2'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image9" value="上传">
                            (建议大小为100px*200px)
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品三图片
                        </td>
                        <td>
                            &nbsp;
                            <input name="p3" type="text" id="p3" value="<?php echo $row['p3'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image10" value="上传">
                            (建议大小为100px*200px)
                        </td>
                    </tr>
                    
                      <tr>
                        <td height="33">
                            &nbsp;产品四图片
                        </td>
                        <td>
                            &nbsp;
                            <input name="p4" type="text" id="p4" value="<?php echo $row['p4'];?>"
                            size="40">
                            &nbsp;&nbsp;
                            <input type="button" id="image11" value="上传">
                            (建议大小为100px*200px)
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td height="33">
                            &nbsp;产品一标题
                        </td>
                        <td>
                            &nbsp;
                            <input name="p5" type="text" id="p5" value="<?php echo $row['p5'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品一内容
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="p6" cols="60" rows="3" type="text" id="p6">
                                <?php echo $row[ 'p6']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品二标题
                        </td>
                        <td>
                            &nbsp;
                            <input name="p7" type="text" id="p7" value="<?php echo $row['p7'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品二内容
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="p8" cols="60" rows="3" type="text" id="p8">
                                <?php echo $row[ 'p8']?>
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品三标题
                        </td>
                        <td>
                            &nbsp;
                            <input name="p9" type="text" id="p9" value="<?php echo $row['p9'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品三内容
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="p10" cols="60" rows="3" type="text" id="p10">
                                <?php echo $row[ 'p10']?>
                            </textarea>
                        </td>
                    </tr>
                   
                        <tr>
                        <td height="33">
                            &nbsp;产品四标题
                        </td>
                        <td>
                            &nbsp;
                            <input name="p11" type="text" id="p11" value="<?php echo $row['p11'];?>"
                            size="40">
                        </td>
                    </tr>
                    <tr>
                        <td height="33">
                            &nbsp;产品四内容
                        </td>
                        <td>
                            &nbsp;
                            <textarea name="p12" cols="60" rows="3" type="text" id="p12">
                                <?php echo $row[ 'p12']?>
                            </textarea>
                        </td>
                    </tr>
                   
                   
                   
                   
                   
                   
                   
                    </tr>
                  
                    <tr>
                        <td height="40" colspan="2" align="center">
                            &nbsp;
                            <input type="submit" style="width:40px;height:40px;" name="btn1" id="btn1"
                            value="提交">
                        </td>
                    </tr>     <tr>
               
                </table>
            </form>
        </body>
    
    </html>
    <?php if(isset($_GET['act'])=='modify' ){ $re=mysqli_query($conn,
    "update config set p1='".$_POST[ 'p1']. "', p2='".$_POST[ 'p2'].
    "', p3='".$_POST[ 'p3']. "', p4='".$_POST[ 'p4'].
    "', p5='".$_POST[ 'p5']. "', p6='".$_POST[
    'p6']. "', p7='".$_POST[ 'p7'].
    "', p8='".$_POST[ 'p8']. "', p9='".$_POST[ 'p9'].
    "',  p10='".$_POST[ 'p10']. "', p11='".$_POST[ 'p11'].
    "', p12='".$_POST[ 'p12']. "'    "); if($re){ echo
    "<script>alert('修改成功！');window.location.href='config.php'</script>"; exit;} } mysqli_close($conn); ?>
        <!--, site_logo='".$_POST['site_logo']."', company_ewm='".$_POST['company_ewm']."',
        site_url='".$_POST['site_url']."', site_keywords='".$_POST['site_keywords']."',
        site_description='".$_POST['site_description']."', site_copyright='".$_POST['site_copyright']."',
        company_name='".$_POST['company_name']."', company_phone='".$_POST['company_phone']."',
        company_fax='".$_POST['company_fax']."', company_email='".$_POST['company_email']."',
        company_weixin='".$_POST['company_weixin']."', company_adress='".$_POST['company_adress']."'-->