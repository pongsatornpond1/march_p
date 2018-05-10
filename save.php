<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Save</title>
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "12345678";
	$dbName = "computer";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$sql = "INSERT INTO product (Number, Date ,Name ,ProductID ,Waste ,Error ,Repair ,Status , Note ,DateOK) 
		VALUES (".$_POST["txtNumber"].",'".$_POST["txtDate"]."','".$_POST["txtName"]."','".$_POST["txtProductID"]."','".$_POST["txtWaste"]."','".$_POST["txtError"]."','".$_POST["txtRepair"]."','".$_POST["jumpMenuStatus"]."','".$_POST["txtNote"]."','".$_POST["txtDateOK"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		echo "เพิ่มสำเร็จ";
	}else{
		echo "เพิ่ม  ไม่ สำเร็จ";
		}
	

	mysqli_close($conn);
?>
<form action="Show.php" name="frmAdd" method="post">
 <input type="submit" name="submit" value="OK">
</form>
</body>
</html>