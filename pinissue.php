<?php

$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$atmpin=mysql_real_escape_string($_POST['atmpin']);
$atmno=mysql_real_escape_string($_POST['atmno']);
$cid=mysql_real_escape_string($_POST['clientid']);
if  ($_POST['save']=='SAVE')
{
    if(empty($_POST['atmno']) or empty($_POST['atmpin'])){
		echo "<script language='javascript' type='text/javascript'> window.alert('Some of the field are empty!');       </script>";
		echo "<script language='javascript' type='text/javascript'> location.href='pinissue.php' </script>";
		 }
	else{
	$sql="insert into pindetails values('$cid','$atmpin','$atmno',now())";
     mysql_query($sql)or die(mysql_error());	
       echo "<script language='javascript' type='text/javascript'> window.alert('Issueing pin was successful'); </script>";
 		echo "<script language='javascript' type='text/javascript'> location.href='adminmain.php' </script>";
        }
}
if  ($_POST['cancel']=='CANCEL')
{
header('location: adminmain.php');
}
?>
<html>
<head>
<title>Registering Bank</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css.css" rel="stylesheet" type="text/css"  />
<style type="text/css">
<!--
.style3 {font-size: 18px; color: #FFFFFF; }
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form method="post" action="pinissue.php">
  <table width="338" align="center"  border="1">
    <tr > 
    <td height="26"></td>
    </tr>
    <tr> 
      <td width="117"><span class="style3">Client ID </span></td>
      <td width="205">
	  <select name="clientid">

            <?php $query="select DISTINCT(client_id) from clientdetails ;";
                       $result=mysql_query($query);?>
            <?php
  while ($newArray = mysql_fetch_array($result)) {
  // give a name to the fields
   $id = $newArray['client_id'];
   ?>
            <option><?php echo $id;?></option>
            <?php }?>
 
          </select>
	  </td>
    </tr>
	<tr> 
      <td width="117">&nbsp;</td>
      <td width="205">&nbsp;</td>
	</tr><tr> 
      <td><span class="style3">ATM Pin </span></td>
      <td><input type="password" name="atmpin"></td>
   
    </tr>
	<tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
	</tr>
	<tr> 
      <td><span class="style3">ATM Number </span></td>
      <td><input type="password" name="atmno"></td>
   
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr > 
      <td colspan="2"><table width="285" border="0">
        <tr>
          <td width="161" align="center"><input type="submit" name="save" value="SAVE"></td>
          <td width="114"><input type="submit" name="cancel" value="CANCEL"></td>
        </tr>
      </table></td>
      
    </tr>
  </table>
</form>
</body>
</html>
