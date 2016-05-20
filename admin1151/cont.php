<?php

require_once('../connect.php');

if (isset($_POST['a'])){
	$a=$_POST['a'];
}else if (isset($_GET['a'])){
	$a=$_GET['a'];
}else{
	$a=0;
}

if (isset($_POST['id'])){
	$id=$_POST['id'];
}else if (isset($_GET['id'])){
	$id=$_GET['id'];
}else{
	$id=0;
}

// aggiungi link esterno
if ($a==1){
   $linkext=htmlentities($_POST['linkext'],ENT_QUOTES,'ISO-8859-1');
   $descrizione=htmlentities($_POST['descrizione'],ENT_QUOTES,'ISO-8859-1');
   $q="INSERT INTO download (link,descrizione,tipo) VALUES('$linkext','$descrizione','2')";
   if ($query=mysql_query($q,$link)){
      echo "Link esterno aggiunto.";
   }else{
         echo "Errore nella query: ".mysql_error()." ".mysql_errno();
   }
}

// cancella download/link esterno
if ($a==2){
   if ($id!=""){
      $q="SELECT link,tipo FROM download WHERE id='$id'";
      if ($query=mysql_query($q,$link)){
         $num=mysql_num_rows($query);
         if ($num!=0){
            //cancella file
            $res=mysql_fetch_row($query);
            $q="DELETE FROM download WHERE id='$id'";
            if ($query=mysql_query($q,$link)){
               $linkdel="../files/".$res[0];
               if (file_exists($linkdel)){
                  unlink ($linkdel);
               }
               $tipo=$res[1];
               if ($tipo==1){
                  echo "Download cancellato.";
               }else{
                     echo "Link esterno cancellato.";
               }
            }else{
                  echo "Errore nella query: ".mysql_error()." ".mysql_errno();
            }
         }else{
               echo "File non disponibile";
         }
      }else{
            echo "Errore nella query: ".mysql_error()." ".mysql_errno();
      }
   }
}

// aggiungi download
if ($a==3){
   // gestione upload file
   $dir="../public/files/";
   if (isset($_FILES['uploadfile'])){
      $file = $_FILES['uploadfile'];
      if ($file['error'] == UPLOAD_ERR_OK and is_uploaded_file($file['tmp_name'])){
         move_uploaded_file($file['tmp_name'],$dir.$file['name']);
         //echo $file['name'];
         $linkdl=$file['name'];
      }
   }
   $descrizione=$_POST['descrizione'];
   $descrizione=htmlentities($descrizione,ENT_QUOTES,'ISO-8859-1');
   $q="INSERT INTO download (link,descrizione,tipo) VALUES('$linkdl','$descrizione','1')";
   if ($query=mysql_query($q,$link)){
      echo "Download aggiunto.";
   }else{
         echo "Errore nella query: ".mysql_error()." ".mysql_errno();
   }
}

// aggiorna notizia
if ($a==4){
   $notizia=$_POST['notizia'];

   $notizia=htmlentities($notizia,ENT_QUOTES,'ISO-8859-1');

   if ($id!=""){

      // query update
      $q="UPDATE news SET news='$notizia' WHERE id='$id'";
      if ($query=mysql_query($q,$link)){
         echo "Notizia aggiornata.";
      }else{
            echo "Errore nella query: ".mysql_error()." ".mysql_errno();
      }
   }
}

//cancella notizia
if ($a==5){
   if ($id!=""){     
      $q="DELETE FROM news WHERE id='$id'";
      if ($query=mysql_query($q,$link)){
         echo "Notizia cancellata.";
      }else{
            echo "Errore nella query: ".mysql_error()." ".mysql_errno();
      }
   }
}

// aggiungi notizia
if ($a==6){
   $notizia=$_POST['notizia'];
   $notizia=htmlentities($notizia,ENT_QUOTES,'ISO-8859-1');
   $q="INSERT INTO news (news) VALUES('$notizia')";
   if ($query=mysql_query($q,$link)){
      echo "Notizia aggiunta.";
   }else{
         echo "Errore nella query: ".mysql_error()." ".mysql_errno();
   }
}

// cancella contatto
if ($a==7){
	if ($id!=""){     
      $q="DELETE FROM contatti WHERE id='$id'";
      if ($query=mysql_query($q,$link)){
         echo "Contatto cancellato.";
      }else{
            echo "Errore nella query: ".mysql_error()." ".mysql_errno();
      }
   }	
}

