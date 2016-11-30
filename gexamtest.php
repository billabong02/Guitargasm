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
  $insertSQL = sprintf("INSERT INTO exam (Name, Email, a1, a2, a3, a4, a5, a6, a7) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['Name'], "text"),
                       GetSQLValueString($_POST['Email'], "text"),
                       GetSQLValueString($_POST['a1'], "text"),
                       GetSQLValueString($_POST['a2'], "text"),
                       GetSQLValueString($_POST['a3'], "text"),
                       GetSQLValueString($_POST['a4'], "text"),
                       GetSQLValueString($_POST['a5'], "text"),
                       GetSQLValueString($_POST['a6'], "text"),
                       GetSQLValueString($_POST['a7'], "text"));

  mysql_select_db($database_ConGuitargasm, $ConGuitargasm);
  $Result1 = mysql_query($insertSQL, $ConGuitargasm) or die(mysql_error());

  $insertGoTo = "received.html";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.ico" >
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Gexam</title>
<link rel ="stylesheet" type="text/css" href="Styles.css"/>
<style type="text/css">
<!--

#gexam
{
	position:absolute;
	left: 285px;
	top: 200px;

}

#bannerst
{
position:absolute;
left:270px;


}

-->
</style>
</head>

<body>
<div id="bannerst">
<img src="images/GExam.JPG" width="800" height="124" />
</div>


<form id="form2" name="form2" method="POST" action="<?php echo $editFormAction; ?>">
<div id="gexam">
  <table width="64%" height="1321" border="4" align="center" cellpadding="6" cellspacing="6">
    <tr>
      <td width="47%">Name:
        <label>
        <input name="Name" type="text" id="Name" size="45" />
      </label></td>
      <td width="53%">Email:
      <input name="Email" type="text" id="Email" size="50" /></td>
    </tr>
    <tr>
      <td colspan="2"><p>Question 1 - How many strings does a conventional guitar have? </p>
        <p>
          <input name="a1" type="radio" value="four" />
          4 Strings</p>
        <p>
          <input name="a1" type="radio" value="six" />
          6 Strings </p>
        <p>
          <input name="a1" type="radio" value="eight" />
          8 Strings </p>
      <p></p></td>
    </tr>
    <tr>
      <td colspan="2"><label></label>
        <p>Question 2 - What is the standard tuning on the guitar?</p>
      <p>
        <input name="a2" type="radio" value="Standard" />
        EADGBE      </p>
      <p>
        <input name="a2" type="radio" value="Dropd" />
        DADGBE </p>
      <p>
        <input name="a2" type="radio" value="Dropc" />
        CGCFAD </p>
      <p>&nbsp;</p></td>
    </tr>
    
    <tr>
      <td colspan="2"><p>Question 3 - Which one of these guitars usually has a sound hole?</p>
      <p>
        <input name="a3" type="radio" value="Electric" />
Electric Guitar </p>
      <p>
        <input name="a3" type="radio" value="Bass" />
        Bass Guitar </p>
      <p>
        <input name="a3" type="radio" value="Acoustic" />
        Acoustic Guitar </p>
      <p>&nbsp; </p></td>
    </tr>
    <tr>
      <td colspan="2"><p>Question 4 - Where is the head stock on most guitars located?</p>
        <p>
<input name="a4" type="radio" value="Top" />          
Top Part</p>
        <p>
          <input name="a4" type="radio" value="Middle" />
          Middle Part </p>
        <p>
          <input name="a4" type="radio" value="Bottom" />
          Bottom Part </p>        </td>
    </tr>
    <tr>
      <td colspan="2"><p>Question 5 - Which guitar doesn't usually requires an amplifier to generate sound? </p>
        <p>
<input name="a5" type="radio" value="Acoustic" />          
Acoustic Guitar </p>
        <p>
          <input name="a5" type="radio" value="Bass" />
          Bass Guitar </p>
        <p>
          <input name="a5" type="radio" value="Electric" />
        Electric Guitar        </p></td>
    </tr>
    <tr>
      <td colspan="2"><p>Question 6 - If you're a right handed guitarist which hand would you use on the fret board? </p>
        <p>
          <input name="a6" type="radio" value="Right" />
          Right Hand </p>
        <p>
          <input name="a6" type="radio" value="Left" />
          Left Hand </p>
        <p>
          <input name="a6" type="radio" value="Other" />
          Other</p>      </td>
    </tr>
    <tr>
      <td colspan="2"><p>Question 7 - How often should you replace the strings on your electric guitar? </p>
        <p>
          <input name="a7" type="radio" value="2" />
          2 weeks </p>
        <p>
          <input name="a7" type="radio" value="4" />
          4 weeks </p>
        <p>
          <input name="a7" type="radio" value="1" />
      1 month</p></td>
    </tr>
    <tr>
      <td colspan="2"><p>
        <label>
        <input type="submit" name="Submit" value="Submit" />
        </label>
      </p>        </td>
    </tr>
  </table>
  <p>
    <input type="hidden" name="MM_insert" value="form2">
</p>
</div>
</form>

<p>&nbsp;</p>
</body>
</html>
