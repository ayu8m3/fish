<?php
$link=mysqli_connect("localhost","fish","666666");
mysqli_select_db($link,"test");
mysqli_query($link,"set names utf8");
$result=mysqli_query($link,"select * from contact");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料庫網頁建置</title>


<table width="700" border="1">
  <tr>
    <td>姓名</td>
    <td>性別</td>
    <td>電話</td>
    <td>手機</td>
    <td>地址</td>
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
  </tr>
<?php
}
?>
</table>
<p>&nbsp;</p>
</body>
</html>