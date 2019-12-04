<?php 
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$id=$_SESSION[client_id];
$bank=mysql_real_escape_string($_POST['bankname']);
$amount=mysql_real_escape_string($_POST['amountdeposited']);
if  ($_POST['add']=='ADD')
{

    if(empty($_POST['amountdeposited'])){
		echo "<script language='javascript' type='text/javascript'> window.alert('Some of the field are empty! Please fill it up.');       </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='deposit.php' </script>";
		 }
	else{
			
			 $wdrawal="UPDATE tcash SET totalcash=totalcash + $amount,date=now() where bankname='$bank' and client_id=$id";
			  mysql_query($wdrawal,$conn) or die("Insertion Failed:" . mysql_error()); 
			  $insert="INSERT INTO deposit values('','$bank',$id,'$amount',now())";
			  $rstt=mysql_query($insert) or die("Insertion Failed:" . mysql_error());
			  echo "<script language='javascript' type='text/javascript'> window.alert('Deposit completed successful!'); </script>";
			  echo "<script language='javascript' type='text/javascript'> location.href='confirm.php' </script>";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Added successfully</title>
</head>

<body>

</body>
</html>
