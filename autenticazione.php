<?php

$velachi=$velaatt=$veladov=$velanon=$veladow=$velacon="";
$velaatt="<br><img src=\"img/gabbiano.png\" alt=\"\">";

session_start();

if (isset($_SESSION['logged'])) {
	 header('Location: index.php');
}

?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca</TITLE>
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
    <link href="css/stile_form.css" rel="stylesheet" type="text/css">
    <link href="css/li-scroller.css" rel="stylesheet" type="text/css">

  </head>
  <body>
     <div class="container">
          
          <?php include ('header.php'); ?>

          <div class="cont">
			<div class="auth text-center">
				<div class="row">
					<div class="form">
					  <ul class="tab-group">
						<li class="tab active" id="tabacc"><a href="#accedi">Accedi</a></li>
						<li class="tab" id="tabreg"><a href="#registrati">Registrati</a></li>
					  </ul>

					  <div class="tab-content">
						<div id="accedi">
						  <h1>Accedi per scaricare il nostro materiale</h1>
						  
						  <form method="post">
							<div class="field-wrap">
							  <label>
								  Email<span class="req">*</span>
								</label>
							  <input type="email" name="email" required autocomplete="off" />
							</div>
							
							<button class="button button-block" id="logbtn">Login</button>
						  </form>
						  <small>Non hai un account? Allora <a href="#registrati" id="reglink">Registrati</a></small>
						  <br><br>
						  <div class="alert" id="logalert" style="display:none">
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  </div>
						</div><!-- /accedi -->

						<div id="registrati">
						  <h1>Registra un nuovo account su Puntonave</h1>
						  
						  <form action="/" method="post">
							<div class="top-row">
							  <div class="field-wrap">
								<label>
									Nome<span class="req">*</span>
								  </label>
								<input type="text" name="nome" required autocomplete="off" />
							  </div>

							  <div class="field-wrap">
								<label>
									Cognome<span class="req">*</span>
								  </label>
								<input type="text" name="cognome" required autocomplete="off" />
							  </div>
							</div>

							<div class="field-wrap">
							  <label>
								  Email<span class="req">*</span>
								</label>
							  <input type="email" name="regemail" required autocomplete="off" />
							</div>

							<button type="submit" class="button button-block" id="regbtn">Invia Dati</button>
						  </form>
						   <small>Hai già un account? Allora <a href="#accedi" id="acclink">Accedi</a></small>
						  <br><br>
						  <div class="alert" id="regalert" style="display:none">
							
						  </div>
						</div><!-- /registrati -->
					  </div>
					  <!-- tab-content -->
					</div>
					<!-- /form -->			
				</div>
			</div>
		  </div>
          
          <?php include ('footer.php'); ?>

     </div> <!-- container -->
     <script type="text/javascript">
		$(function(){
			 $('#barranews').easyTicker({
				visible: 1,
				interval: 4000
			 });
		});
		$('.form').find('input, textarea').on('keyup blur focus', function (e) {

		  var $this = $(this),
			  label = $this.prev('label');

			  if (e.type === 'keyup') {
					if ($this.val() === '') {
				  label.removeClass('active highlight');
				} else {
				  label.addClass('active highlight');
				}
			} else if (e.type === 'blur') {
				if( $this.val() === '' ) {
					label.removeClass('active highlight'); 
					} else {
					label.removeClass('highlight');   
					}   
			} else if (e.type === 'focus') {
			  
			  if( $this.val() === '' ) {
					label.removeClass('highlight'); 
					} 
			  else if( $this.val() !== '' ) {
					label.addClass('highlight');
					}
			}

		});

		$('.tab a').on('click', function (e) {
		  
		  e.preventDefault();
		  
		  $(this).parent().addClass('active');
		  $(this).parent().siblings().removeClass('active');
		  
		  target = $(this).attr('href');
		  $('.tab-content > div').not(target).hide();
		  $(target).fadeIn(600);
		  
		});

		$("#reglink").click(function(e){
			 $("#tabreg").addClass('active');
			 $("#tabacc").removeClass('active');
			 target = $(this).attr('href');
			 $('.tab-content > div').not(target).hide();
			 $(target).fadeIn(600);
		});

		$("#acclink").click(function(e){
			 $("#tabacc").addClass('active');
			 $("#tabreg").removeClass('active');
			 target = $(this).attr('href');
			 $('.tab-content > div').not(target).hide();
			 $(target).fadeIn(600);
		});

		$("#logbtn").click(function(e){
			e.preventDefault();
			var email=$("input[name='email']").val();
			if (email!="") {
				var dati="email="+email;
				var url="admin1165/auth/l";
				$.post(url,dati,function(msg) { 
					var msg=jQuery.parseJSON(msg);					
					if (msg.login==1) {
						$("#logalert").removeClass().addClass("alert "+msg.class).html(msg.html).fadeIn(600);
						// setta sessione logged=1						
						$.post("logged.php","chiave="+msg.chiave,function(msg){							
							setTimeout(function(){
								window.location = "download.php";
							}, 2000);							
						});						
						
					}
				});
			}else{
				$("#logalert").removeClass().addClass("alert alert-danger").html("Inserire un indirizzo email").fadeIn(600);
			}	
		});
		
		$("#regbtn").click(function(e){
			e.preventDefault();
			var nome=$("input[name='nome']").val();
			var cognome=$("input[name='cognome']").val();
			var regemail=$("input[name='regemail']").val();
			
			if ((nome=="") || (cognome=="") || (regemail=="")) {
				$("#regalert").removeClass().addClass("alert alert-danger").html("Compilare tutti i campi").fadeIn(600);
			}else{
				var dati="nome="+nome+"&cognome="+cognome+"&regemail="+regemail;
			}
		});
     </script>
  </body>

</html>
