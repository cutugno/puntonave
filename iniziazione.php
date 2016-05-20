<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$velaatt="<br><img src=\"img/gabbiano.png\" alt=\"\">";

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Corso di iniziazione alla navigazione a vela</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Corso base di navigazione a vela: norme di sicurezza, teoria illustrata interattiva e pratica per imparare a dirigere, orzare, poggiare e virare">
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
              <div class="col-xs-4"><img src="img/imgsin-iniziazione.jpg" alt="Puntonave.net - Iniziazione alla vela"></div>
              <div class="col-xs-2 sottomenu">
                   <table class="table table-hover table-condensed">
                       <thead>
                              <tr><th></th><th><h2>ELENCO ATTIVITA</h2></th></tr>
                       </thead>
                       <tbody>
                              <tr><td><img src="img/gabbiano.png" alt=""></td><td><a href="iniziazione.php">Iniziazione alla vela</a></td></tr>
                              <tr><td></td><td><a href="navigazione.php">Navigazione avanzata a vela e motore</a></td></tr>
                              <tr><td></td><td><a href="weekend.php">Weekend didattici</a></td></tr>
                              <tr><td></td><td><a href="crociere.php">Crociere didattiche</a></td></tr>
                              <tr><td></td><td><a href="ormeggio.php">Ormeggio e ancoraggio</a></td></tr>
                              <tr><td></td><td><a href="cultura.php">Cultura nautica e marinaresca</a></td></tr>
                       </tbody>
                   </table>
              </div>
              <div class="col-xs-6 testo">
                   <h1>Corso di iniziazione alla navigazione a vela</h1><br><br>
                   Corso base per neofiti. Durata: 3 giornate<br><br>
                   <strong>Prima giornata</strong><br>
                   <ul>
                       <li>Norme di sicurezza</li>
                       <li>Teoria illustrata in barca tramite PC e simulatore<br>(modellino realistico di barca a vela)</li>
                       <li>Modulo DOP: Dirigi-Orza-Poggia</li>
                       <li>Pratica base al timone e alle manovre</li>                     
                       <li>Modulo OPV: Orza-Poggia-Vira. Primi bordi con virata</li>
                   </ul>
                   <strong>Seconda giornata</strong><br>
                   <ul>
                       <li>Check individuale di Teoria della vela</li>
                       <li>Modulo DOPV: Dirigi-Orza-Poggia-Vira</li>
                       <li>Pratica dei moduli precedenti</li>
                       <li>Modulo OPA: Orza-Poggia-Abbatti. Primi bordi con abbattuta</li>
                   </ul>
                   <strong>Terza giornata</strong><br>
                   <ul>
                       <li>Check individuale di Teoria della vela</li>
                       <li>Modulo DOPVA: Dirigi-Orza-Poggia-Vira-Abbatti</li>
                       <li>Pratica e perfezionamento dei moduli precedenti</li>
                       <li>debriefing</li>
                       <li>Veleggiata</li>
                   </ul>
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
