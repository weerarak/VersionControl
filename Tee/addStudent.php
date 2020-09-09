<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
require("database_info.php");
$ID = $_POST[txtID];
$Name = $_POST[txtName];
$Address = $_POST[txtAddress];
$BirthDay = $_POST[txtBirthDay];
mysql_connect($host,$user,$password)or die ("ติดต่อ Host ไม่ได้");
mysql_select_db($dbname)or die("ติดต่อข้อมูลไม่ได้"); 
$sql="INSERT INTO student(ID,Name,Address,Birthday)
VALUES('$ID','$Name','$Address','$BirthDay')";
setthai();
mysql_query($sql);
echo"บันทึกข้อมูลลงฐานข้อมูลแล้ว";
mysql_close();
?>

</body>
</html>