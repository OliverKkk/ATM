<?php
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$cbobank=mysql_real_escape_string($_POST['bname']);

if  ($_POST['submit']=='Submit')
{
$_SESSION[bank]=$cbobank;

header('location: atm.php');
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css.css" rel="stylesheet" type="text/css"  />
<title>Choose Bank</title>
</head>

<body><div align="center">
<form action="choosebank.php" method="post" >
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="427" height="134" >
      <tr>
        <td height="73" align="center"> 
          <h3> <font color="#FFFFFF">Choose the Bank to Transact with:</font></h3>
<select name="bname">

            <?php $query="select bankname from bankregistration ;";
                       $result=mysql_query($query);?>
            <?php
  while ($newArray = mysql_fetch_array($result)) {
  // give a name to the fields
   $id = $newArray['bankname'];
   ?>
            <option><?php echo $id;?></option>
            <?php }?>
 
          </select>
	    </td></tr>
		 <tr>
        <td>
		<div align="center">
<input type="submit" name="submit" value="Submit" /> </div></td>
      </tr>
    </table>
  </form>
</div>

</body>
</html>
