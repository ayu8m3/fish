<?php
require_once 'main.php';
if($_GET){
	$result=mysqli_query($link,"select * from contact");
	$sql ="DELETE FROM `contact` WHERE `contact_no`=".$_GET['contact_no']; //刪除資料
	$smarty->assign("del",$sql);
	mysqli_query($link,$sql)or die ("無法刪除".mysqli_error($link));
	
}
header( "location:index.php");  //回index.php
?>