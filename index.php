<?php
session_start();

if  ($_POST['ok']=='OK')
{
$conn = mysql_connect("localhost","root","") or die("unable to connect".mysql_error());
	
$select = mysql_select_db("bankdb",$conn) or die("unable to connect".mysql_error());
	
$atmnumber=mysql_real_escape_string($_POST['atmnumber']);
		$query=mysql_query("SELECT * FROM pindetails WHERE atm_no ='$atmnumber'") 
			or die(mysql_error());
		 $total=mysql_num_rows($query);
	        if($total>0)
	    {
          
	            $queryname="select surname,othername,clientdetails.client_id from clientdetails,pindetails where pindetails.atm_no='$atmnumber' and clientdetails.client_id=pindetails.client_id";
                $resultname=mysql_query($queryname) or die(mysql_error());
	         	$total=mysql_num_rows($resultname);
	
	           if($total>0)
	             {
                   while ($newArray = mysql_fetch_array($resultname)) 
			          {
						   $surname = $newArray['surname'];
						   $othernam=$newArray['othername'];
						   $client_id=$newArray['client_id'];
						   $_SESSION[surname]=$surname;
						   $_SESSION[othername]=$othernam;  
						   $_SESSION[client_id]=$client_id; 
                      	header('location: atmwelcome.php');
	          			  }
			    }
	       }
	                                   else
											  {
											 echo "Invalid Card.Please your card provider.";
											  }

	 
	   
}

		

   ?>
 
       
<html>
<head>
<title>Authenticating</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>


<body>
<form name="form1" method="post"  action="index.php">
  <p><div align="right"><a href="adminlogin.php">Admin login</a></div></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="370" align="center" bordercolor="#000000" bgcolor="#333300" border="1">
    <tr> 
      <td height="45"> <div align="center"><strong><font color="#FFFFFF" size="4" face="Georgia, Times New Roman, Times, serif">ENTER 
          YOUR ATM CARD NUMBER</font></strong></div></td>
    </tr>
    <tr> 
      <td height="48"> <div align="center"> 
          <input type="text" name="atmnumber">
        </div></td>
    </tr>
    <tr> 
      <td><div align="center"> 
          <input type="submit" name="ok" value="OK">
        </div></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
