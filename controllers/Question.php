<?php
class Question extends Controller{

    public function __construct(){
        $this->folder_view="question";
        $this->layout="default";

    }
   
      public function listerQuestion(){
         $this->layout="layout_admin";
         $this->views="listequestion";
         $this->render();
        
      }
      public function creerQuestion(){
          $this->layout="layout_admin";
          $this->views="creationquestion";
          $this->render();
    
      }
  
      public function passerQuestion(){
           echo 0; 
      }
  
     }

    
}
