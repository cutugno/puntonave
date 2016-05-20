<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$velaatt="<br><img src=\"img/gabbiano.png\" alt=\"\">";

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Corsi di ormeggio e ancoraggio</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Corso per imparare le tecniche di ormeggio e ancoraggio, per gestire barca d'altura in autonomia, come uno skipper">
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
              <div class="col-xs-4"><img src="img/imgsin-ormeggio.jpg" alt="Puntonave.net - Corsi di ormeggio e ancoraggio"></div>
              <div class="col-xs-2 sottomenu">
                   <table class="table table-hover table-condensed">
                       <thead>
                              <tr><th></th><th><h2>ELENCO ATTIVITA</h2></th></tr>
                       </thead>
                       <tbody>
                              <tr><td></td><td><a href="iniziazione.php">Iniziazione alla vela</a></td></tr>
                              <tr><td></td><td><a href="navigazione.php">Navigazione avanzata a vela e motore</a></td></tr>
                              <tr><td></td><td><a href="weekend.php">Weekend didattici</a></td></tr>
                              <tr><td></td><td><a href="crociere.php">Crociere didattiche</a></td></tr>
                              <tr><td><img src="img/gabbiano.png" alt=""></td><td><a href="ormeggio.php">Ormeggio e ancoraggio</a></td></tr>
                              <tr><td></td><td><a href="cultura.php">Cultura nautica e marinaresca</a></td></tr>
                       </tbody>
                   </table>
              </div>
              <div class="col-xs-6 testo">
                   <h1>Corsi di ormeggio e ancoraggio</h1><br><br>
                   <strong>ORMEGGIO E ANCORAGGIO</strong><br><br>
                   Finchè navighi con tanto mare intorno il rischio di collisioni è limitato, ma per manovrare negli spazi ristretti di un porto occorre essere esperti; così come bisogna conoscere bene le tecniche di ancoraggio se vuoi passare una notte tranquilla alla fonda.<br><br>
                   Questo corso è destinato quindi a chi ha già esperienza di navigazione a vela e motore e vuole essere in grado di gestire una barca d'altura come uno skipper, in completa auotonomia.<br><br>
                   Teoria in barca con materiale didattico su pc.
                   <ul>
                       <li>Tipi di eliche ed effetti evolutivi combinati elica/timone</li>
                       <li>Tecniche di ormeggio (di prua, di poppa, di murata, con corpo morto o ancora)</li>
                       <li>Manovre in porto con vento avverso</li>
                       <li>Tecniche di ancoraggio a vela e motore, utilizzo e taratura del profondimetro</li>
                       <li>Ancoraggi con vento forte</li>
                       <li>Pratica di tutte le tecniche</li>
                   </ul><br><br>
                   <p class="text-right"><a href="pdf/ormeggio.pdf" target="_blank"><button type="button" class="btn btn-link"><span class="glyphicon glyphicon-download" aria-hidden="true"></span>SCARICA BROCHURE</button></a></p>
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
