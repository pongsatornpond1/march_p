<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add</title>
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
<body>
<form action="save.php" name="frmAdd" method="post">
<table width="700" border="1">
  <tr> 
    <td width="120" align="center">ระบบแจ้งซ่อมครุภัณฑ์คอมพิวเตอร์ออนไลน์</td>
  </tr>
  
  <tr>
    <td>
    
    <table width="695" border="1">
  <tr>
    <th width="120">เลขที่แจ้งซ่อม</th>
    <td width="150"><input type="text" name="txtNumber" size="8"> </td>
    <th width="80">วันที่แจ้ง</th>
    <td width="150"><input type="text" name="txtDate" size="20"> </td>
    </tr>
  <tr>
    <th width="120">ผู้แจ้ง</th>
    <td><input type="text" name="txtName" size="30"></td>
    </tr>
  <tr>
    <th width="120">รหัสครุภัณฑ์</th>
    <td><input type="text" name="txtProductID" size="20"></td>
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
</body>
</html>