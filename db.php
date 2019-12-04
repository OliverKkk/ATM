<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>dbconnection</title>
<?php
$conn = mysql_connect("localhost","root","");
	if(!$conn){
		echo "Connection to the Database Console was Unsuccessful";
	}
	$select = mysql_select_db("bankdb",$conn);
	if(!$select){
		echo "Connection to the Database was Unsuccessful";
	}
?>
</head>

<body>
</body>
</html>
