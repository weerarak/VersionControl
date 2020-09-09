<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มกรอกข้อมูล</title>
</head>

<body>

<?php
require("database_info.php");
$ID = $_POST[txtID];
$Name = $_POST[txtName];
$Address = $_POST[txtAddress];
$BirthDay = $_POST[txtBirthDay];
mysql_connect($host,$user,$password)or die ("คอนแน็คโอสไม่ได้อะ" );
mysql_select_db($dbname)or die("คอนแน็คDBไม่ได้อะ" );

$sql = "UPDATE student SET Name='$Name',Address='$Address', Birthday='$BirthDay' WHERE id='$ID'";


setthai();
$retval = mysql_query( $sql);
echo $ID , $Name , $Address , $BirthDay;

if(! $retval )
{
 die('Could not update data: ' . mysql_error());
}
else {echo " Updated data successfully \n";}


mysql_close();
?>

</body>
</html>