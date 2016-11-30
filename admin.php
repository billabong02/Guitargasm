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
  $MM_redirectLoginSuccess = "records.php";
  $MM_redirectLoginFailed = "failed2.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_ConGuitargasm, $ConGuitargasm);
  
  $LoginRS__query=sprintf("SELECT Username, Password FROM admin WHERE Username='%s' AND Password='%s'",
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
<link rel ="stylesheet" type="text/css" href="Styles.css"/>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Area</title>
<link rel ="stylesheet" type="text/css" href="Styles.css"/>
<style type="text/css">
<!--
#admin
{
position:absolute;
top:320px;
left:550px;
}

#back
{
position:absolute;
top:500px;
left:530px;
}

#login
{
position:absolute;
top:250px;
left:515px;
}

-->
</style>
</head>
<body>

<div id="login">
<h1>Adminmistrative Login</h1>
</div>

<div id="back">
<h1><a href="01.php">Back To Guitargasm!</h1></a>
</div>

<div id="admin">

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
        <a href="Registrationfinal.php" target="_self"></a></label></td>
    </tr>
  </table>
</form>

</div>


</body>
</html>
