<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
	$ID = $_GET["ID"];
	require("database_info.php");
	
	mysql_connect($host,$user,$password)or die ("ติดต่อ Host ไม่ได้");
	mysql_select_db($dbname)or die("ติดต่อฐานข้อมูลไม่ได้");
	
	$sql=" DELETE FROM student WHERE ID='$ID' ";
	
	
	setthai();
	
	mysql_query($sql);
	echo"แก้ไขข้อมูลลงฐานข้อมูลแล้ว";
	mysql_close();
	
	?>

<body>
</body>
</html>