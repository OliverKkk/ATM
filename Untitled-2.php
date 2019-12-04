<?php
session_start();

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
	 
	

   ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css.css" rel="stylesheet" type="text/css"  />
<style type="text/css">
<!--
.style5 {font-size: 18px; color: #FFFFFF; }
-->
</style>
</head>

<body> <div align="center">
<h2> Admin Main </h2>
<form action="" method="post">
<table width="345" border="1" bgcolor="#FF3399">
<tr>
    <td width="143" height="31"><span class="style5"></span></td>
    <br />
    <td width="244">&nbsp;</td>
</tr>
  <tr>
    <td width="143" height="31"><label>
      <input type="submit" name="regb" value="Register Bank" />
    </label></td>
    <br />
    <td width="244">&nbsp;</td>
  </tr>
  <tr>
    <td height="40"><input type="submit" name="regclient" value="Register Client" /></td>
    <td >&nbsp;</td>
  </tr>
  <tr>
    <td><input type="submit" name="logout" value="Log Out" /></td>
  </tr>
</table>
</form>
</div>

  

</body>
</html>
