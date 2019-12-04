<?php

$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$uname=mysql_real_escape_string($_POST['username']);
$pwd=mysql_real_escape_string($_POST['pwd']);
$aname=mysql_real_escape_string($_POST['name']);
if  ($_POST['save']=='SAVE')
{
    if(empty($_POST['username']) or empty($_POST['pwd'])){
		echo "<script language='javascript' type='text/javascript'> window.alert('Some of the field are empty! Please fill it up.');       </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='adminreg.php' </script>";
		 }
	else{
	$sql="insert into admin values('','$aname','$uname','$pwd',now())";
     mysql_query($sql)or die(mysql_error());	
       echo "<script language='javascript' type='text/javascript'> window.alert('Admin added successful'); </script>";
 		echo "<script language='javascript' type='text/javascript'> location.href='adminmain.php' </script>";
        }
}
if  ($_POST['cancel']=='CANCEL')
{
header('location: adminmain.php');
}
?>
<html>
<head>
<title>Registering Bank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css.css" rel="stylesheet" type="text/css"  />
<style type="text/css">
<!--
.style3 {font-size: 18px; color: #FFFFFF; }
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" action="">
  <table width="338" align="center"  border="1">
    <tr > 
    <td height="26"></td>
    </tr>
    <tr> 
      <td width="108"><span class="style3">Admin Name</span></td>
      <td width="214"><input type="text" name="name"></td>
    </tr>
	<tr> 
      <td width="108">&nbsp;</td>
      <td width="214">&nbsp;</td>
	</tr>
	<tr> 
      <td><span class="style3">Username</span></td>
      <td><input type="password" name="username"></td>
   
    </tr>
	<tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
	<tr> 
      <td><span class="style3">Password</span></td>
      <td><input type="password" name="pwd"></td>
   
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><table width="200" border="0">
        <tr>
          <td><input type="submit" name="save" value="SAVE"></td>
          <td><input type="submit" name="cancel" value="CANCEL"></td>
        </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
