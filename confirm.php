<?php
session_start();

if  ($_POST['ok']=='YES')
{
 header('location: atm.php');
 }
 elseif  ($_POST['no']=='NO')
{

 header('location: index.php');
 }
		
   ?>
 
       
<html>
<head>
<title>Authenticating</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css.css" rel="stylesheet" type="text/css"  />
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>


<body>
<form name="form1" method="post"  action="confirm.php">
  <p><div align="right"><a href="adminlogin.php">Admin login</a></div></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="428" align="center" bordercolor="#000000" bgcolor="#333300" border="0">
  <tr>
  <td><span class="style1">Thank for using this service 
  </span></td>
  </tr>
    <tr> 
      <td width="418" height="45"> <div align="center"><strong><font color="#FFFFFF" size="4" face="Georgia, Times New Roman, Times, serif">DO YOU WANT ANOTHER SERVICE? </font></strong></div></td>
    </tr>
    <tr> 
      <td height="21"></td>
    </tr>
    <tr> 
      <td colspan="2">
        
          <table width="419" border="0">
            <tr>
              <td align="center">  <input type="submit" name="ok" value="YES"></td>
              <td>  <input type="submit" name="no" value="NO"></td>
            </tr>
          </table>        </td>
		
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
