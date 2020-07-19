<?php
class EtudiantNonBoursier extends Etudiant{
 private $adresse;

 public function getAdresse(){
     return $this->adresse;
 }

 public function setAdresse($adresse){
     $this->adresse=$adresse;
 }

 public function __construct($row=null){
     $this->typeEtudiant="nonBoursier";
    if($row!=null){
        $this->hydrate($row);
    }

}

public function hydrate($row){
   $this->matricule=$row['matricule'];
   $this->prenom=$row['prenom'];
   $this->nom=$row['nom'];
   $this->email=$row['email'];
   $this->telephone=$row['telephone'];
   $this->datenaiss=$row['datenaiss'];
   $this->typeEtudiant=$row['typeEtudiant'];
   $this->adresse=$row['adresse'];
}

}