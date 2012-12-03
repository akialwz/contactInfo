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
<font color="white" face="chiller" size="6">Search and Display</form>
<br>
<div align="center">
<form name="detail1" action="detail1.php" method="post">
<font color="white" face="chiller" size="5"><b>Select Category: </b></font>
<Select NAME="find">
  <Option VALUE=""></option>
  <Option VALUE=""></option>
  <Option VALUE=""></option>
  </Select>
<br>
&nbsp; <input type="submit" value="FIND">
</form>
<?php
  $find=$_POST['qu'];
  echo "<h3>Search Results</h3><p>";
  if ($find == ""){
  echo "<p>Please Enter a search term";
  exit;
  }
  
  mysql_connect("a.db.shared.orchestra.io", "user_7b00e425", ".Zzes-8Xsq!kaV") or die(mysql_error());
  mysql_select_db("db_7b00e425") or die(mysql_error());
  $find = strtoupper($find);
  $find = strip_tags($find);
  $find = trim ($find);
  echo"<table border=0 width=50% cellpadding=0 cellspacing=0 bgcolor=black>";
  echo"<tr><td><font color=white face=arial size=5>Name</td>
  <td><font color=white face=arial size=5>Address</td>
  <td><font color=white face=arial size=5>Contact No</td>
  <td><font color=white face=arial size=5>Designation</td>
  </tr>";
  $query = mysql_query("SELECT * FROM contact1 WHERE upper(category) LIKE'%$find%'");
  while($result = mysql_fetch_array($query)){
  $a1 = $result['name'];
  $c2 = $result['Address'];
  $i2 = $result['ContactNO'];
  $p2 = $result['Designation'];
  echo"<tr><td><font color=white face=arial size=5>$a1</td>
  <td><font color=white face=arial size=5>$c2</td>
  <td><font color=white face=arial size=5>$i2</td>
  <td><font color=white face=arial size=5>$p2</td>
  </tr>";
  }
    echo"</table>";
  $matches=mysql_num_rows($query);
  if ($matches == 0){
  echo "Sorry, we can not find an entry to match your query<br><br>";
  }

  echo "<b>Searched For:</b> " .$find;
?>




</div>

</body>
</html>