<?php

require_once ('connect.php');

session_start();

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$veladow="<br><img src=\"img/gabbiano.png\" alt=\"\">";

$elencodl="";
if (isset($_SESSION['logged'])) {
	$elencodl.="<p class=\"pull-right bg-success\" style=\"padding:15px\"><span class=\"glyphicon glyphicon-ok-circle\" aria-hidden=\"true\"></span> Login effettuato</p>";
}
$q="SELECT * FROM download ORDER BY link";
if ($query=mysql_query($q,$link)){
   $num=mysql_num_rows($query);
   if ($num!=0){
      $elencodl.="
      <strong>".$num."</strong> download disponibile/i.<br><br>
      <ul id=\"elencodl\">
      ";
      while ($res=mysql_fetch_array($query)){
            $tipo=$res[3];
            if ($tipo==1){ // download
               $pulsante="<span class=\"glyphicon glyphicon-download\" aria-hidden=\"true\"></span>SCARICA";
               $prelink="public/files/";
               if (isset($_SESSION['logged'])) {
				  $elencodl.="<li>".$res[2]."&nbsp;&nbsp;&nbsp;<a href=\"".$prelink.$res[1]."\" target=\"_blank\"><button type=\"button\" class=\"btn btn-link\">".$pulsante."</button></a></li>";
			   } else {
				   $elencodl.="<li>".$res[2]."&nbsp;&nbsp;&nbsp;<a href=\"autenticazione.php\" target=\"_self\"><button type=\"button\" class=\"btn btn-link\">".$pulsante."</button></a></li>";
			   }
            }else{ // link esterno
                   $pulsante="<span class=\"glyphicon glyphicon-new-window\" aria-hidden=\"true\"></span>LINK";
                   $prelink="http://";
                   $elencodl.="<li>".$res[2]."&nbsp;&nbsp;&nbsp;<a href=\"".$prelink.$res[1]."\" target=\"_blank\"><button type=\"button\" class=\"btn btn-link\">".$pulsante."</button></a></li>";
            }
            //$elencodl.="<li>".$res[2]." (<a href=\"".$prelink.$res[1]."\" target=\"_blank\">Scarica</a>)</li>";            
      }
      $elencodl.="
      </ul>
      ";
   }else{
         $elencodl="Nessun download disponibile.";
   }
}else{
      $elencodl="Errore nella query: ".mysql_error()." ".mysql_errno();
}

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Download</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Contenuti scaricabili liberamente">
    <META NAME="KEYWORDS" CONTENT="scuola vela, corso vela roma, corsi vela principianti, corsi vela avanzati, crociere didattiche, noleggio yacht, noleggio barca a vela, imparare barca vela, navigazione, ormeggio, vacanze in barca vela, vacanze vela, vacanze isole grecia, patente nautica a vela, patente nautica carteggio, patente nautica roma, patente nautica dispense">

    <meta name="author" content="GraphicLab">

    <link href='http://fonts.googleapis.com/css?family=Dosis:400,500' rel='stylesheet' type='text/css'>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easy-ticker.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="css/stile.css" rel="stylesheet" type="text/css">
    <link href="css/li-scroller.css" rel="stylesheet" type="text/css">

  </head>
  <body>
     <div class="container">
         
         <?php include ('header.php'); ?>

          <div class="cont">
              <div class="download">
                   <?php echo $elencodl; ?>
              </div>
              <div class="imgfondo"><img src="img/imgfondo.jpg" alt="Puntonave.net - Download"></div>
          </div> <!-- cont -->
          
          <?php include ('footer.php'); ?>

     </div> <!-- container -->
  </body>
  <script>
     $(function(){
         $('#barranews').easyTicker({
		visible: 1,
		interval: 4000
	});
     });
   </script>
</html>
