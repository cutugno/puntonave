<?php

require_once ('connect.php');

$q="SELECT * FROM news ORDER BY id";
$elenconews="";
if ($query=mysql_query($q,$link)){
   $num=mysql_num_rows($query);
   if ($num!=0){
      while ($res=mysql_fetch_array($query)){
            $elenconews.="<li><span>".$res[1]."</span></li>";
      }
   }else{
         $elenconews="<li><span>Nessuna notizia.</span></li>";
   }
}else{
      echo "Errore nella query: ".mysql_error()." ".mysql_errno();
}

echo"
<div class=\"row header\">
    <div class=\"logo col-xs-5\"><a href=\"index.php\"><img src=\"img/logo-puntonave.jpg\" alt=\"Puntonave.net - Vela e Cultura marinaresca\"></a></div>
    <div class=\"col-xs-7\">
      <div id=\"barranews\">
           <ul id=\"ticker01\">
               ".$elenconews."
           </ul>
      </div><!-- barra news -->
      <!-- menu -->
      <div class=\"col-xs-3\"><a href=\"attivita.php\">Attività</a>".@$velaatt."</div>
      <div class=\"col-xs-3\"><a href=\"raiatea.php\">Raiatea</a>".@$velarai."</div>
      <div class=\"col-xs-3\"><a href=\"basenautica.php\">Base nautica</a>".@$veladove."</div>
      <div class=\"col-xs-3\"><a href=\"download.php\">Download</a>".@$veladow."</div>
      <!-- fine menu -->
    </div><!-- col dx header -->
</div><!-- header -->
";

?>
