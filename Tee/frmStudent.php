<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฟอร์มกรอกข้อมูล</title>
</head>

<body>

<form id="form1" method="post" action="addStudent.php"><table width="252" border="1">
  <tbody>
    <tr>
      <td colspan="3">ข้อมูลนักศึกษา</td>
      </tr>
    <tr>
      <td width="102">รหัส</td>
      <td width="134"><input type="txtID" name="txtID" id="txtID"></td>
      <td width="134">&nbsp;</td>
    </tr>
    <tr>
      <td>ชื่อ-นามสกุล</td>
      <td><input type="text" name="txtName" id="txtName"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="45">ที่อยู่</td>
      <td><textarea name="txtAddress" id="txtAddress"></textarea></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>วันเกิด</td>
      <td><input type="text" name="txtBirthDay" id="txtBirthDay"></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><input type="submit" name="submit" id="submit" value="Submit">
        <input type="reset" name="reset" id="reset" value="Reset"></td>
      </tr>
  </tbody>
</table>
</form>

<?php
require("database_info.php");
mysql_connect($host,$user,$password)or die ("ติดต่อ Host ไม่ได้" );
mysql_select_db($dbname)or die("ติดต่อฐานข้อ มูลไม่ได้" );
$sql ="SELECT * FROM student WHERE ID='$ID'";
setThai();
$sqlresult = mysql_query($sql);
$result =mysql_fetch_array($sqlresult)
?>
		
</body>
</html>
