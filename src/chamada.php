<?php
require_once('system.php');

$HTML['title'] = 'Chamada pra confissão';
$HTML['refresh'] = [2];
$HTML['bgcolor'] = 'black';
require_once('head.php');
$data = Load();
foreach($data['padres'] as $padre => $status):
  if($status == 0):?>
    <div style="font-size: 120px; color: white; text-align:center;"><strong><?php echo $padre;?></strong></div><br><?php
  endif;
endforeach;
require_once('foot.htm');