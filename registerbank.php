<?php
if  ($_POST['cancel']=='CANCEL')
{
header('location: adminmain.php');
}
if  ($_POST['save']=='SAVE')
{
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$bid=mysql_real_escape_string($_POST['bid']);
$hoffice=mysql_real_escape_string($_POST['hoffice']);
$bname=mysql_real_escape_string($_POST['bname']);
$address=mysql_real_escape_string($_POST['address']);
$manager=mysql_real_escape_string($_POST['manager']);
$fax=mysql_real_escape_string($_POST['fax']);
$town=mysql_real_escape_string($_POST['town']);
$email=mysql_real_escape_string($_POST['email']);
$location=mysql_real_escape_string($_POST['location']);
$tel=mysql_real_escape_string($_POST['tel']);

if(empty($bid) or empty($hoffice) or empty($bname) or empty($address) or empty($manager) or empty($fax) or empty($town) or empty($email) or empty($location) or empty($tel)){
        echo "<script language='javascript' type='text/javascript'> window.alert('Some fields are empty!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='registerbank.php' </script>";
		}
else{
     $sql1="insert into bankregistration values('$bid','$bname','$hoffice','$address','$town','$location','$email','$manager','$fax','$tel')";
mysql_query($sql1)or die(mysql_error());

if($sql1){
		echo "<script language='javascript' type='text/javascript'> window.alert('Registration is Complete!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='adminmain.php' </script>";
		}
		else{
		echo "<script language='javascript' type='text/javascript'> window.alert('Registeration is Incomplete!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='registerbank.php' </script>";
		}
		
		
	}

}
?>
<html>
<head>
<title>Registering Bank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" action="registerbank.php">
  <table width="530" align="center" bgcolor="#FFCCCC" border="1">
    <tr bgcolor="#FFCCCC"> 
      <td colspan="4"> <div align="center"><font color="#660000"><strong>Register Bank</strong></font></div></td>
    </tr>
    <tr> 
      <td width="144">Bank_Id</td>
      <td width="144"><input type="text" name="bid"></td>
      <td width="93">Head Office</td>
      <td width="129"><input type="text" name="hoffice"></td>
    </tr>
	<tr> 
      <td width="144">&nbsp;</td>
      <td width="144">&nbsp;</td>
      <td width="93">&nbsp;</td>
      <td width="129">&nbsp;</td>
	</tr>
    <tr> 
      <td>Bank Name</td>
      <td><input type="text" name="bname"></td>
      <td>Address</td>
      <td rowspan="2"><textarea name="address" rows="5"></textarea></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      
    </tr><tr> 
      <td>Bank Manager</td>
      <td><input type="text" name="manager"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>Location</td>
      <td><input type="text" name="location"></td>
      <td>Fax</td>
      <td><input type="text" name="fax"></td>
    </tr>
	<tr> 
      <td width="144">&nbsp;</td>
      <td width="144">&nbsp;</td>
      <td width="93">&nbsp;</td>
      <td width="129">&nbsp;</td>
	</tr>
    <tr> 
      <td>Town</td>
      <td><input type="text" name="town"></td>
      <td>Telephone</td>
      <td><input type="text" name="tel"></td>
    </tr>
	<tr> 
      <td width="144">&nbsp;</td>
      <td width="144">&nbsp;</td>
      <td width="93">&nbsp;</td>
      <td width="129">&nbsp;</td>
	</tr>
    <tr> 
      <td>Email</td>
      <td><input type="text" name="email"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="save" value="SAVE"></td>
      <td><input type="reset" name="clear" value="Clear"></td>      
      <td><input type="submit" name="cancel" value="CANCEL"></td>
    </tr>
  </table>
</form>
</body>
</html>
