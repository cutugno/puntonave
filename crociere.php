<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$velaatt="<br><img src=\"img/gabbiano.png\" alt=\"\">";

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Captain Cruising School: Crociere didattiche</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Le nostre crociere didattiche di complemento alla Patente Nautica">
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
              <div class="col-xs-4"><img src="img/imgsin-crociere.jpg" alt="Puntonave.net - Crociere didattiche"></div>
              <div class="col-xs-2 sottomenu">
                   <table class="table table-hover table-condensed">
                       <thead>
                              <tr><th></th><th><h2>ELENCO ATTIVITA</h2></th></tr>
                       </thead>
                       <tbody>
                              <tr><td></td><td><a href="iniziazione.php">Iniziazione alla vela</a></td></tr>
                              <tr><td></td><td><a href="navigazione.php">Navigazione avanzata a vela e motore</a></td></tr>
                              <tr><td></td><td><a href="weekend.php">Weekend didattici</a></td></tr>
                              <tr><td><img src="img/gabbiano.png" alt="" style="vertical-align:middle"></td></td><td><a href="crociere.php">Crociere didattiche</a></td></tr>
                              <tr><td></td><td><a href="ormeggio.php">Ormeggio e ancoraggio</a></td></tr>
                              <tr><td></td><td><a href="cultura.php">Cultura nautica e marinaresca</a></td></tr>
                       </tbody>
                   </table>
              </div>
              <div class="col-xs-6 testo">
                   <h1>Crociere didattiche</h1><br><br>
                   <strong>CAPTAIN CRUISING SCHOOL</strong><br>
                   Durata: 3-4 giornate<br><br>
                   Per comandanti in pectore o neopatentati. Queste crocierine di tre o quattro giorni consentono all'allievo un notevole accrescimento delle sue conoscenze mettendolo in grado di noleggiare e gestire una barca d'altura in piena autonomia.<br><br>
                   La progressione dell'apprendimento è eccezionale, si fa tutto ciò che si deve saper fare in crociera, in prima persona e in contesti splendidi del <em>mare nostrum</em>.<br><br>
                   Hai preso la patente nautica e non ti senti ancora in grado di salpare?<br>
                   Hai esperienza di crociera ma come ospite e non come comandante?<br><br>
                   Vedi sulla brochure i dettagli delle nostre crociere didattiche.<br><br><br>
                   <p class="text-right"><a href="pdf/captaincruise.pdf" target="_blank"><button type="button" class="btn btn-link"><span class="glyphicon glyphicon-download" aria-hidden="true"></span>SCARICA BROCHURE</button></a></p>
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
