<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!--trying to redirect the page...
<meta http-equiv="refresh" content="5"/><base href="01.php" />
-->

<title>Guitargasm Login</title>
<link rel ="stylesheet" type="text/css" href="Styles.css"/>
<style type="text/css">
<!--

#line
{
position:absolute;
top:320px;
left:510px;
	
}

-->
</style>

</head>
<body>
<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)
{

$connect = mysql_connect("localhost","root","") or die ("Couldn't connect!");
mysql_select_db("guitargasm") or die ("Couldn't find db!");	


$query = mysql_query("SELECT * FROM users WHERE username='$username'");

$numrows = mysql_num_rows($query);
if ($numrows!=0)
{
while ($row = mysql_fetch_assoc($query))
{

$dbusername = $row['username'];
$dbpassword = $row['password'];	

}

//check to see if they match
if ($dbusername==$username&&$dbpassword==$password)
{
	echo " <div id = 'line'>Login Successful! <a href='01.php'>click here</a> to continue to Guitargasm...</div>";
	$_SESSION['username']=$username;
	
	
}
else 
echo "incorrect password!";



}
else die("That user doesn't exist!");
	
}

else

die //("please enter your username and password!");

?>


<!--
<div align="center">
<h1>Welcome, !</h1>
<h1><a href="01.html" target="_self">Click here</a> to continue to Guitargasm...</h1>
</div>

<meta http-equiv="Refresh" content="2; URL=01.php/">
-->

</body>
</html>