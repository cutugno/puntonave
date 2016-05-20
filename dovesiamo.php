<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$veladov="<br><img src=\"img/gabbiano.png\" alt=\"\">";

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca - Dove siamo</TITLE>
    <META NAME="DESCRIPTION" CONTENT="Puntonave - Corsi di vela d'altura e charter">
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
              <div class="col-xs-4"><img src="img/imgsin-dovesiamo.jpg" alt="Puntonave.net - Dove siamo"></div>
              <div class="col-xs-8 testo">
                   La nostra base nautica preferita per le attività di vela è il porto turistico di Anzio, facilmente raggiungibile da Roma in auto o in treno.<br>
                   Le crociere didattiche si svolgono lungo il litorale, alle isole Pontine e all'isola d'Elba.<br><br>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5981.112070834648!2d12.635888162296714!3d41.44885402146726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1325a4ba99650ecb%3A0xee6ee450fa38c11d!2sVia+Molo+Pamphili%2C+00042+Anzio+RM!5e0!3m2!1sit!2sit!4v1416219927018" width="800" height="350" frameborder="0" style="border:0"></iframe><br><br>
                   <div align="center">
                       <a href="http://www.trenitalia.com/" target="_blank"><img src="img/logo-trenitalia.gif" alt="Trenitalia"></a><br><br>
                       <!-- http://www.meteocentrale.ch/ Homepage-Box -->
                 	   <div style="margin: 0px; padding: 0px; width: 180px; color: black; font-size: 11px; font-family: Arial; text-align:left;border: 1px solid #114484; background-color: #FFF; background-image: url(http://www.meteocentrale.ch/fileadmin/hpb/header_blue.png); background-repeat: no-repeat;line-height:normal;">
                  		<a href="http://www.meteocentrale.ch/"  target="_blank" style="text-shadow: 1px 1px 0px #cf9200; padding: 3px 6px; display: block; font-size: 12px; color: white; text-decoration: none; font-weight: bold;background-color:none;">meteo | centrale</a>
                  		<div style="font-size: 11px; padding: 3px 6px; padding-top: 0px; font-weight: bold; text-shadow: 1px 1px 0px black;color:white" id="place">
                  			<a href="http://www.meteocentrale.ch/it/europa/italia/meteo-anzio/details/N-171946/"  target="_blank" title="http://www.meteocentrale.ch/ - Anzio" style="font-size: 11px; font-weight: bold; text-shadow: 1px 1px 0px black;color:white;text-decoration:none;background-color:none;">Anzio</a>
                  		</div>
                  		<div id="weather" style="font-size:10px;">
                  			<script src="http://data.meteomedia.de/details/DetailController.php?customer=homepagebox&amp;code=19029&amp;language=it" type="text/javascript"></script>
                  		</div>
                      </div>
                      <!-- http://www.meteocentrale.ch/ Homepage-Box -->
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