// gestione download/link esterni
$q="SELECT * FROM download ORDER BY link";
if ($query=mysql_query($q,$link)){
   $num=mysql_num_rows($query);
   if ($num!=0){
      // elenco download
      $elencodl="<table class=\"table table-hover\">
                      <thead>
                        <tr>
                          <th>Tipo</th>
                          <th>Link</th>
                          <th>Descrizione</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
      ";
      while ($res=mysql_fetch_array($query)){
            $descr=$res[2];
            $lun=strlen($descr);
            if ($lun>30){
               $descr=substr($descr,0,30)."...";
            }
            $tipo=$res[3];
            if ($tipo==1){ // download
               $iconatipo="<span class=\"glyphicon glyphicon-download\" aria-hidden=\"true\"></span>";
               $prelink="../files/";
            }else{ // link esterno (cloud)
                  $iconatipo="<span class=\"glyphicon glyphicon-new-window\" aria-hidden=\"true\"></span>";
                  $prelink="http://";
            }
            $elencodl.="<tr>
                          <td>".$iconatipo."</td>  
                          <td>".$res[1]."</td>
                          <td>".$descr."</td>
                          <td>
                              <a href=\"".$prelink.$res[1]."\" target=\"_blank\"><button type=\"button\" class=\"btn btn-primary btn-sm\">ANTEPRIMA</button></a>
                              <a href=\"index.php?a=2&id=".$res[0]."\"><button type=\"button\" class=\"btn btn-danger btn-sm\">CANCELLA</button></a>
                          </td>
                      </tr>
            ";
      }
      $elencodl.="</tbody></table>";
   }else{
         $elencodl="Nessun download presente in database.";
   }

}else{
      $elencodl="Errore nella query: ".mysql_error()." ".mysql_errno();
}

// gestione notizie
$q="SELECT * FROM news ORDER BY news";
if ($query=mysql_query($q,$link)){
   $num=mysql_num_rows($query);
   if ($num!=0){
      // elenco download
      $elenconw="<table class=\"table table-hover\">
                      <thead>
                        <tr>
                          <th>Notizia</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
      ";
      while ($res=mysql_fetch_array($query)){
            $elenconw.="<tr>
                          <td>".$res[1]."</td>
                          <td><button type=\"button\" class=\"btn btn-primary btn-sm\" data-toggle=\"collapse\" data-target=\"#edit".$res[0]."\" aria-expanded=\"false\" aria-controls=\"edit".$res[0]."\">MODIFICA</button>
                              <a href=\"index.php?a=5&id=".$res[0]."\"><button type=\"button\" class=\"btn btn-danger btn-sm\">CANCELLA</button></a>
                          </td>
                      </tr>
                      <tr>
                          <td colspan=\"3\">
                              <div id=\"edit".$res[0]."\" class=\"collapse\">
                                   <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"index.php\">
                                      <div class=\"form-group\">
                                        <label for=\"notizia\" class=\"col-sm-2 control-label\">Testo notizia</label>
                                        <div class=\"col-sm-6\">
                                          <textarea class=\"form-control\" id=\"notizia\" name=\"notizia\" rows=\"3\">".$res[1]."</textarea>
                                        </div>
                                      </div>
                                      <div class=\"form-group\">
                                        <div class=\"col-sm-offset-2 col-sm-10\">
                                          <button type=\"submit\" class=\"btn btn-success btn-sm\">SALVA</button>
                                          <input type=\"hidden\" name=\"a\" value=\"4\">
                                          <input type=\"hidden\" name=\"id\" value=\"".$res[0]."\">
                                        </div>
                                      </div>
                                   </form>
                              </div>
                          </td>
                      </tr>
            ";
      }
      $elenconw.="</tbody></table>";
   }else{
         $elenconw="Nessuna notizia presente in database.";
   }

}else{
      $elencodl="Errore nella query: ".mysql_error()." ".mysql_errno();
}

