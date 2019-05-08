<?php
require_once 'main.php';
if($_POST){
	$name = isset($_POST['name'])?trim($_POST['name']):'';
	$gender = isset($_POST['gender'])?trim($_POST['gender']):'';
	$phone = isset($_POST['phone'])?trim($_POST['phone']):'';
	$mobile = isset($_POST['mobile'])?trim($_POST['mobile']):'';
	$address = isset($_POST['address'])?trim($_POST['address']):'';
	$sql="INSERT INTO `contact`(`name`,`gender`,`phone`,`mobile`,`address`) VALUES( '$name' , '$gender' , '$phone' , '$mobile' , '$address' )";
	$smarty->assign("insert",$sql);
	if($link->query($sql)==TRUE){
		echo'<p>新增會員成功!</p><br>';
		echo'<a href="test.PHP">回功能列表</a>';
		header( "location:index.php");
	}else{
		echo'<p>新增會員失敗!</p><br>';
		echo'<a href="index.PHP">回上一頁</a>';
	}
}
$smarty->display('insert.html');
?>