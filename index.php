<?php
require_once 'main.php';
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
$aAllData = array();
while($rs=mysqli_fetch_assoc($result)){
	$aAllData[] = $rs;
}
$smarty->assign("name1",$name1);
$smarty->assign("alldata", $aAllData);
// echo "<pre>";print_r($aAllData);echo "</pre>";
$smarty->display('index.html');
?>