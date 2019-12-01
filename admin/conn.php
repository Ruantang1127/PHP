<?php
   $conn=mysqli_connect("localhost","root","123456");
 if(!$conn){
     die('数据库连接失败:'.mysqli_error());
 }
 $db_select=mysqli_select_db($conn,"shuishu");
 if(!$db_select){
     die('数据库选择失败:'.mysqli_error());
 }
 mysqli_query($conn,"set names 'utf8'");
?>