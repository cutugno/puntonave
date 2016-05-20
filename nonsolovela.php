<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$velanon="<br><img src=\"img/gabbiano.png\" alt=\"\">";

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Nonsolovela</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Le nostre offerte formative">
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
              <div class="col-xs-4"><img src="img/imgsin-nonsolovela.jpg" alt="Puntonave.net - Nonsolovela"></div>
              <div class="col-xs-8 nonsolovela">
                   Oltre alle attività didattiche per imparare ed approfondire la navigazione a vela,<br>l'Associazione Puntonave promuove inziative culturali e artistiche<br>in cui il protagonista è sempre lui: il Mare.<br><br>
                   <strong>"I Colori dell'Acqua"</b></strong> - a cura del maestro <strong>Sandro Marinacci</strong><br>
                   Corso di pittura ad acquerello di soggetti marini rivolto ad adulti, ragazzi<br>e diversamente abili.<br><br>
                   <strong>"Il Caos Sensibile"</strong> - a cura del <strong>dr. Massimo Pasquali</strong><br>
                   La "lettura" degli elementi fluidi<br>attraverso l'osservazione di forme e movimenti<br>archetipici di acqua e aria<br>secondo l'interpretazione staineriana di <em>Theodor Schwenk</em>.<br><br>
                   <strong>"Atlantis"</strong> - di <strong>Luc Besson</strong><br>
                   Proiezione del film in omaggio alla sconfinata bellezza del mare.<br><br>
                   <strong>"Velabimbi"</strong><br>
                  Dedicato ai più piccoli, in collaborazione con maestre di attività manuali,<br>mini-corso teorico di avvicinamento alla vela<br>attraverso illustrazioni, esercitazioni, disegno, pittura<br>e soprattutto giochi.

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
