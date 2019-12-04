<?php
session_start();

$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$id=$_SESSION[client_id];
$bank=$_SESSION[bank];
if  ($_POST['transfer']=='Transfer')
{
if(empty($_POST['amount'])){
 
		echo "<script language='javascript' type='text/javascript'> window.alert('Empty field! .'); </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='transfer.php' </script>";
	} 
	else{
$amount=mysql_real_escape_string($_POST['amount']);
$tbank=mysql_real_escape_string($_POST['bname']);
$result=mysql_query("SELECT totalcash FROM tcash WHERE bankname='$bank' and client_id=$id")or die (mysql_error());

if ($myrow = mysql_fetch_array($result)) {
do 
{
  $tcash = $myrow["totalcash"];
} 
while ($myrow = mysql_fetch_array($result));
	
if ($tcash > $amount){	

$insert="INSERT INTO transfer values('','$id','$tbank','$bank',now(),'$amount')";
$rstt=mysql_query($insert);
$sql="UPDATE tcash SET totalcash=(totalcash - $amount) WHERE client_id=$id and bankname='$bank'";
$result=mysql_query($sql);
$sql1="UPDATE tcash SET totalcash=(totalcash + $amount) WHERE client_id=$id and bankname='$tbank'";
$rst=mysql_query($sql1);

echo "<script language='javascript' type='text/javascript'> window.alert('Transfered successfully'); </script>";
echo "<script language='javascript' type='text/javascript'> location.href='index.php' </script>";	
	
}
else
{
echo "<script language='javascript' type='text/javascript'> window.alert('you have insufficient fund!'); </script>";
echo "<script language='javascript' type='text/javascript'> location.href='transfer.php' </script>";	

}
}
}
}
?>
<html>
<head>
<title>Transfering amount</title>
<link href="css.css" rel="stylesheet" type="text/css"  />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body><form action="transfer.php" method="post">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table height="147" align="center" bgcolor="#006666">
    <tr>
      
    </tr>
    <tr> 
      <td colspan="2"><div align="center"><font color="#FFFFFF" size="4">Transfering From &nbsp;<?php echo $_SESSION[bank];?></font></div></td>
    </tr>
    <tr> 
      <td width="132"><font color="#FFFFFF" size="4">Transfer To </font></td>
      <td width="163"><font color="#FFFFFF" size="4">
        <select name="bname" size="1" id="bname">
            <?php $query="select bankname from bankregistration WHERE bankname NOT LIKE '$bank';";
                       $result=mysql_query($query);?>
            <?php
  while ($newArray = mysql_fetch_array($result)) {
  // give a name to the fields
   $id = $newArray['bankname'];
   ?>
            <option><?php echo $id;?></option>
            <?php }?>
          </select>
      </font></td>
    </tr>
	<tr> 
      <td width="132"><font color="#FFFFFF" size="4">Transfer Amount</font></td>
      <td width="163"><font color="#FFFFFF" size="4">
        <input type="text" name="amount">
      </font></td>
    </tr>
    <tr> 
      <td height="59" colspan="2"><div align="center">
          <font color="#FFFFFF" size="4">
<input type="submit" name="transfer" value="Transfer">
&nbsp;&nbsp;&nbsp;</font></div></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
