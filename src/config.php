<?php
require_once("system.php");

if(isset($_GET["a"])){
  $data = Load();
  $envio = explode("\r\n", trim($_POST["padres"]));
  $data["padres"] = null;
  foreach($envio as $padre){
    $data["padres"][$padre] = 0;
  }
  Save($data);
  header("Location: config.php");
}else{
  $data = Load();
  $HTML["title"] = "Configurações";
  require_once("head.php");?>
  <form method="post" action="config.php?a=edit">
    <p>
      <textarea name="padres" rows="10"><?php
        if(count($data) > 0 ){
          foreach($data["padres"] as $padre => $status){
            echo $padre . "\n";
          }
        }
      ?></textarea>
    </p>
    <p><input type="submit" value="Atualizar"></p>
  </form>
  <p><a href="chamar.php">Tela para chamar</a></p><?php
  require_once("foot.htm");
}