// gestione contatti
$q="SELECT id,nome,email FROM contatti ORDER BY nome";
if ($query=mysql_query($q,$link)){
   $num=mysql_num_rows($query);
   if ($num!=0){
      // elenco download
      $elencocon="<table class=\"table table-hover\">
                      <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Email</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
      ";
      while ($res=mysql_fetch_array($query)){
            $elencocon.="<tr>
                          <td>".$res[1]."</td>  
                          <td>".$res[2]."</td>
                          <td>
                              <a href=\"index.php?a=7&id=".$res[0]."\"><button type=\"button\" class=\"btn btn-danger btn-sm\">CANCELLA</button></a>
                          </td>
                      </tr>
            ";
      }
      $elencocon.="</tbody></table>";
   }else{
         $elencocon="Nessun contatto presente in database.";
   }

}else{
      $elencocon="Errore nella query: ".mysql_error()." ".mysql_errno();
}

//cont
echo"
<a href=\"#anchor-gd\">Gestione Download</a> - 
<a href=\"#anchor-nd\">Nuovo Download</a> - 
<a href=\"#anchor-nl\">Nuovo Link Esterno</a> - 
<a href=\"#anchor-gn\">Gestione Notizie</a> - 
<a href=\"#anchor-nn\">Nuova Notizia</a> - 
<a href=\"#anchor-gc\">Gestione Contatti</a>
<!-- download -->
<a id=\"anchor-gd\">
<div class=\"panel panel-default adminpanel\">
      <div class=\"panel-heading\"><a data-toggle=\"collapse\" href=\"#gestionedownload\" aria-expanded=\"true\" aria-controls=\"gestionedownload\"><h1>GESTIONE DOWNLOAD/LINK ESTERNI</h1></a></div>
      <div id=\"gestionedownload\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"gestionedownload\">
          <div class=\"panel-body\">
          ".$elencodl."
          <p class=\"text-right\"><a data-toggle=\"collapse\" href=\"#gestionedownload\" aria-expanded=\"true\" aria-controls=\"gestionedownload\"><button type=\"button\" class=\"btn btn-default btn-xs\">Chiudi pannello</button></a></p>
          </div> <!-- fine panel body  -->
      </div> <!-- fine gestionedownload -->
</div>
<a id=\"anchor-nd\">
<div class=\"panel panel-default adminpanel\">
      <div class=\"panel-heading\"><a data-toggle=\"collapse\" href=\"#nuovodownload\" aria-expanded=\"true\" aria-controls=\"nuovodownload\"><h1>NUOVO DOWNLOAD</h1></a></div>
      <div id=\"nuovodownload\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"nuovodownload\">
          <div class=\"panel-body\">
            <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"index.php\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                  <label for=\"uploadfile\" class=\"col-sm-2 control-label\">File</label>
                  <div class=\"col-sm-6\">
                    <input id=\"uploadfile\" name=\"uploadfile\" type=\"file\" multiple=true class=\"file\" data-show-upload=\"false\" data-show-preview=\"false\" data-max-file-size=\"2048\" data-max-file-count=\"1\" data-overwrite-initial=\"false\" required=\"true\" oninvalid=\"this.setCustomValidity('Selezionare un file da caricare')\" onchange=\"this.setCustomValidity('')\">
                    <span class=\"small\">(Dimensione massima consentita per il file: 2MB)</span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"descrizione\" class=\"col-sm-2 control-label\">Descrizione</label>
                  <div class=\"col-sm-6\">
                    <textarea class=\"form-control\" id=\"descrizione\" name=\"descrizione\" rows=\"3\" required=\"true\" oninvalid=\"this.setCustomValidity('Inserisci una descrizione.')\" onchange=\"this.setCustomValidity('')\"></textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-success btn-sm\">AGGIUNGI</button>
                    <input type=\"hidden\" name=\"a\" value=\"3\">
                  </div>
                </div>
             </form>
          </div> <!-- fine panel body  -->
      </div>
