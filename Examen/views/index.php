<?php
   define("URL_ASSETS","http://localhost/Examen/views/assets");

  require_once('./libs/Commentaire.php');
   $router=new Commentaire();
   
   $commentaire->getCommentaire();
   /*
   $sec=new views();
   $sec->showPage();
   $obj->{$method}()
   */
?>