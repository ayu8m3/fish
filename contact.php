<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"test");
mysqli_query($link,"set names utf8");
mysqli_query($link,"INSERT INTO websites (name, gender, phone, mobile, address)");
?>

<body>
<?php
$data=mysqli_query($link,"select * from contact");
while($rs=mysqli_fetch_row($data)){
	printf("%s:%s",$rs[0],$rs[1]);
echo"<br>";
}
mysqli_free_result($data);
?>
</body>
</p>
<table witch ="700" boorder="1">
	<tr>
		<td>姓名</td>
		<td>性別</td>
		<td>電話</td>
		<td>手機</td>
		<td>地址</td>
	</tr>
	
	<tr>
		<td><?php echo $rs[0];?></td>
		<td><?php echo $rs[1];?></td>
		<td><?php echo $rs[2];?></td>
		<td><?php echo $rs[3];?></td>
		<td><?php echo $rs[4];?></td>
	</tr>
</table>
<p>$nbsp;</p>
</body>
</html>