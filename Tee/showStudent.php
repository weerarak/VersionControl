<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php
require("database_info.php");
mysql_connect($host,$user,$password)or die ("ติดต่อ host ไม่ได้"); 
mysql_select_db($dbname)or die("ติดต่อฐานข้อมูลไม่ได้"); 
$sql ="SELECT * FROM student";
setThai();
$sqlresult = mysql_query($sql);
echo "จํานวนนักศึกษา " . mysql_num_rows($sqlresult)." คน";
?>

<table width="680" border="1">
<tr>
<td><div align="center">รหัสนักศึกษา</div></td>
<td><div align="center">ชื่อ-นามสกุล</div></td>
<td><div align="center">ที่อยู่</div></td>
<td><div align="center">วันเกิด</div></td>
<td><div align="center">ลบ</div></td>
<td><div align="center">แก้ไข</div></td>
</tr>

<?php
while($array = mysql_fetch_array($sqlresult)){
echo "<tr>";
echo "<td>".$array['ID']."</td>";
echo "<td>".$array['Name']."</td>";
echo "<td>".$array['Address']."</td>";
echo "<td>".$array['Birthday']."</td>";
echo "<td><a href='delStudent.php?ID=".$array['ID']."'>X</a></td>";
echo "<td><a href='frmeditStudent.php?ID=".$array['ID']."'>edit</a></td>";
echo "</tr>";
}
mysql_close();
?>
</table>



</body>
</html>