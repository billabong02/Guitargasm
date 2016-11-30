<?php require_once('../Connections/Guitargasm.php'); ?>
<?php
$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_Guitargasm, $Guitargasm);
$query_Recordset1 = "SELECT * FROM exam";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $Guitargasm) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;

$maxRows_Recordset2 = 10;
$pageNum_Recordset2 = 0;
if (isset($_GET['pageNum_Recordset2'])) {
  $pageNum_Recordset2 = $_GET['pageNum_Recordset2'];
}
$startRow_Recordset2 = $pageNum_Recordset2 * $maxRows_Recordset2;

mysql_select_db($database_Guitargasm, $Guitargasm);
$query_Recordset2 = "SELECT * FROM registration";
$query_limit_Recordset2 = sprintf("%s LIMIT %d, %d", $query_Recordset2, $startRow_Recordset2, $maxRows_Recordset2);
$Recordset2 = mysql_query($query_limit_Recordset2, $Guitargasm) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);

if (isset($_GET['totalRows_Recordset2'])) {
  $totalRows_Recordset2 = $_GET['totalRows_Recordset2'];
} else {
  $all_Recordset2 = mysql_query($query_Recordset2);
  $totalRows_Recordset2 = mysql_num_rows($all_Recordset2);
}
$totalPages_Recordset2 = ceil($totalRows_Recordset2/$maxRows_Recordset2)-1;

$maxRows_Recordset3 = 10;
$pageNum_Recordset3 = 0;
if (isset($_GET['pageNum_Recordset3'])) {
  $pageNum_Recordset3 = $_GET['pageNum_Recordset3'];
}
$startRow_Recordset3 = $pageNum_Recordset3 * $maxRows_Recordset3;

mysql_select_db($database_Guitargasm, $Guitargasm);
$query_Recordset3 = "SELECT * FROM feedback";
$query_limit_Recordset3 = sprintf("%s LIMIT %d, %d", $query_Recordset3, $startRow_Recordset3, $maxRows_Recordset3);
$Recordset3 = mysql_query($query_limit_Recordset3, $Guitargasm) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);

if (isset($_GET['totalRows_Recordset3'])) {
  $totalRows_Recordset3 = $_GET['totalRows_Recordset3'];
} else {
  $all_Recordset3 = mysql_query($query_Recordset3);
  $totalRows_Recordset3 = mysql_num_rows($all_Recordset3);
}
$totalPages_Recordset3 = ceil($totalRows_Recordset3/$maxRows_Recordset3)-1;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Guitargasm Records</title>
<link rel ="stylesheet" type="text/css" href="Styles.css"/>

<style type="text/css">
<!--
#table
{
position:absolute;
top:100px;
left:350px;
}

#gexam
{
position:absolute;
top:30px;
left:350px;
}

#table2
{
position:absolute;
left:350px;
top:500px;
}

#users
{
position:absolute;
top:430px;
left:350px;
}

#table3
{
position:absolute;
left:350px;
top:970px;
}

#feedback
{
position:absolute;
top:900px;
left:350px;
}

#logout
{
position:absolute;
right:3px;
top:0px;
}

-->
</style>
</head>

<body>
<div id="table">

<table border="1">
  <tr>
    <td>Name</td>
    <td>Email</td>
    <td>a1</td>
    <td>a2</td>
    <td>a3</td>
    <td>a4</td>
    <td>a5</td>
    <td>a6</td>
    <td>a7</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['Name']; ?></td>
      <td><?php echo $row_Recordset1['Email']; ?></td>
      <td><?php echo $row_Recordset1['a1']; ?></td>
      <td><?php echo $row_Recordset1['a2']; ?></td>
      <td><?php echo $row_Recordset1['a3']; ?></td>
      <td><?php echo $row_Recordset1['a4']; ?></td>
      <td><?php echo $row_Recordset1['a5']; ?></td>
      <td><?php echo $row_Recordset1['a6']; ?></td>
      <td><?php echo $row_Recordset1['a7']; ?></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
</div>

<div id ="gexam">
<h1>Gexam Form</h1>
</div>

<div id ="users">
<h1>Registered Users</h1>
</div>

<div id ="feedback">
<h1>User Feedback</h1>
</div>

<div id ="logout">
<b><a href="admin.php">Logout</a></b>
</div>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="table3">
  <table border="1">
    <tr>
      <td>Name</td>
      <td>Email</td>
      <td>Country</td>
      <td>attitude</td>
      <td>attitude2</td>
      <td>attitude3</td>
      <td>attitude4</td>
      <td>attitude5</td>
      <td>Comment</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset3['Name']; ?></td>
        <td><?php echo $row_Recordset3['Email']; ?></td>
        <td><?php echo $row_Recordset3['Country']; ?></td>
        <td><?php echo $row_Recordset3['attitude']; ?></td>
        <td><?php echo $row_Recordset3['attitude2']; ?></td>
        <td><?php echo $row_Recordset3['attitude3']; ?></td>
        <td><?php echo $row_Recordset3['attitude4']; ?></td>
        <td><?php echo $row_Recordset3['attitude5']; ?></td>
        <td><?php echo $row_Recordset3['Comment']; ?></td>
      </tr>
      <?php } while ($row_Recordset3 = mysql_fetch_assoc($Recordset3)); ?>
  </table>
</div>
<div id="feedback"></div>
<div id="table2">
  <table border="1">
    <tr>
      <td>Fname</td>
      <td>Lname</td>
      <td>Gender</td>
      <td>Age</td>
      <td>Email</td>
      <td>Country</td>
      <td>City</td>
      <td>Level</td>
      <td>Account</td>
      <td>Comment</td>
    </tr>
    <?php do { ?>
      <tr>
        <td><?php echo $row_Recordset2['Fname']; ?></td>
        <td><?php echo $row_Recordset2['Lname']; ?></td>
        <td><?php echo $row_Recordset2['Gender']; ?></td>
        <td><?php echo $row_Recordset2['Age']; ?></td>
        <td><?php echo $row_Recordset2['Email']; ?></td>
        <td><?php echo $row_Recordset2['Country']; ?></td>
        <td><?php echo $row_Recordset2['City']; ?></td>
        <td><?php echo $row_Recordset2['Level']; ?></td>
        <td><?php echo $row_Recordset2['Account']; ?></td>
        <td><?php echo $row_Recordset2['Comment']; ?></td>
      </tr>
      <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
  </table>
</div>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($Recordset1);

mysql_free_result($Recordset2);

mysql_free_result($Recordset3);
?>
