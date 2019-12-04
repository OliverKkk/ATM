<?php
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$name= $_SESSION[name];
if  ($_POST['logout']=='Log Out')
{
header('location: index.php');
}
if  ($_POST['regclient']=='Register Client')
{
header('location: regclient.php');
}				                                
if  ($_POST['regbank']=='Register Bank')
{
header('location: registerbank.php');
}	
if  ($_POST['newadmin']=='New Admin')
{
header('location: adminreg.php');
}	
if  ($_POST['pinissue']=='Issue Pin')
{
header('location: pinissue.php');
}	
 if  ($_POST['viewregclient']=='ALL BANKS')
{
header('location: viewclient.php');
}	
 if  ($_POST['viewregclientk']=='KCB')
{
header('location: viewclientk.php');
}	
 if  ($_POST['viewregclientn']=='NATIONAL')
{
header('location: viewclientn.php');
}	
 if  ($_POST['viewregcliente']=='EQUITY')
{
header('location: viewcliente.php');
}	
if  ($_POST['viewregbank']=='View Registered Bank')
{
header('location: viewbank.php');
}
	

   ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css.css" rel="stylesheet" type="text/css"  />
<style type="text/css">
<!--
.style6 {
	color: #FFFFFF;
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
</head>

<body> <div align="center">
<h2> Admin Main </h2>
<form action="" method="post">
  <table width="345" border="1" bgcolor="#FF3399">
    <tr>
      <td width="143" height="31"><input type="submit" name="newadmin" value="New Admin" /></td>
      <br />
      <td width="244">&nbsp;</td>
    </tr>
    <tr>
      <td width="143" height="31"><label>
        <input type="submit" name="regbank" value="Register Bank" />
      </label></td>
      <br />
      <td width="244">&nbsp;</td>
    </tr>
    <tr>
      <td height="40"><input type="submit" name="regclient" value="Register Client" /></td>
      <td >&nbsp;</td>
    </tr>
	 <tr>
      <td height="40"><span class="style6">View Client Registered with: </span></td>
      <td ><table width="200" border="1">
	  <TR>
	  <td colspan="3" align="center"><input type="submit" name="viewregclient" value="ALL BANKS" /></td>
	  </TR>
        <tr>
          <td><input type="submit" name="viewregclientk" value="KCB" /></td>
          <td><input type="submit" name="viewregclientn" value="NATIONAL" /></td>
          <td><input type="submit" name="viewregcliente" value="EQUITY" /></td>
        </tr>
      </table></td>
    </tr>
	 <tr>
      <td height="40"><input type="submit" name="viewregbank" value="View Registered Bank" /></td>
      <td >&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="pinissue" value="Issue Pin" /></td>
    </tr>
    <tr>
      <td><input type="submit" name="logout" value="Log Out" /></td>
    </tr>
  </table>
</form>
</div>

  

</body>
</html>
