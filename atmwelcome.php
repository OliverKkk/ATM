<?php 
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());
	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
if($_POST['login']=='LOGIN')
{
$atmpin=mysql_real_escape_string($_POST['atmpin']);
$query=mysql_query("SELECT * FROM pindetails WHERE atm_pin ='$atmpin'") 
	or die(mysql_error());
 	$total=mysql_num_rows($query);
	
	if($total>0)
	{
	header('location:choosebank.php');
	}
	else
	{
	 echo "<script language='javascript' type='text/javascript'> window.alert('Incorrect PIN number!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='atmwelcome.php' </script>";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>welcome</title>
<link href="css.css" rel="stylesheet" type="text/css"  />
<style type="text/css">
<!--
.style2 {color: #000099}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="36%" border="1" align="center" bgcolor="#333300">
  <tr>
    <td height="35" colspan="2">
<div align="center"><font color="#FFFFFF"><strong>WELCOME <?php echo $_SESSION[surname];?>&nbsp;<?php echo $_SESSION[othername];?>&nbsp;  <?php $_SESSION[client_id]; ?> </strong></font></div></td>
  </tr>
  <tr>
    <td width="36%" height="33" colspan="2" align="center"> 
      <p><font color="#FFFFFF"><strong>Please Enter Your ATM Pin Number </strong> 
        </font></p>
   </td>
  <tr>
    <td height="34" colspan="2"><form method="post" action="">
      
      <p align="center">
        <input type="text" name="atmpin" value=""/>
      </p>
	  <p align="center">
      
        <input type="submit" value="LOGIN" name="login"/>
        </p>
    </form>    </td>
  </tr>
  <tr>
    <td width="36%" height="33" colspan="2" align="center" > 
      <p><span ><a href="pnresett.php"><font color="#FFFFFF">Forget your pin</font></a></strong> 
        </span></p>
   </td>
  <tr>
</table>

</body>
</html>
