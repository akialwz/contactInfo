<html>
<head>
<title>Main</title>
</head>
<body bgcolor="#2554C7">
<div align="center">
<table border=0 width=94% cellpadding=0 cellspacing=0>
<tr><td><img src="logo.jpg" height="100" width="100"></td>
<td><font color="white" face="chiller" size="6">
<h1>ContactTrackers<sub>.com</sub></h1></td><br>
<table border=0 width=15% cellpadding=0 cellspacing=0 bgcolor="white">
<tr>
<td>&nbsp; &nbsp; &nbsp;<a href="main1.php">USER PAGE</a></td>
<td>&nbsp; &nbsp; &nbsp;<a href="proj.html">LOGOUT</a></td>
</tr>
</table>
<br>
<font color="white" face="chiller" size="6">Display Of Contact Information</form>
<br>
<div align="center">
<?php
mysql_connect("a.db.shared.orchestra.io", "user_7b00e425", ".Zzes-8Xsq!kaV") or die(mysql_error());
mysql_select_db("db_7b00e425") or die(mysql_error());
echo"<table border=0 width=50% cellpadding=0 cellspacing=0 bgcolor=black>";
echo"<tr><td><font color=white face=arial size=5>Name</td>
<td><font color=white face=arial size=5>Address</td>
<td><font color=white face=arial size=5>Contact No</td>
<td><font color=white face=arial size=5>Category</td>
<td><font color=white face=arial size=5>Designation</td>
</tr>";
  $query = mysql_query("SELECT * FROM contact1");
  while($result = mysql_fetch_array($query)){
  $a1 = $result['name'];
  $c2 = $result['Address'];
  $i2 = $result['ContactNO'];
  $c1 = $result['category'];
  $p2 = $result['Designation'];
  echo"<tr><td><font color=white face=arial size=5>$a1</td>
<td><font color=white face=arial size=5>$c2</td>
<td><font color=white face=arial size=5>$i2</td>
<td><font color=white face=arial size=5>$c1</td>
<td><font color=white face=arial size=5>$p2</td>
</tr>";
  }
    echo"</table>";

?>

</div>
</body>
</html>