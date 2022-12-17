<html>
  <head>
    <title><?php echo $HTML['title'];?></title>
    <meta name="viewport" content="width=device-width">
    <?php
    if(isset($HTML['refresh'])):
      ?><meta http-equiv="refresh" content="<?php echo $HTML['refresh'][0];
      if(isset($HTML['refresh'][1])):
        echo ';url=' . $HTML['refresh'][1];
      endif;
      ?>"><?php
    endif;?>
    <style>
      a{
        text-decoration: none;
      }
      a:hover{
        text-decoration: underline;
      }
      a:visited{
        color: blue;
      }
      p{
        text-align: center;
      }
      table{
        margin-left: auto;
        margin-right: auto;
      }<?php
      if(isset($HTML['bgcolor'])):?>
        body{
          background-color: <?php echo $HTML['bgcolor'];?>
        }<?php
      endif;?>
    </style>
  </head>
  <body>