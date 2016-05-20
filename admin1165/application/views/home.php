<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- Puntonave.net - Vela e Cultura marinaresca -->
    <TITLE>Puntonave.net - Vela e Cultura marinaresca</TITLE>
    <META NAME="DESCRIPTION" CONTENT="">
    <META NAME="KEYWORDS" CONTENT="">

    <meta name="author" content="GraphicLab">

    <link href='http://fonts.googleapis.com/css?family=Dosis:400,500' rel='stylesheet' type='text/css'>

    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/fileinput.js"></script>

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link href="../css/stile.css" rel="stylesheet" type="text/css">
    <link href="../css/fileinput.css" rel="stylesheet" type="text/css" />

  </head>
  <body>
     <div class="container">
		<a id="anchor-top"></a>
        <div class="row header">
			 <div class="logo col-md-4"><a href="index.php"><img src="../img/logo-puntonave.jpg" alt="Puntonave.net - Vela e Cultura marinaresca"></a></div>
		</div>
        <br>
        <a href="#anchor-gd">Gestione Download</a> - 
		<a href="#anchor-nd">Nuovo Download</a> - 
		<a href="#anchor-nl">Nuovo Link Esterno</a> - 
		<a href="#anchor-gn">Gestione Notizie</a> - 
		<a href="#anchor-nn">Nuova Notizia</a> - 
		<a href="#anchor-gc">Gestione Contatti</a>
		<br>
		<hr>
		<br>
		<!-- download -->
		<a id="anchor-gd">
		<div class="panel panel-default adminpanel">
			  <div class="panel-heading"><a data-toggle="collapse" href="#gestionedownload" aria-expanded="true" aria-controls="gestionedownload"><h1>GESTIONE DOWNLOAD/LINK ESTERNI</h1></a></div>
			  <div id="gestionedownload" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="gestionedownload">
				  <div class="panel-body">
					  <?php if (null != $echomsgdl) : ?>
					  <div class="alert alert-<?php echo $echoalertdl; ?> alert-dismissable fade-in">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $echomsgdl; ?>
					  </div>					  
					  <?php endif ?> 	
					  
					  <?php if (null != $elencodl) : ?>
					  <?php // var_dump ($elencodl); ?>
					  <table class="table table-hover">
						  <thead>
							<tr>
							  <th><strong>Tipo</strong></th>
							  <th><strong>Link</strong></th>
							  <th><strong>Descrizione</strong></th>
							  <th></th>
							</tr>
						  </thead>
						  <tbody>
							 <?php foreach ($elencodl as $key=>$val) : ?>
							 <tr>
								  <td><span class="glyphicon glyphicon-<?php echo $val->iconatipo; ?>" aria-hidden="true"></span></td>  
								  <td><?php echo $val->link; ?></td>
								  <td><?php echo character_limiter($val->descrizione,100); ?></td>
								  <td>
									  <a href="<?php echo $val->urlanteprima ?>" target="_blank"><button type="button" class="btn btn-primary btn-sm">ANTEPRIMA</button></a>
									  <a href="<?php echo site_url('cancella-download/'.$val->id); ?>"><button type="button" class="btn btn-danger btn-sm">CANCELLA</button></a>
								  </td>
							 </tr>
							 <?php endforeach ?>
						  </tbody>
					  </table>	  
					  <?php else : ?>
					  Nessun download presente in database.
					  <?php endif ?>
					  
					  <p class="text-right">
						  <a data-toggle="collapse" href="#gestionedownload" aria-expanded="true" aria-controls="gestionedownload"><button type="button" class="btn btn-default btn-xs">Chiudi pannello</button></a>
						  <a href="#anchor-top"><button type="button" class="btn btn-default btn-xs">Torna su</button></a>
					  </p>
				  </div> <!-- fine panel body  -->
			  </div> <!-- fine gestionedownload -->
		</div>
		<a id="anchor-nd">
		<div class="panel panel-default adminpanel">
			  <div class="panel-heading"><a data-toggle="collapse" href="#nuovodownload" aria-expanded="true" aria-controls="nuovodownload"><h1>NUOVO DOWNLOAD</h1></a></div>
			  <div id="nuovodownload" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="nuovodownload">
				  <div class="panel-body">
					 <?php if (null != $echomsgndl) : ?>
					  <div class="alert alert-<?php echo $echoalertndl; ?> alert-dismissable fade-in">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $echomsgndl; ?>
					  </div>					  
					  <?php endif ?>  
				      <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('nuovo-download'); ?>" enctype="multipart/form-data">
						<div class="form-group">
						  <label for="uploadfile" class="col-sm-2 control-label"><strong>File</strong></label>
						  <div class="col-sm-6">
							<input id="uploadfile" name="uploadfile" type="file" multiple="true" class="file" data-show-upload="false" data-show-preview="false" data-max-file-size="2048" data-max-file-count="1" data-overwrite-initial="false" required="true" oninvalid="this.setCustomValidity('Selezionare un file da caricare')" onchange="this.setCustomValidity('')">
							<span class="small">(Dimensione massima consentita per il file: 2MB)</span>
						  </div>
						</div>
						<div class="form-group">
						  <label for="descrizione" class="col-sm-2 control-label"><strong>Descrizione</strong></label>
						  <div class="col-sm-6">
							<textarea class="form-control" id="descrizione" name="descrizione" rows="3" required="true" oninvalid="this.setCustomValidity('Inserisci una descrizione.')" onchange="this.setCustomValidity('')"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success btn-sm">AGGIUNGI</button>
						  </div>
						</div>
					 </form>
					 <p class="text-right">
						  <a data-toggle="collapse" href="#nuovodownload" aria-expanded="true" aria-controls="nuovodownload"><button type="button" class="btn btn-default btn-xs">Chiudi pannello</button></a>
						  <a href="#anchor-top"><button type="button" class="btn btn-default btn-xs">Torna su</button></a>
					  </p>
				  </div> <!-- fine panel body  -->
			  </div>
		</div> <!-- fine panel -->
		
		<!-- link esterno -->
		<a id="anchor-nl">
		<div class="panel panel-default adminpanel">
			  <div class="panel-heading"><a data-toggle="collapse" href="#nuovolinkext" aria-expanded="true" aria-controls="nuovolinkext"><h1>NUOVO LINK ESTERNO</h1></a></div>
			  <div id="nuovolinkext" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="nuovolinkext">
				  <div class="panel-body">
					 <?php if (null != $echomsgnle) : ?>
					    <div class="alert alert-<?php echo $echoalertnle; ?> alert-dismissable fade-in">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <?php echo $echomsgnle; ?>
					    </div>					  
					 <?php endif ?>    
					 <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('nuovo-link-esterno'); ?>" enctype="multipart/form-data">
						<div class="form-group">
						  <label for="linkext" class="col-sm-2 control-label"><strong>Link</strong></label>
						  <div class="col-sm-6">
							<input id="linkext" class="form-control" name="linkext" type="text" required="true" oninvalid="this.setCustomValidity('Inserisci un link.')" onchange="this.setCustomValidity('')">
							<span class="small"> Digitare senza "http://" (esempio: <u>www.google.it</u>)</span>
						  </div>
						</div>
						<div class="form-group">
						  <label for="descrizione" class="col-sm-2 control-label"><strong>Descrizione</strong></label>
						  <div class="col-sm-6">
							<textarea class="form-control" id="descrizione" name="descrizione" rows="3" required="true" oninvalid="this.setCustomValidity('Inserisci una descrizione.')" onchange="this.setCustomValidity('')"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success btn-sm">AGGIUNGI</button>
						  </div>
						</div>
					 </form>
					 <p class="text-right">
						  <a data-toggle="collapse" href="#nuovolinkext" aria-expanded="true" aria-controls="nuovolinkext"><button type="button" class="btn btn-default btn-xs">Chiudi pannello</button></a>
						  <a href="#anchor-top"><button type="button" class="btn btn-default btn-xs">Torna su</button></a>
					  </p>
				  </div> <!-- fine panel body  -->
			  </div>
		</div> <!-- fine panel -->

		<!-- notizie -->
		<a id="anchor-gn">
		<div class="panel panel-default adminpanel">
			  <div class="panel-heading"><a data-toggle="collapse" href="#gestionenotizie" aria-expanded="true" aria-controls="gestionenotizie"><h1>GESTIONE NOTIZIE</h1></a></div>
			  <div id="gestionenotizie" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="gestionenotizie">
				  <div class="panel-body">	
					  <?php if (null != $echomsgnw) : ?>
						  <div class="alert alert-<?php echo $echoalertnw; ?> alert-dismissable fade-in">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $echomsgnw; ?>
						  </div>					  
					  <?php endif ?> 	
					  
					  <?php if (null != $echomsgunw) : ?>
						  <div class="alert alert-<?php echo $echoalertunw; ?> alert-dismissable fade-in">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $echomsgunw; ?>
						  </div>					  
					  <?php endif ?> 	
					  				  
					  <?php if (null != $elenconw) : ?>
					     <?php // var_dump ($elenconw); ?>
						 <table class="table table-hover">
						  <thead>
							<tr>
							  <th><strong>Notizia</strong></th>
							  <th></th>
							</tr>
						  </thead>
						  <tbody>
							 <?php foreach ($elenconw as $key=>$val) : ?>
							 <tr>
								  <td><?php echo character_limiter($val->news,100); ?></td>
								  <td><button type="button" class="btn btn-primary btn-sm editnw" data-toggle="collapse" data-target="#edit<?php echo $val->id; ?>" aria-expanded="false" aria-controls="edit<?php echo $val->id; ?>">MODIFICA</button>
									  <a href="<?php echo site_url('cancella-notizia/'.$val->id); ?>"><button type="button" class="btn btn-danger btn-sm">CANCELLA</button></a>
								  </td>
							  </tr>
							  <tr>
								  <td colspan="3">
									  <div id="edit<?php echo $val->id; ?>" class="collapse">
										   <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('aggiorna-notizia/'.$val->id); ?>">
											  <div class="form-group">
												<label for="notizia" class="col-sm-2 control-label"><strong>Testo notizia</strong></label>
												<div class="col-sm-6">
												  <textarea class="form-control notizia" data-t="edit<?php echo $val->id; ?>" name="notizia" rows="6" required="true" oninvalid="this.setCustomValidity('Inserisci del testo.')" onchange="this.setCustomValidity('')"><?php echo $val->news; ?></textarea>
												</div>
											  </div>
											  <div class="form-group">
												<div class="col-sm-offset-2 col-sm-10">
												  <button type="submit" class="btn btn-success btn-sm" id="btn_edit<?php echo $val->id; ?>" style="display:none">AGGIORNA</button>
												</div>
											  </div>
										   </form>
									  </div>
								  </td>
							  </tr>
							 <?php endforeach ?>
						  </tbody>
					  </table>	  
					  <?php else : ?>
					  Nessuna notizia presente in database.
					  <?php endif ?>
					  
					  <p class="text-right">
						  <a data-toggle="collapse" href="#gestionenotizie" aria-expanded="true" aria-controls="gestionenotizie"><button type="button" class="btn btn-default btn-xs">Chiudi pannello</button></a>
						  <a href="#anchor-top"><button type="button" class="btn btn-default btn-xs">Torna su</button></a>
					  </p>
				  </div> <!-- fine panel body  -->
			  </div> <!-- fine gestionenews -->
		</div>
		<a id="anchor-nn">
		<div class="panel panel-default adminpanel">
			  <div class="panel-heading"><a data-toggle="collapse" href="#nuovanotizia" aria-expanded="true" aria-controls="nuovanotizia"><h1>NUOVA NOTIZIA</h1></a></div>
			  <div id="nuovanotizia" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="nuovanotizia">
				  <div class="panel-body">
					  <?php if (null != $echomsgnnw) : ?>
						  <div class="alert alert-<?php echo $echoalertnnw; ?> alert-dismissable fade-in">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $echomsgnnw; ?>
						  </div>					  
					  <?php endif ?> 	
					  <form class="form-horizontal" role="form" method="post" action="<?php echo site_url('nuova-notizia'); ?>">
						<div class="form-group">
						  <label for="notizia" class="col-sm-2 control-label"><strong>Testo notizia</strong></label>
						  <div class="col-sm-6">
							<textarea class="form-control notizia" id="notizia" name="notizia" rows="6" required="true" oninvalid="this.setCustomValidity('Inserisci del testo.')" onchange="this.setCustomValidity('')"></textarea>
						  </div>
						</div>
						<div class="form-group">
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success btn-sm">AGGIUNGI</button>
							<input type="hidden" name="a" value="6">
						  </div>
						</div>
					 </form>
					 <p class="text-right">
						  <a data-toggle="collapse" href="#nuovanotizia" aria-expanded="true" aria-controls="nuovanotizia"><button type="button" class="btn btn-default btn-xs">Chiudi pannello</button></a>
						  <a href="#anchor-top"><button type="button" class="btn btn-default btn-xs">Torna su</button></a>
					  </p>
				  </div> <!-- fine panel body  -->
			  </div>
		</div> <!-- fine panel -->
		
		<div style="height: 400px"></div>
     </div> <!-- fine container -->
     
     <script>
		$("button.editnw").click(function(){
			var c=$(this).html();
			if (c=="MODIFICA"){
				$(this).removeClass("btn-primary").addClass("btn-warning").html("ANNULLA MODIFICA");
			}else{
				$(this).removeClass("btn-warning").addClass("btn-primary").html("MODIFICA");
			}
		});
		
		$("textarea.notizia").keydown(function() {
			var t=$(this).attr("data-t");
			$("button#btn_"+t).show();
		});
     </script>
  </body>
</html>
