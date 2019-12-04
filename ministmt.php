<?php
session_start();
$id=$_SESSION[client_id];
$conn=mysql_connect("localhost","root","") or die("unable to connect".mysql_error());
$db=mysql_select_db("bankdb",$conn) or die("Unable to locate database");
$result = mysql_query("select bankname,cash_withdraw,withdraw_date from withdraw WHERE client_id=$id")or die (mysql_error());
if ($myrow = mysql_fetch_array($result)) {
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<tr>";
echo '<td>';
echo "<tr bgcolor=\"#549900\">
<td>bankName</td>
<td>Cash withdrawn</td>
<td>Date</td>


</tr>\n";
do 
{

  echo("<tr>");  
  echo("<td><font size=+1>");  
  echo($myrow["bankname"]); 
  echo("<td><font size=+1>");  
  echo($myrow["cash_withdraw"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["withdraw_date"]); 
  echo("</tr>");

} 
while ($myrow = mysql_fetch_array($result));
echo "</table>\n";
echo '<td>';
echo '<tr>';
echo "</table>\n";
}
$result = mysql_query("select bankname,cash_deposit,dep_date from deposit WHERE client_id=$id")or die (mysql_error());
if ($myrow = mysql_fetch_array($result)) {
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<tr bgcolor=\"#549900\">
<td>Bank Name</td>
<td>Cash deposit</td>
<td>Date</td>


</tr>\n";
do 
{

  echo("<tr>");  
  echo("<td><font size=+1>");  
  echo($myrow["bankname"]); 
  echo("<td><font size=+1>");  
  echo($myrow["cash_deposit"]);  
  echo("<td><font size=+1>"); 
  echo($myrow["dep_date"]); 
  echo("</tr>");

} 
while ($myrow = mysql_fetch_array($result));
echo "</table>\n";
} 
 
else {
echo "<h3>Sorry, no such record Found!</h3>";
}	
if  ($_POST['ok']=='DONE')
{
 header('location: atmwelcome.php');
 }
	   
 ?><html><head>
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>
<body>
<form action="confirm.php" method="post">

<input name="ok" value="DONE" type="submit"></form>
</body>
 </html>