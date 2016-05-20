<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$velaatt="<br><img src=\"img/gabbiano.png\" alt=\"\">";

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Weekend didattici</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Weekend ludico-didattici con veleggiate, manovre in porto, vita di bordo e approfondimenti">
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
              <div class="col-xs-4"><img src="img/imgsin-weekend.jpg" alt="Puntonave.net - Weekend didattici"></div>
              <div class="col-xs-2 sottomenu">
                   <table class="table table-hover table-condensed">
                       <thead>
                              <tr><th></th><th><h2>ELENCO ATTIVITA</h2></th></tr>
                       </thead>
                       <tbody>
                              <tr><td></td><td><a href="iniziazione.php">Iniziazione alla vela</a></td></tr>
                              <tr><td></td><td><a href="navigazione.php">Navigazione avanzata a vela e motore</a></td></tr>
                              <tr><td><img src="img/gabbiano.png" alt=""></td><td><a href="weekend.php">Weekend didattici</a></td></tr>
                              <tr><td></td><td><a href="crociere.php">Crociere didattiche</a></td></tr>
                              <tr><td></td><td><a href="ormeggio.php">Ormeggio e ancoraggio</a></td></tr>
                              <tr><td></td><td><a href="cultura.php">Cultura nautica e marinaresca</a></td></tr>
                       </tbody>
                   </table>
              </div>
              <div class="col-xs-6 testo">
                   <h1>Weekend didattici</h1><br><br>
                   Dedicato a chi ha già le basi della navigazione a vela questo corso consente di conoscere e approfondire ogni aspetto relativo alla pianificazione di una crociera con prove pratiche di entrata e uscita tra i porti di Fiumicino e Roma. 
                   <br><br><br><br>
                   <p class="text-right"><a href="pdf/onedaycruise.pdf" target="_blank"><button type="button" class="btn btn-link"><span class="glyphicon glyphicon-download" aria-hidden="true"></span>SCARICA BROCHURE</button></a></p>
              </div>
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
