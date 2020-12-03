<?php

function Load(){
  $data = file_get_contents('data.json');
  return json_decode($data, true);
}

function Save($Data){
  file_put_contents('data.json', json_encode($Data));
}