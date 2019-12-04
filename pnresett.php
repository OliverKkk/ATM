<?php
session_start();
$id=$_SESSION[client_id];
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$cid=mysql_real_escape_string($_POST['idno']);
if  ($_POST['submit']=='Reset')
{
if(empty($_POST['idno']) or empty($_POST['newpin']) ){
 
		echo "<script language='javascript' type='text/javascript'> window.alert('Empty field! .'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='pnreset.php' </script>";
	} 
	else{
$result=mysql_query("select atm_pin from pindetails where client_id=$id")or die (mysql_error());

if ($myrow = mysql_fetch_array($result)) {
do 
{
  $atmpin = $myrow["atm_pin"];

} 
while ($myrow = mysql_fetch_array($result));
	
if ($atmpin > 0){	
$atmpin=mysql_real_escape_string($_POST['newpin']);
 $wdrawal="UPDATE pindetails SET atm_pin='$atmpin' WHERE client_id=$id ";
mysql_query($wdrawal,$conn) or die("Insertion Failed:" . mysql_error()); 

echo "<script language='javascript' type='text/javascript'> window.alert('successful Reset.your new pin is:$atmpin'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='atmwelcome.php' </script>";	
		
		
		}
		else{ 
		echo "<script language='javascript' type='text/javascript'> window.alert('not Reset'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='pnreset.php' </script>";	
	
		    }
	}
}  
} 
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css.css" rel="stylesheet" type="text/css"  />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pin Reset</title>
<style type="text/css">
<!--
.style6 {font-size: 16; color: #FFFFFF; font-weight: bold; }
.style8 {font-size: 18px; color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>

<body><div align="center">
<form action="" method="post">

  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="415" border="0" bgcolor="#006633">
  <tr>
    <td height="35" colspan="2" align="center" ><span class="style8">Pin Reset Details </span></td>
  </tr>
  <tr>
    <td width="166" height="35"><span class="style6">Enter you ID NO: </span></td>
    <td width="239"><input name="idno" type="text" maxlength="20" /></td>
  </tr>
  <tr>
    <td><span class="style6">New pin Number </span></td>
    <td><input name="newpin" type="text" maxlength="20" /></td>
  </tr>
  <tr>
    <td height="53" colspan="2" align="center"><input type="submit" name="submit" value="Reset" /></td>
  </tr>
</table>

</form></div>
</body>
</html>
