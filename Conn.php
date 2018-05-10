<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connect</title>
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

	if (mysqli_connect_errno())
	{
		echo "Database Connect Failed : " . mysqli_connect_error();
	}
	else
	{
		echo "Database Connected.";
	}

	mysqli_close($conn);
?>
</body>
</html>
