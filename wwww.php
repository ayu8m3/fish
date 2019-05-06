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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫網頁建置</title>
<body>
	<form id="form1" name="form1" method="post">
		<p>姓名:
			<input name="name1" type="text" id="name1" value="<?php echo $name1?>"/>
		</p>
		<p>
			<input name="sex" type="radio" id="radio" value="%" checked="checked" />
  不拘
  <input type="radio" name="sex" id="radio2" value="男" />
  男
  <input type="radio" name="sex" id="radio3" value="女" />
  女</p>
  <p>
    <input type="submit" name="button" id="button" value="搜尋" />
		</p>
	</form>

</body>
<table width="700" border="1">
  <tr>
  	<td>編號</td>
    <td>姓名</td>
    <td>性別</td>
    <td>電話</td>
    <td>手機</td>
    <td>地址</td>
    <td>功能</td>
  </tr>

<?php
// for($i=1;$i<=mysqli_num_rows($result);$i++){
while($rs=mysqli_fetch_row($result)){
?>
  <tr>
    <td><?php echo $rs[0]?></td>
    <td><?php echo $rs[1]?></td>
    <td><?php echo $rs[2]?></td>
    <td><?php echo $rs[3]?></td>
    <td><?php echo $rs[4]?></td>
    <td><?php echo $rs[5]?></td>
     <td align="center"><a href="update.php?contact_no=<?php echo $rs[0]; ?>"><input type="submit" name="submit" value="修改"/></a>
    <a href="del.php?contact_no=<?php echo $rs[0]; ?>"><input type="submit" name="submit" value="刪除"/></a></td>
</td>
  </tr>
<?php
}
?>
</table>
<p>&nbsp;</p>
<a href="insert.PHP">新增會員</a>
</body>
</html>