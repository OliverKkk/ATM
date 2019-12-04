<?php
session_start();

if  ($_POST['login']=='Login')
{
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());
	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
	
$uname=mysql_real_escape_string($_POST['uname']);
$pwd = mysql_real_escape_string($_POST['pwd']);

		$query=mysql_query("SELECT username,password FROM admin WHERE username ='$uname' and password='$pwd'") 
			or die(mysql_error());
		 $total=mysql_num_rows($query);
	        if($total>0)
	                     {  
						 
	            $queryname="SELECT name FROM admin WHERE password='$pwd'";
                $resultname=mysql_query($queryname) or die(mysql_error());
	         	$total=mysql_num_rows($resultname);
	
	           if($total>0)
	             {
                   while ($newArray = mysql_fetch_array($resultname)) 
			              {
						   $surname = $newArray['name'];
						 $_SESSION[name]=$surname;
						  	header('location: adminmain.php');  
                      	
			    }
                     
	          			  }
				                }                   else
											  {
											 echo "Invalid Card.Please your card provider.";
											  } 
	   
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
<h2> Admin Log In</h2>
<form action="" method="post">
<table width="345" border="1" bgcolor="#FF3399">
<tr>
    <td width="143" height="31"><span class="style5"></span></td>
    <br />
    <td width="244">&nbsp;</td>
</tr>
  <tr>
    <td width="143" height="31"><span class="style5">Username</span></td>
    <br />
    <td width="244"><input type="txt" name="uname" maxlength="15" /></td>
  </tr>
  <tr>
    <td height="40"><span class="style5">Password</span></td>
    <td ><input type="password" name="pwd" maxlength="15" /></td>
  </tr>
  <tr>
    <td align="center" colspan="2"><input type="submit" name="login" value="Login" /></td>
  </tr>
</table>
</form>
</div>

  

</body>
</html>
