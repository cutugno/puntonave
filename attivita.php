<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$velaatt="<br><img src=\"img/gabbiano.png\" alt=\"\">";

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Attività</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Le nostre attività didattiche, ricreative e iniziative culturali sulla vela">
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
              <div class="col-xs-4"><img src="img/imgsin-attivita.jpg" alt="Puntonave.net - Attività"></div>
              <div class="col-xs-4 col-xs-offset-2 elenco">
                   <ul class="list-unstyled">
                          <li><a style="font-size: 120%" href="iniziazione.php">Iniziazione alla vela</a></li>
                          <li><a style="font-size: 110%" href="navigazione.php">Navigazione avanzata a vela e motore</a></li>
                          <li><a style="font-size: 110%" href="weekend.php">Weekend didattici</a></li>
                          <li><a style="font-size: 110%" href="crociere.php">Crociere didattiche</a></li>
                          <li><a style="font-size: 110%" href="ormeggio.php">Ormeggio e ancoraggio</a></li>
                          <li><a style="font-size: 110%" href="cultura.php">Cultura nautica e marinaresca</a></li>
                   </ul>
                   <!--<span class="small"><em>Le attività sono rivolte unicamente ai soci in regola con il tesseramento e in possesso di certificato medico per attività non agonistiche in corso di validità (art.3 del DM 23/04/2013)</em></span>-->
					<div style="margin-top:180px; width:467px"><span>In collaborazione con</span>&nbsp;&nbsp;<a href="http://www.rinaldininautica.it" target="_blank"><img style="vertical-align:middle !important;" src="img/logo_rinaldini.png" alt="logo Nautica Rinaldini - www.rinaldininautica.it" style="margin-top:20px"></a>&nbsp;&nbsp;<span>Scuola Nautica Rinaldini</span><br>
						<p class="small text-right" style="margin-top:-28px">Aut. N. 73 Provincia di Roma 20/10/2006</p>
					</div>
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
