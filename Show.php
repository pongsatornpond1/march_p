<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Show</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <table width="599" border="1">
    <tr>
      <th>ค้นหา
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit" value="Search"></th>
    </tr>
  </table>
</form>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "12345678";
   $dbName = "computer";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM product WHERE ProductID LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>
<table width="1200" border="1">
  <tr>
    <th width="91"> <div align="center">Number </div></th>
    <th width="91"> <div align="center">Date </div></th>
    <th width="91"> <div align="center">Name </div></th>
    <th width="91"> <div align="center">ProductID </div></th>
    <th width="91"> <div align="center">Waste </div></th>
    <th width="91"> <div align="center">Error </div></th>  
    <th width="91"> <div align="center">Status </div></th>
    <th width="98"> <div align="center">DateOK </div></th>
    
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["Number"];?></div></td>
    <td><?php echo $result["Date"];?></td>
    <td><?php echo $result["Name"];?></td>
    <td><?php echo $result["ProductID"];?></td>
    <td><?php echo $result["Waste"];?></td>
    <td><?php echo $result["Error"];?></td>
    <td><?php echo $result["Status"];?></td>
    <td><?php echo $result["DateOK"];?></td>
    <td align="center" width="98"><a href="edit.php?ProductID=<?php echo $result["ProductID"];?>
    " a href="edit.php?Number=<?php echo $result["Number"];?>">แก้ไข</a></td>
    
    <td align="center" width="98"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?Number=<?php echo $result["Number"];?>';}">ลบ</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>

<form action="add.php" name="frmAdd" method="post">
 <input type="submit" name="submit" value="เพิ่มข้อมูล">
</form>
</body>
</html>
