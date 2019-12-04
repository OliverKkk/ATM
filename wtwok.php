<?php 
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$id=$_SESSION[client_id];
$bank=$_SESSION[bank];
$result=mysql_query("select totalcash from tcash where bankname='$bank'")or die (mysql_error());

if ($myrow = mysql_fetch_array($result)) {
do 
{
  $tcash = $myrow["totalcash"];
} 
while ($myrow = mysql_fetch_array($result));
	
if ($tcash >= 2000)
{	
 $wdrawal="UPDATE tcash SET totalcash=(totalcash - 2000)where bankname='$bank' and client_id=$id";
mysql_query($wdrawal,$conn) or die("Insertion Failed:" . mysql_error()); 
$insert="INSERT INTO deposit values('','$bank','$id',2000,now())";
$rstt=mysql_query($insert) or die("Insertion Failed:" . mysql_error());
$insert="INSERT INTO withdraw values('','$bank','$id',2000,now())";
$rstt=mysql_query($insert) or die("Insertion Failed:" . mysql_error());

       echo "<script language='javascript' type='text/javascript'> window.alert('withdrawal successful!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='withdrawal.php' </script>";	
		
		
		}
		else{
		echo "<script language='javascript' type='text/javascript'> window.alert('you have insufficient fund!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='withdrawal.php' </script>";	
		
		}
		 
		 }   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>withdrawal</title>
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>

<body>
</body>
</html>
