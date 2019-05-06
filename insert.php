<?php
	$check=!empty($_POST["check"])?$_POST["check"]:null;
if($check!="yes"){
	echo '
	<form id="form1" name="form1" method="post">
		<p>新增會員資料</p>
		<p>姓名:
			<input name="name" type="text" id="textfield" size="15"/>
		</p>
		<p>性別:
			<input name="gender" type="text" id="textfield" size="1"/>
		</p>
		<p>電話:
			<input name="phone" type="text" id="textfield" size="15"/>
		</p>
		<p>手機:
			<input name="mobile" type="text" id="textfield" size="15"/>
		</p>
		<p>地址:
			<input name="address" type="text" id="textfield" size="30"/>
		</p>
		<p>
			<input type="submit" name="submit" value="送出"/>
			<input name="check" type="hidden" id="check" value="yes"/>
		</p>
	</form>';
	echo'<a href="wwww.PHP">回上一頁</a>';
}else{
$name=!empty($_POST["name"])?$_POST["name"]:null;
$gender=!empty($_POST["gender"])?$_POST["gender"]:null;
$phone=!empty($_POST["phone"])?$_POST["phone"]:null;
$mobile=!empty($_POST["mobile"])?$_POST["mobile"]:null;
$address=!empty($_POST["address"])?$_POST["address"]:null;
if($name==""){
	echo '名字不可為空，請重新輸入<br>';
	echo'<a href="insert.PHP">回上一頁</a>';

}else{
	

	$link=new mysqli('localhost','fish','666666','test');
	mysqli_query($link,"set names utf8");
	 $sql="INSERT INTO `contact`(`name`,`gender`,`phone`,`mobile`,`address`) VALUES('$name','$gender','$phone','$mobile','$address')";
if($link->query($sql)===TRUE){
echo'<p>新增會員成功!</p><br>';
echo'<a href="wwww.PHP">回功能列表</a>';
}else{
echo'<p>新增會員失敗!</p><br>';
echo'<a href="wwww.PHP">回上一頁</a>';
}


}

}
?>