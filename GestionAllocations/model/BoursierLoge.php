<?php
class BoursierLoge extends EtudiantBoursier{
    private $numCh;

    public function __construct($row=null){
        $this->profil="loger";
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
       $this->numCh=$row['numCh'];
    }

    public function getNumCh(){
        return $this->numCh;
    }

    public function setNumCh($numCh){
        $this->numCh=$numCh;
    }

}