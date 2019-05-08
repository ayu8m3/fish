	<?php
	require_once 'main.php';
	$contact_no = isset($_GET['contact_no'])?$_GET['contact_no']:0;
	if(!$_POST){
		$iDbq = mysqli_query($link, "SELECT * FROM contact WHERE contact_no = $contact_no");
		$rs = mysqli_fetch_assoc($iDbq);
		$smarty->assign("rs",$rs);
		$smarty->display('update.html');
	}else{
		$sql ="UPDATE `contact` SET name='$_POST[name]',gender='$_POST[gender]',phone='$_POST[phone]',mobile='$_POST[mobile]',address='$_POST[address]' WHERE `contact_no`=".$_GET['contact_no'];
		mysqli_query($link,$sql)or die ("無法更新".mysqli_error($link));
		header( "location:index.php");
    }
	?>