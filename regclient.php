<?php
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$name= $_SESSION[name];
if  ($_POST['cancel']=='CANCEL')
{
header('location: adminmain.php');
}
if  ($_POST['add']=='ADD')
{
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
$rship=$_POST['rship'];

	if(empty($_POST['fname']) or empty($_POST['othername']) or empty($_POST['clientid']) or empty($_POST['birthdate']) or empty($_POST['address']) or empty($_POST['nationality']) or empty($_POST['phone']) or empty($_POST['email']) or empty($_POST['sex']) or empty($_POST['division']) or empty($_POST['location']) or empty($_POST['sublocation']) or empty($_POST['kinname']) or empty($_POST['koccupation']) or empty($_POST['kinid']) or empty($_POST['kinaddress']) or empty($_POST['kinphone']) or empty($_POST['kintown']) or empty($_POST['rship'])){
 
		echo "<script language='javascript' type='text/javascript'> window.alert('Some of the field are empty! Please fill it up.'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='regclient.php' </script>";
	}
	else{


$sql1="insert into clientdetails values
('$fname','$oname','$cid','$address','$gender','$bank','$birthdate','$nationality','$division','$location','$sublocation','$email','$phone','$name',now())";
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
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Client Registration</title>

<link href="css.css" rel="stylesheet" type="text/css"  />
</head>

<body  ><fieldset ><legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left"></legend>
<legend align="left">Client Details</legend>
<form action="regclient.php" method="post">
  <table width="80%" border="1" bgcolor="#FFCC00" align="center" >
    <tr>
      <td>&nbsp;</td>
      <td colspan="3" align="center" ><font size="+3" color="#FF0000">All field must be filled</font></td>
      
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	  <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="11%">First Name </td>
      <td width="19%"><input type="text" name="fname" id="fname" width="160" /></td>
      <td width="13%">Other Name </td>
      <td width="29%"><input type="text" name="othername" id="othername" width="270" /></td>
      <td width="11%">&nbsp;</td>
      <td width="17%">&nbsp;</td>
    </tr>
    <tr>
      <td>Client id </td>
      <td><input type="text" name="clientid" id="clientid" width="160" /></td>
      <td>Bank</td>
      <td><select name="bname">
            <?php $query="select bankname from bankregistration;";
                       $result=mysql_query($query);?>
            <?php
  while ($newArray = mysql_fetch_array($result)) {
  // give a name to the fields
   $id = $newArray['bankname'];
   ?>
            <option><?php echo $id;?></option>
            <?php }?>
 
          </select></td>
      <td>Date of Birth</td>
      <td><input type="text" name="birthdate" width="160" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td rowspan="2"><textarea name="address" rows="4"></textarea></td>
      <td>Gender</td>
      <td><p>
        <input name="sex" type="radio" value="male" />
        Male</p></td>
      <td>Nationality</td>
      <td><input type="text" name="nationality" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="sex" type="radio" value="female" />
        Female</td>
      <td>Birth Place </td>
      <td><input type="text" name="birthplace" /></td>
    </tr>
    <tr>
      <td>phone</td>
      <td><input type="text" name="phone" width="160" /></td>
      <td>Email</td>
      <td><input type="text" name="email" /></td>
      <td>Division</td>
      <td><input type="text" name="division" /></td>
    </tr>
    <tr>
      <td>Location</td>
      <td><input type="text" name="location" width="160" />
        &nbsp;</td>
      <td>Sub Location </td>
      <td><input type="text" name="sublocation" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">Next of Kin Details </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Name</td>
      <td><input type="text" name="kinname" width="160" /></td>
      <td>Occupation</td>
      <td><input type="text" name="koccupation" width="160" /></td>
      <td>Relationship</td>
      <td><input type="text" name="rship" /></td>
    </tr>
    <tr>
      <td>Id number </td>
      <td><input type="text" name="kinid" width="160" /></td>
      <td>Address</td>
      <td><input type="text" name="kinaddress" width="160" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Mobile Number </td>
      <td><input type="text" name="kinphone" /></td>
      <td>Town</td>
      <td><input type="text" name="kintown" width="160" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="add" value="ADD" /></td>
      <td >
        <table width="200" border="0">
          <tr>
            <td><input type="reset" name="clear" value="CLEAR" /></td>
            <td><input type="submit" name="cancel" value="CANCEL" /></td>
          </tr>
        </table></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</fieldset>
</body>
</html>
