<?php
require_once('system.php');

if(isset($_GET['a'])):
  $data = Load();
  foreach($_POST as $padre => $status):
    $data['padres'][$padre] = $status;
  endforeach;
  Save($data);
  header('Location:chamar.php');
else:
  $HTML['title'] = 'Chamada geral';
  $HTML['refresh'] = [5, 'chamar.php'];
  require_once('head.php');
  $data = Load();?>
  <form method="post" action="chamar.php?a=chamar" name="form">
    <table>
      <tr>
        <th>Nome</th>
        <th>Ocupado</th>
        <th>Livre</th>
      </tr><?php
      foreach($data['padres'] as $padre => $status):?>
        <tr>
          <td><?php echo $padre;?></td>
          <td style="text-align:center"><input type="radio" name="<?php echo $padre;?>" value="1"<?php if($status == 1) echo " checked";?> onclick="document.form.submit()"></td>
          <td style="text-align:center"><input type="radio" name="<?php echo $padre;?>" value="0"<?php if($status == 0) echo " checked";?> onclick="document.form.submit()"></td>
        </tr><?php
      endforeach;?>
    </table>
  </form>
  <p><a href="config.php">Configurações</a></p><?php
  require_once('foot.htm');
endif;