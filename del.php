<?php
$link=mysqli_connect("localhost","fish","666666");
mysqli_select_db($link,"test");
mysqli_query($link,"set names utf8");
$result=mysqli_query($link,"select * from contact");
//$sql="UPDATE `contact` SET (`name`,`gender`,`phone`,`mobile`,`address`)WHERE "
$sql ="DELETE FROM `contact` WHERE `contact_no`=".$_GET['contact_no']; //刪除資料
mysqli_query($link,$sql)or die ("無法刪除".mysqli_error($link)); //執行sql語法

header( "location:wwww.php");  //回index.php
?>