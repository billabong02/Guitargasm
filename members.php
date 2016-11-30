<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel ="stylesheet" type="text/css" href="Styles.css"/>
</head>
<body>
<?php

session_start();

if ($_SESSION['username'])

echo "Welcome, ".$_SESSION['username'] ."!";

else die ("You must be logged in to be Gutiargasm content!");

?>
<br />
<a href="logout.php">Logout</a>

</body>
</html>