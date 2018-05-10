<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete</title>
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

	$strNumber = $_GET["Number"];
	$sql = "DELETE FROM product
			WHERE Number = '".$strNumber."' ";

	$query = mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)) {
		 echo "ลบสำเร็จ";
	}

	mysqli_close($conn);
?>
<form action="Show.php" name="frmAdd" method="post">
 <input type="submit" name="submit" value="OK">
</form>
</body>
</html>