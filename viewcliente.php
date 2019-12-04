<?php
session_start();
$id=$_SESSION[client_id];
$conn=mysql_connect("localhost","root","") or die("unable to connect".mysql_error());
$db=mysql_select_db("bankdb",$conn) or die("Unable to locate database");
$result = mysql_query("select * from clientdetails where bankname='equity'")or die (mysql_error());
if ($myrow = mysql_fetch_array($result)) {
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<tr>";
echo '<td>';
echo "<tr bgcolor=\"#549900\">
<td>SurName</td>
<td>Other Names</td>
<td>ID Number</td>
<td>Address</td>
<td>Gender</td>
<td>Bank Name</td>
<td>Date of Birth</td>
<td>Nationality</td>
<td>Division</td>
<td>Location</td>
<td>Sub Location</td>
<td>E-mail</td>
<td>Phone Number</td>
<td>Added By</td>
<td>Date Added </td>
</tr>\n";
do 
{

  echo("<tr>");  
  echo("<td><font size=+1>");  
  echo($myrow["surname"]); 
  echo("<td><font size=+1>");  
  echo($myrow["othername"]); 
  echo("<td><font size=+1>");  
  echo($myrow["client_id"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["address"]); 
   echo("<td><font size=+1>");  
  echo($myrow["gender"]);
  echo("<td><font size=+1>");   
  echo($myrow["bankname"]);   
  echo("<td><font size=+1>");  
  echo($myrow["birth_date"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["nationality"]); 
  echo("<td><font size=+1>");  
  echo($myrow["division"]); 
  echo("<td><font size=+1>");  
  echo($myrow["location"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["sublocation"]); 
   echo("<td><font size=+1>"); 
  echo($myrow["email"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["mobile_no"]); 
  echo("<td><font size=+1>"); 
  echo($myrow["added_by"]); 
  echo("<td><font size=+1>"); 
  echo($myrow["date_added"]); 
  echo("</tr>");

} 
while ($myrow = mysql_fetch_array($result));
echo "</table>\n";
echo '<td>';
echo '<tr>';
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