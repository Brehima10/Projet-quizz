<?php

class CommentaireManager extends Manager{

     function __construct(){
         $this->tableName="Commentaire";
     }

     public function add($objet){
         $sql="insert into compte (nom,E-mail,commentaire) values (".$objet->getId().",".$objet->getId().",".$objet->getE-mail().",".$objet->getCommentaire.;
        
        return  $this->executeUpdate( $sql)!=0;

     }
     public function update($objet){
         $sql="UPDATE compte SET Nom=[.$objet->setNom($Nom).],login=[.$objet->setLogin($login).],password=[.$objet->setPassword($Password).],profil=[.$objet->setProfil($profil).],score=[.$objet->setScore($score).] WHERE id=$id";
         return $this->ExecuteUpdate($sql)!=0;

     }
    
     public function findById($id){
         $sql="select score from compte where id='$id'";
        return $this-> ExecuteSelect($sql);
     }

    
    
}