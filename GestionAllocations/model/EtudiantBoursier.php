<?php
class EtudiantBoursier extends Etudiant{
    protected $typeBourse;
    protected $profil;

    public function __construct($row=null){
        $this->typeEtudiant="Boursier";
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
       $this->typeBourse=$row['typeBourse'];
       $this->profil=$row['profil'];
    }

    public function getTypeBourse(){
        return $this->typeBourse;
    }

    public function getProfil(){
        return $this->profil;
    }

    public function setTypeBourse($typeBourse){
        $this->typeBourse=$typeBourse;
    }

    public function setProfil($profil){
        $this->profil=$profil;
    }


}