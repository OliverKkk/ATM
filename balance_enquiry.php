<?php
session_start();
$id=$_SESSION[client_id];
$bank=$_SESSION[bank];
$conn=mysql_connect("localhost","root","") or die("unable to connect".mysql_error());
$db=mysql_select_db("bankdb",$conn) or die("Unable to locate database");
$result = mysql_query("select bankname,totalcash from tcash WHERE client_id=$id and bankname='$bank'")or die (mysql_error());
if ($myrow = mysql_fetch_array($result)) {
echo "<table align='center' border=1 bordercolor='#0099FF'cellpadding=0 cellspacing=0>\n";
echo "<tr bgcolor=\"#549900\"><td colspan=\"2\">Balance</td>
<td>Bank Name</td>
<td colspan=\"2\">Date</td></tr>\n";
do 
{
 
  echo("<tr>");  
  echo("<td><font size=+1>");  
  echo($myrow["bankname"]);
  echo("<td><font size=+1>"); 
  echo("<td><font size=+1>");  
  echo($myrow["totalcash"]);  
  echo("<td><font size=+1>"); 
  echo date(' d F Y'); 
  echo("</tr>");
  
   

} 
while ($myrow = mysql_fetch_array($result));
echo "</table>\n";
} else {
echo "<h3>Sorry, no such record Found!</h3>";
}	
	  
 ?><html><head>
<link href="css.css" rel="stylesheet" type="text/css"  />
</head>
<script language="javascript">
if (window.print)
      {
	  document.write('<form><input type=button value="Your Balance is =>" onclick="window.print()"></form>')
	  }</script>
 </html>