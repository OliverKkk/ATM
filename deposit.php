<?php
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$id=$_SESSION[client_id];
$bank=$_SESSION[bank];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css.css" rel="stylesheet" type="text/css"  />
<title>deposit</title>

</head>

<body bgcolor="#66FFFF">
<form action="depsub.php" method="post">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="32%" border="1" align="center" bgcolor="#FFCC00">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="40%">Bank Name </td>
    <td width="60%"><select name="bankname" size="1" >
            <?php $query="select bankname from bankregistration";
                       $result=mysql_query($query);?>
            <?php
  while ($newArray = mysql_fetch_array($result)) {
  // give a name to the fields
   $id = $newArray['bankname'];
   ?>
            <option><?php echo $id;?></option>
            <?php }?>
          </select></td>
    
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

  </tr>
  <tr>
    <td height="36">Amount Deposit </td>
    <td><input type="text" name="amountdeposited" /></td>
    
  </tr>
    <tr>
    <td> </td>
    <td><input type="submit" name="add" value="ADD" /></td>

  </tr>
</table>
</form>
</body>
</html>
