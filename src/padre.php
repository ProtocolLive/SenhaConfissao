<?php
require_once("system.php");

if(isset($_GET["padre"])){
  if(isset($_GET["a"])){
    $data = Load();
    $data["padres"][$_GET["padre"]] = 0;
    Save($data);
    $HTML["title"] = "Chamada pra confissão";
    $HTML["refresh"] = [15, "padre.php?padre=" . $_GET["padre"]];
    require_once("head.php");?>
    <p>Chamado realizado</p><?php
    require_once("foot.htm");
  }else{
    $data = Load();
    $data["padres"][$_GET["padre"]] = 1;
    Save($data);
    $HTML["title"] = "Chamada pra confissão";
    require_once("head.php");?>
    <p><?php echo $_GET["padre"];?></p>
    <p><input type="button" value="CHAMAR" style="width:100px; height: 100px;"
      onclick="location.href='padre.php?padre=<?php echo $_GET["padre"];?>&a=1'"></p><?php
    require_once("foot.htm");
  }
}else{
  $HTML["title"] = "Chamada pra confissão";
  require_once("head.php");
  $data = Load();
  foreach($data["padres"] as $padre => $status){?>
    <p><a href="padre.php?padre=<?php echo $padre;?>"><?php echo $padre;?></a></p><?php
  }
  require_once("foot.htm");
}