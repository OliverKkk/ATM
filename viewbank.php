<?php
session_start();
$id=$_SESSION[client_id];
$conn=mysql_connect("localhost","root","") or die("unable to connect".mysql_error());
$db=mysql_select_db("bankdb",$conn) or die("Unable to locate database");
$result = mysql_query("select * from bankregistration")or die (mysql_error());
if ($myrow = mysql_fetch_array($result)) {
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<tr>";
echo '<td>';
echo "<tr bgcolor=\"#549900\">
<td>Bank ID</td>
<td>Bank Name</td>
<td>Head Office</td>
<td>Address</td>
<td>Town</td>
<td>Location</td>
<td>E-mail</td>
<td>Manager</td>
<td>Fax</td>
<td>Telephone Number</td>
</tr>\n";
do 
{

  echo("<tr>");  
  echo("<td><font size=+1>");  
  echo($myrow["bankid"]); 
  echo("<td><font size=+1>");  
  echo($myrow["bankname"]); 
  echo("<td><font size=+1>");  
  echo($myrow["headoffice"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["address"]);   
  echo("<td><font size=+1>");  
  echo($myrow["town"]); 
  echo("<td><font size=+1>");  
  echo($myrow["location"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["email"]); 
  echo("<td><font size=+1>");  
  echo($myrow["manager"]); 
  echo("<td><font size=+1>");  
  echo($myrow["fax"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["telephone"]); 
  echo("</tr>");

} 
while ($myrow = mysql_fetch_array($result));
echo "</table>\n";
echo '<td>';
echo '<tr>';
echo "</table>\n";


while ($myrow = mysql_fetch_array($result));
echo "</table>\n";
} 
 
else {
echo "<h3>Sorry, no such record Found!</h3>";
}	
if  ($_POST['ok']=='DONE')
{
 header('location: adminmain.php');
 }
	   
 ?><html><head>
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>
<body>
<form action="adminmain.php" method="post">

<input name="ok" value="DONE" type="submit"></form>
</body>
 </html>