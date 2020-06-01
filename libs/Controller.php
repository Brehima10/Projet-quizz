<?php

class Controller{
    protected $validator;
    protected $views;
    protected $folder_views;
    protected $layout;
    //Variable qui permet stocker les données à afficher dans les vues
    protected $data_views=[];
    //Ecriture et l'execution des requetes
    protected $manager;

    //  Afficher une vue
    public function render(){
        ob_start();
        //Inclusion des données du Controller vers la vue
        extract($this->data_views);
        require_once('views/'.$this->folder_view.'/'.$this->views.'.php');
        $content_for_layout=ob_get_clean();
        require_once('views/layout/'.$this->layout.'.php');
       }
}