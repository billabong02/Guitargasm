<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
<link rel ="stylesheet" type="text/css" href="Styles.css"/>
<style type="text/css">
<!--

#line
{
position:absolute;
top:320px;
left:440px;
	
}

-->
</style>



</head>

<body>

<?php

session_start();
session_destroy();

?>

<div id = "line">
You've been successfully logged out, thank you for choosing <a href='index.php'>Guitargasm.com!</a>
</div>

</body>
</html>