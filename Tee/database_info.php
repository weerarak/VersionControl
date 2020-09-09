<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
$host ="localhost";
$user ="root";
$password = "12345678";
$dbname="university";
function setthai(){
mysql_query("SET character_set_results=utf8");
mysql_query("SET collation_connection=utf8_general_ci");
mysql_query("SET NAMES 'utf8'");
}
?>

</body>
</html>