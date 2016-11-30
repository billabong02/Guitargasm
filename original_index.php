<?php require_once('Connections/ConGuitargasm.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Username'])) {
  $loginUsername=$_POST['Username'];
  $password=$_POST['Password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "01.html";
  $MM_redirectLoginFailed = "failed.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_ConGuitargasm, $ConGuitargasm);
  
  $LoginRS__query=sprintf("SELECT Username, Password FROM login WHERE Username='%s' AND Password='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $ConGuitargasm) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Index</title>
<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
	font-size: 18px;
}
body {
	background-color: #000000;
}
a:link {
	color: #FFFFFF;
}
a:visited {
	color: #FFFFFF;
}
a:hover {
	color: #FF0000;
}
a:active {
	color: #FFFFFF;
}
.style3 {
	font-size: 10px;
	font-weight: bold;
}
#Layer1 {
	position:absolute;
	width:108px;
	height:120px;
	z-index:1;
	left: 137px;
	top: 335px;
}
#ultimate {
	position:absolute;
	top:290px;
	left:537px;
}
#welcome {
	position:absolute;
	top:285px;
	left:565px;
}
#please {
	position:absolute;
	top:330px;
	left:552px;
}
#Layer5 {
	position:absolute;
	width:200px;
	height:63px;
	z-index:4;
	left: 18px;
	top: 56px;
}

#test {
	position:absolute;
	right:335px;
}






-->
</style></head>

<body>
<p align="center">&nbsp;</p>
<div id="welcome"><strong>Welcome To Guitargasm.com </strong></div>
<form id="form1" name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
  <table width="248" border="1" align="right">
    <tr>
      <td width="89">Username</td>
      <td width="171"><label>
        <input name="Username" type="text" id="Username" />
      </label></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input name="Password" type="password" id="Password" /></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <input type="submit" name="Submit" value="GO" />
        <a href="Registrationfinal.php" target="_self">New User...Click Here </a></label></td>
    </tr>
  </table>
</form>

<div id = "test">
<img src="images/gogo.JPG" width="697" height="102" />

</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div id="ultimate">
  <p><strong>The Ultimate Guitar Lover's Delight </strong></p>
</div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<div id="please"><strong> Please login to view more content </strong></div>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
<p align="center"><img src="images/chevelle 225.JPG" alt="Chevelle" width="100" height="117" /><img src="images/16-breaking-benjamin-082007.jpg" alt="Breaking Benjamin" width="100" height="117" /><img src="images/linkin_park1.jpg" alt="Linkin Park" width="100" height="117" /><img src="images/disturbed.jpg" alt="Disturbed" width="100" height="117" /><img src="images/foo fighters.jpg" alt="Foo Fighters" width="100" height="117" /><img src="images/stone_sour.jpg" alt="Stone Sour" width="100" height="117" /></p>
<p align="center" class="style3">copyright &copy; 2011 Soomro Entertainment. All Rights reserved &reg;</p>
</body>
</html>
