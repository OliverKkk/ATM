<?php
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$id=$_SESSION[client_id];
$cpin = mysql_real_escape_string($_POST['cpin']);
$npin = mysql_real_escape_string($_POST['npin']);
$conpin= mysql_real_escape_string($_POST['conpin']);

	if(empty($_POST['cpin']) or empty($_POST['npin'])){
 
		echo "<script language='javascript' type='text/javascript'> window.alert('Some of the field are empty! Please fill it up.'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='Pinchange.php' </script>";
	}
	else{

	
	$atmno = mysql_real_escape_string($_POST['cpin']);


$rs_check = mysql_query("select atm_pin from pindetails where client_id=$id") or die (mysql_error()); 
$num = mysql_num_rows($rs_check);
  // Match row found with more than 1 results  - the user is authenticated. 
    if ( $num > 0 ) { 
	              
					$rs_activ = mysql_query("update pindetails set atm_pin='$npin' WHERE atm_pin='$cpin'") or die(mysql_error());
						echo "<script language='javascript' type='text/javascript'> window.alert('pin has been changed!'); </script>";
						echo "<script language='javascript' type='text/javascript'> location.href='confirm.php' </script>";	

	                 }
			
	 else {
	     echo "<script language='javascript' type='text/javascript'> window.alert('Cannot be Change!'); </script>";
		 echo "<script language='javascript' type='text/javascript'> location.href='pinchange.php' </script>";		   
	      }

	 
}
	
	
	?>

<html>
<head>
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>
</html>