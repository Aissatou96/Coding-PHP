<?php
 /*J'aurai dans cette classe toutes les méthodes d'accès à la base de données*/
class EtudiantDao extends Manager{

     public function __construct(){
          $this->tableName="etudiant";
          if($this->getTypeEtudiant()=="Boursier"){
               if($this->getProfil()=="loger"){
                    $this->className="BoursierLoge";
               }else{
                    $this->className="BoursierNonLoge";
               }
               
          }else{
               $this->className="EtudiantNonBoursier";
          } 
         
     } 
     
    
     public function add($objet){

     }

     public function update($objet){

     }
     
    
     public function findByMatricule($matricule){
          $sql="select * from $this->tableName where id=$matricule ";
          $data=$this->executeSelect($sql);
          return count($data)==1?$data[0]:$data;
      }

     public function findByTypeEtudiant($typeEtudiant){

     }
}