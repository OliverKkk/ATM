
<?php
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
echo $tel;
echo $bid;
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
?>
<html>
<title>registration bank</title>
<head>
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>

<body>

</body>
</html>
