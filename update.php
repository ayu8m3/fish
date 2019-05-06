	<?php
	$link=new mysqli('localhost','fish','666666','test');
	mysqli_query($link,"set names utf8");
	$contact_no = isset($_GET['contact_no'])?$_GET['contact_no']:0;
	if(!$_POST){
		$iDbq = mysqli_query($link, "SELECT * FROM contact WHERE contact_no = $contact_no");
		$rs = mysqli_fetch_assoc($iDbq);
	}else{
		$sql ="UPDATE `contact` SET name='$_POST[name]',gender='$_POST[gender]',phone='$_POST[phone]',mobile='$_POST[mobile]',address='$_POST[address]' WHERE `contact_no`=".$_GET['contact_no'];
		mysqli_query($link,$sql)or die ("無法更新".mysqli_error($link));
		header( "location:wwww.php");
	}

	?>

	<form contact_no="form1" name="form1" method="post">
		<p>修改會員資料</p>
		<p>編號:
			<input name="contact_no" type="text" value="<?=$rs['contact_no']; ?>"/>
		</p>
		<p>姓名:
			<input name="name" type="text" id="textfield" value="<?=$rs['name'] ; ?>" size="15"/>
		</p>
		<p>性別:
			<input name="gender" type="text" id="textfield" value="<?=$rs['gender'] ; ?>" size="1"/>
		</p>
		<p>電話:
			<input name="phone" type="text" id="textfield" value="<?=$rs['phone'] ; ?>" size="15"/>
		</p>
		<p>手機:
			<input name="mobile" type="text" id="textfield" value="<?=$rs['mobile'] ; ?>" size="15"/>
		</p>
		<p>地址:
			<input name="address" type="text" id="textfield" value="<?=$rs['address'] ; ?>" size="30"/>
		</p>
		<p>
			<input type="submit" name="submit" value="送出"/>
		</p>
	</form>
	<a href="wwww.PHP">回上一頁</a>
