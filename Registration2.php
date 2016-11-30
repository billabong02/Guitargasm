<?php require_once('Connections/ConGuitargasm.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form2")) {
  $insertSQL = sprintf("INSERT INTO registration (Fname, Lname, Age, Gender, `Level`, Account, Country, Email) VALUES (%s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Fname'], "text"),
                       GetSQLValueString($_POST['Lname'], "text"),
                       GetSQLValueString($_POST['Age'], "text"),
                       GetSQLValueString($_POST['Gender'], "text"),
                       GetSQLValueString($_POST['Level'], "text"),
                       GetSQLValueString($_POST['Account'], "text"),
                       GetSQLValueString($_POST['Country'], "text"),
                       GetSQLValueString($_POST['Email'], "text"));

  mysql_select_db($database_ConGuitargasm, $ConGuitargasm);
  $Result1 = mysql_query($insertSQL, $ConGuitargasm) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #000000;
}
body,td,th {
	color: #FFFFFF;
}
-->
</style></head>

<body>
<form id="form1" name="form1" method="post" action="">
</form>

<form method="post" name="form2" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">First Name:</td>
      <td><input type="text" name="Fname" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Lname:</td>
      <td><input type="text" name="Lname" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Age:</td>
      <td><input type="text" name="Age" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td height="72" align="right" nowrap>Gender:</td>
      <td valign="baseline"><table>
        <tr>
          <td width="64"><p>&nbsp;
                </p>
            <p>&nbsp;              </p>
            <p>
              <input type="radio" name="Gender" value="Male" >
            Male</p></td>
        </tr>
        <tr>
          <td><input type="radio" name="Gender" value="Female" >
            Female</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Level:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="Level" value="Novice" >
            Novice</td>
        </tr>
        <tr>
          <td><input type="radio" name="Level" value="Intermediate" >
            Intermediate</td>
        </tr>
        <tr>
          <td><input type="radio" name="Level" value="Advanced" >
            Advanced</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Account:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="Account" value="Free User" >
            Free User</td>
        </tr>
        <tr>
          <td><input type="radio" name="Account" value="Paid User" >
            Paid User</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Country:</td>
      <td><input type="text" name="Country" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Email:</td>
      <td><input type="text" name="Email" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Submit"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form2">
</form>
<p>&nbsp;</p>
</body>
</html>
