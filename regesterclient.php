<title>registration</title>
<?php
$fname=$_POST['fname'];
$oname=$_POST['othername'];
$cid=$_POST['clientid'];
$bdate=$_POST['birthdate'];
$address=$_POST['address'];
$nationality=$_POST['nationality'];
$gender=$_POST['sex'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$division=$_POST['division'];
$location=$_POST['location'];
$sublocation=$_POST['sublocation'];
$kinname=$_POST['kinname'];
$koccupation=$_POST['koccupation'];
$kinid=$_POST['kinid'];
$bank=$_POST['bname'];
$kinaddress=$_POST['kinaddress'];
$kinphone=$_POST['kinphone'];
$kintown=$_POST['kintown'];
$addedby=$_POST['addedby'];
$dateadded=$HTTP_POST_VARS['dateadded'];
$rship=$_POST['rship'];

	if(empty($_POST['fname']) or empty($_POST['othername']) or empty($_POST['clientid']) or empty($_POST['birthdate']) or empty($_POST['address']) or empty($_POST['nationality']) or empty($_POST['phone']) or empty($_POST['email']) or empty($_POST['sex']) or empty($_POST['division']) or empty($_POST['location']) or empty($_POST['sublocation']) or empty($_POST['kinname']) or empty($_POST['koccupation']) or empty($_POST['kinid']) or empty($_POST['kinaddress']) or empty($_POST['kinphone']) or empty($_POST['kintown']) or empty($_POST['addedby']) or empty($_POST['rship'])){
 
		echo "<script language='javascript' type='text/javascript'> window.alert('Some of the field are empty! Please fill it up.'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='regclient.php' </script>";
	}
	else{

$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$sql1="insert into clientdetails values
('$fname','$oname','$cid','$address','$gender','$bank','$birthdate','$nationality','$division','$location','$sublocation','$email','$phone','$addedby',now())";
mysql_query($sql1)or die(mysql_error());
$sql2="insert into kinsdetails values('$cid','$kinname','$koccupation','$kinid','$kinaddress','$kinphone','$kintown','$rship')";
mysql_query($sql2)or die(mysql_error());


if($sql1){
		echo "<script language='javascript' type='text/javascript'> window.alert('Registration is Complete!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='adminmain.php' </script>";
		}
		else{
		echo "<script language='javascript' type='text/javascript'> window.alert('Registeration is Incomplete!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='regclient.php' </script>";
		}
		if($sql2){
		echo "<script language='javascript' type='text/javascript'> window.alert('Registration is Complete!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='adminmain.php' </script>";
		}
		else{
		echo "<script language='javascript' type='text/javascript'> window.alert('Registeration is Incomplete!'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='regclient.php' </script>";
		}
	}
?>
<html>
<head>

<link href="css.css" rel="stylesheet" type="text/css"  />
</head>

</html>