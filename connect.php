<?php

/*
$db_host = "62.149.150.224";
$db_user = "Sql801819";
$db_password = "m71a51a278";
$db_name = "Sql801819_1";
*/ 

$db_host = "localhost";
$db_user = "root";
$db_password = "Aleare26";
$db_name = "puntonave";

@$link = mysql_connect($db_host, $db_user, $db_password);
if ($link == FALSE){die ("Errore nella connessione.");}

mysql_select_db($db_name, $link) or die ("Errore nella selezione del database.");

?>
