<html>
<head>
<title>SystemValidate</title>
</head>

<body bgcolor="#2554C7">
<div align="center">
<table border=0 width=94% cellpadding=0 cellspacing=0>
<tr><td><img src="logo.jpg" height="100" width="100"></td>
<td><font color="white" face="chiller" size="6">
<h1>ContactTrackers<sub>.com</sub></h1></td><br>
<table border=0 width=100% cellpadding=0 cellspacing=0 bgcolor="white">
<tr>
<td><div align="right"><a href="proj.html">HOME</a></div></td>
</tr>
</table>
<br><br><br>
<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con = mysql_connect("a.db.shared.orchestra.io","user_364d0732","&m$FB%9hF3rsbz");
if(!$con)
{
echo "Error";
}
$db = mysql_select_db("db_364d0732");  
$result = mysql_query("select * from signinfo where id= '".$username."'"); 
while($row = mysql_fetch_assoc( $result )) {
$name=$row['id'];
$pass=$row['password'] ;
$reference=$row['link'];
if(strcmp($pass,$password)==0)
{
echo "<form action=$reference>";
echo "<div align=center>";
echo "<font color=black face=calibri size=5>";
echo "You have Been Successfully Logged In. Welcome $name<br>";
echo "<input type=submit>";
echo "</form>";
}
else
{
echo "<h2>Invalid Please Try Again!!!!!!</h2>";
echo "<form name=acknow action=acknowledge.php method=post><b>User Name</b> <input type=text size=14 name=username><br>
<b>Password       </b><input type=password size=14 name=password>
<br>
<input type=submit value=LogIn><br></form>";
}
}

$numrows = mysql_num_rows($result); 
if($numrows == 0) { 
echo "<h2>Invalid Please Try Again!!!!!!</h2>";
echo "<form name=acknow action=acknowledge.php method=post><b>User Name</b> <input type=text size=14 name=username><br>
<b>Password       </b><input type=password size=14 name=password>
<br>
<input type=submit value=LogIn><br></form>";
} 


?>
</body>
</html>