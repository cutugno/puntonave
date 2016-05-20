<!-- contatti -->
<a id="anchor-gc">
<div class="panel panel-default adminpanel">
	  <div class="panel-heading"><a data-toggle="collapse" href="#gestionecontatti" aria-expanded="true" aria-controls="gestionecontatti"><h1>GESTIONE CONTATTI</h1></a></div>
	  <div id="gestionecontatti" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="gestionecontatti">
		  <div class="panel-body">
			 <?php if (null != $echomsgcon) : ?>
				  <div class="alert alert-<?php echo $echoalertcon; ?> alert-dismissable fade-in">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $echomsgcon; ?>
				  </div>					  
			 <?php endif ?> 
			  
			 <?php if (null != $elencocon) : ?>
				 <?php // var_dump ($elencocon); ?>
				 <table class="table table-hover">
				  <thead>
					<tr>
					  <th><strong>Nome</strong></th>
					  <th><strong>Email</strong></th>
					  <th></th>
					</tr>
				  </thead>
				  <tbody>
				  <?php foreach ($elencocon as $key=>$val) : ?>
					<tr>
						<td><?php echo $val->nome; ?></td>
						<td><?php echo $val->email; ?></td>
						<td><a href="<?php echo site_url('cancella-contatto/'.$val->id); ?>"><button type="button" class="btn btn-danger btn-sm">CANCELLA</button></a></td>
					</tr>
				  <?php endforeach ?>
				  </tbody>
				</table>
			 <?php else : ?>
			 Nessun contatto presente in database.
			 <?php endif ?>
			 
			 <p class="text-right">
				  <a data-toggle="collapse" href="#gestionecontatti" aria-expanded="true" aria-controls="gestionecontatti"><button type="button" class="btn btn-default btn-xs">Chiudi pannello</button></a>
				  <a href="#anchor-top"><button type="button" class="btn btn-default btn-xs">Torna su</button></a>
			  </p>
		  </div> <!-- fine panel body  -->
	  </div> <!-- fine gestione contatti -->
</div>