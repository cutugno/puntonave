<?php

require_once ('connect.php');

session_start();

// controllo se $_POST['key'] esiste in db
if (isset($_POST['chiave'])){
	$k=$_POST['chiave'];
	$q="SELECT count(*) as count FROM contatti WHERE chiave='$k'";

	if ($query=mysql_query($q,$link)){
		echo $query;
		$res=mysql_fetch_array($query);
		if ($res[0]==1) $_SESSION['logged']=1;
	}
}else{
	header('Location: index.php');
}


