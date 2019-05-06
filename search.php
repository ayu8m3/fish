<?php
$link=mysqli_connect("localhost","fish","666666");
mysqli_select_db($link,"test");
mysqli_query($link,"set names utf8");

$name1='';
if($_POST){
	if($_POST['name1']!='' or $_POST['sex']!=''){
		$name1=$_POST['name1'];
		$sex=$_POST['sex'];
		$result=mysqli_query($link,"select*from contact where name like'%$name1%' and gender='$sex'");
	}
}else{
	$result=mysqli_query($link,"select*from contact");
}

?>