</div> <!-- fine panel -->
<!-- link esterno -->
<a id=\"anchor-nl\">
<div class=\"panel panel-default adminpanel\">
      <div class=\"panel-heading\"><a data-toggle=\"collapse\" href=\"#nuovolinkext\" aria-expanded=\"true\" aria-controls=\"nuovolinkext\"><h1>NUOVO LINK ESTERNO</h1></a></div>
      <div id=\"nuovolinkext\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"nuovolinkext\">
          <div class=\"panel-body\">
            <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"index.php\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                  <label for=\"linkext\" class=\"col-sm-2 control-label\">Link</label>
                  <div class=\"col-sm-6\">
                    <input id=\"linkext\" class=\"form-control\" name=\"linkext\" type=\"text\" required=\"true\" oninvalid=\"this.setCustomValidity('Inserisci un link.')\" onchange=\"this.setCustomValidity('')\">
                    <span class=\"small\"> Digitare senza \"http://\" (esempio: <u>www.google.it</u>)</span>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label for=\"descrizione\" class=\"col-sm-2 control-label\">Descrizione</label>
                  <div class=\"col-sm-6\">
                    <textarea class=\"form-control\" id=\"descrizione\" name=\"descrizione\" rows=\"3\" required=\"true\" oninvalid=\"this.setCustomValidity('Inserisci una descrizione.')\" onchange=\"this.setCustomValidity('')\"></textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-success btn-sm\">AGGIUNGI</button>
                    <input type=\"hidden\" name=\"a\" value=\"1\">
                  </div>
                </div>
             </form>
          </div> <!-- fine panel body  -->
      </div>
</div> <!-- fine panel -->

<!-- notizie -->
<a id=\"anchor-gn\">
<div class=\"panel panel-default adminpanel\">
      <div class=\"panel-heading\"><a data-toggle=\"collapse\" href=\"#gestionenotizie\" aria-expanded=\"true\" aria-controls=\"gestionenotizie\"><h1>GESTIONE NOTIZIE</h1></a></div>
      <div id=\"gestionenotizie\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"gestionenotizie\">
          <div class=\"panel-body\">
          ".$elenconw."
          <p class=\"text-right\"><a data-toggle=\"collapse\" href=\"#gestionenotizie\" aria-expanded=\"true\" aria-controls=\"gestionenotizie\"><button type=\"button\" class=\"btn btn-default btn-xs\">Chiudi pannello</button></a></p>
          </div> <!-- fine panel body  -->
      </div> <!-- fine gestionenews -->
</div>
<a id=\"anchor-nn\">
<div class=\"panel panel-default adminpanel\">
      <div class=\"panel-heading\"><a data-toggle=\"collapse\" href=\"#nuovanotizia\" aria-expanded=\"true\" aria-controls=\"nuovanotizia\"><h1>NUOVA NOTIZIA</h1></a></div>
      <div id=\"nuovanotizia\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"nuovanotizia\">
          <div class=\"panel-body\">
            <form class=\"form-horizontal\" role=\"form\" method=\"post\" action=\"index.php\">
                <div class=\"form-group\">
                  <label for=\"notizia\" class=\"col-sm-2 control-label\">Testo notizia</label>
                  <div class=\"col-sm-6\">
                    <textarea class=\"form-control\" id=\"notizia\" name=\"notizia\" rows=\"6\" required=\"true\" oninvalid=\"this.setCustomValidity('Inserisci del testo.')\" onchange=\"this.setCustomValidity('')\"></textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-sm-offset-2 col-sm-10\">
                    <button type=\"submit\" class=\"btn btn-success btn-sm\">AGGIUNGI</button>
                    <input type=\"hidden\" name=\"a\" value=\"6\">
                  </div>
                </div>
             </form>
          </div> <!-- fine panel body  -->
      </div>
</div> <!-- fine panel -->

<!-- contatti -->
<a id=\"anchor-gc\">
<div class=\"panel panel-default adminpanel\">
      <div class=\"panel-heading\"><a data-toggle=\"collapse\" href=\"#gestionecontatti\" aria-expanded=\"true\" aria-controls=\"gestionecontatti\"><h1>GESTIONE CONTATTI</h1></a></div>
      <div id=\"gestionecontatti\" class=\"panel-collapse collapse in\" role=\"tabpanel\" aria-labelledby=\"gestionecontatti\">
          <div class=\"panel-body\">
			".$elencocon."
          <p class=\"text-right\"><a data-toggle=\"collapse\" href=\"#gestionecontatti\" aria-expanded=\"true\" aria-controls=\"gestionecontatti\"><button type=\"button\" class=\"btn btn-default btn-xs\">Chiudi pannello</button></a></p>
          </div> <!-- fine panel body  -->
      </div> <!-- fine gestionecontatti -->
</div>
<div style=\"height: 400px\"></div>
";

?>
