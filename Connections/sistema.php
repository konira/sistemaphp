<?php
include 'AnonimoErr.php';
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sistema = "localhost";
$database_sistema = "banco4";
$username_sistema = "root";
$password_sistema = "root";
$sistema = mysql_connect($hostname_sistema, $username_sistema, $password_sistema) or trigger_error(mysql_error(),E_USER_ERROR); 
?>