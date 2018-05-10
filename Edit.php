<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ediit</title>
</head>
<body>
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);

   $serverName = "localhost";
   $userName = "sa";
   $userPassword = "";
   $dbName = "studen";

   $strProductID = null;

   if(isset($_GET["ProductID"]))
   {
	   $strProductID = $_GET["ProductID"];
   }
  
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "12345678";
   $dbName = "computer";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

   $sql = "SELECT * FROM product WHERE ProductID = '".$strProductID."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>


<form action="save2.php" name="frmAdd" method="post">
<table width="700" border="1">
  <tr> 
    <td width="120" align="center">ระบบแจ้งซ่อมครุภัณฑ์คอมพิวเตอร์ออนไลน์</td>
  </tr>
  
  <tr>
    <td>
    
    <table width="695" border="1">
  <tr>
    <th width="120">เลขที่แจ้งซ่อม</th>
    <td width="238"><input type="hidden" name="txtNumber" value="<?php echo $result["Number"];?>"><?php echo $result["Number"];?></td>
    <th width="80">วันที่แจ้ง</th>
    <td width="150"><input type="text" name="txtDate" size="20"> </td>
    </tr>
  <tr>
    <th width="120">ผู้แจ้ง</th>
    <td><input type="text" name="txtName" size="30"></td>
    </tr>
  <tr>
    <th width="120">รหัสครุภัณฑ์</th>
    <td width="238"><input type="hidden" name="txtProductID" value="<?php echo $result["ProductID"];?>"><?php echo $result["ProductID"];?></td>
    <th width="80">ประเภทปัญหา</th>
    <td width="150"><input type="text" name="txtWaste" size="20"> </td>
    </tr>
   <tr>
    <th width="120">อาการเสีย</th>
    <td><input type="text" name="txtError" size="30"></td>
    </tr>
   <tr>
    <th width="120">ภาพประกอบ</th>
    <td></td>
    </tr>
   
   <tr>
    <th width="120">วิธีแก้ปัญหา</th>
    <td><input type="text" name="txtRepair" size="40"></td>
    </tr>
   <tr>
    <th width="120">สถานะการซ่อม</th>
    <td><select name="jumpMenuStatus" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
      <option>รอ</option>
      <option>เสร็จสิ้น</option>
    </select></td>
    </tr>
   <tr>
    <th width="120">หมายเหตุ</th>
    <td><input type="text" name="txtNote" size="40"></td>
    </tr>
   <tr>
    <th width="120">วันที่เสร็จสิ้น</th>
    <td><input type="text" name="txtDateOK" size="20"></td>
    </tr>
   
  </table>
    
    </td> 
  </tr>
</table>

  <input type="submit" name="submit" value="submit">
</form>
<?php
mysqli_close($conn);
?>
</body>
</html>
