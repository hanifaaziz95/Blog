<html>
<head>
</head>
<body>

<?php

$host="dbprojects.eecs.qmul.ac.uk";
$user="ha319";
$pass="aWby3adgo4EPg"; 
$dbName="ha319"; 
$tblName="logn";

mysql_connect("$host", "$user", "$pass")or die("cannot connect");
mysql_select_db("$dbName")or die("cannot select DB");


$username=$_POST['username'];
$password=$_POST['password'];


$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tblName WHERE username='$username' and password='$password'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);



if($count==1){

header("location:addentry.html");
}
else {
header("location:login.html");
}

mysql_close ( $link );
?>
</body>
</html>
