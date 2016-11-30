<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ConGuitargasm = "localhost";
$database_ConGuitargasm = "guitargasm";
$username_ConGuitargasm = "root";
$password_ConGuitargasm = "";
$ConGuitargasm = mysql_pconnect($hostname_ConGuitargasm, $username_ConGuitargasm, $password_ConGuitargasm) or trigger_error(mysql_error(),E_USER_ERROR); 
?>