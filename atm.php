<?php
session_start();
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
$s=$_SESSION[bank]; 

?>
<html>
<head>
<title>Birharmun ATM System</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>

<body>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="507" align="center" bgcolor="#333300">
  <tr> 
    <td width="41"></td>
    <td colspan="2"></td>
    <td width="34"></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="2"><div align="center"><font color="#FFFFFF" size="5">Transaction Units</font></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr> 
    <td height="64" > 
      <form name="bal" method="post" action="balance_enquiry.php">
        
        <input type="submit" name="balance"  value=">>" >
    </form></td>
    <td width="204" align="left"><font color="#FFFFFF" size="5">Balance Inquiry</font></td>
    <td width="208" align="right"><font color="#FFFFFF" size="5">Cash withdrawal</font></td>
    <td> 
	<form name="bal" method="post" action="withdrawal.php">
      <input type="submit" name="withdraw"  value="<<" >
      </form></td>
  </tr>
  <tr> 
    <td height="65" > 
      <form name="bal" method="post" action="ministmt.php"> 
    <input type="submit" name="ministatement"  value=">>" ></form>    </td>
    <td align="left"><font color="#FFFFFF" size="5" >MiniStatement</font></td>
    <td align="right"><font color="#FFFFFF" size="5">Transfer</font></td>
    <td>
	<form name="bal" method="post" action="transfer.php">
      <input type="submit" name="transfer"  value="<<" >
      </form></td>
  </tr>
  <tr> 
    <td height="38">
	
      <form name="bal" method="post" action="otherservice.php">
      <input type="submit" name="otherservice"  value=">>" >
    </form></td>
    <td align="left"><font color="#FFFFFF" size="5">Other services</font></td>
    <td align="right"><font color="#FFFFFF" size="5">Pin change</font></td>
    <td>
	<form name="bal" method="post" action="pinchange.php">
      <input type="submit" name="pinchange"  value="<<" >
      </form></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
