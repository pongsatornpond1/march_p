<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ThaiCreate.Com PHP & MySQL (mysqli)</title>
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

	$sql = "UPDATE product SET 
           Date =  '".$_POST["txtDate"]."', 
		   Name =  '".$_POST["txtName"]."',
           ProductID =  '".$_POST["txtProductID"]."',
           Waste =  '".$_POST["txtWaste"]."',
           Error =  '".$_POST["txtError"]."',
          	Repair =   '".$_POST["txtRepair"]."',
           Status =  '".$_POST["jumpMenuStatus"]."',
           Note =  '".$_POST["txtNote"]."',
           DateOK =  '".$_POST["txtDateOK"]."'
         
          
			WHERE Number = '".$_POST["txtNumber"]."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
	 echo "แก้ไขสำเร็จ";
	}else{
		echo "แก้ไข ไม่ สำเร็จ";
		}

	mysqli_close($conn);
?>
<form action="Show.php" name="frmAdd" method="post">
 <input type="submit" name="submit" value="OK">
</form>
</body>
</html>