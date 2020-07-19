<?php
 abstract class Etudiant implements IGestion{

    protected $matricule;
    protected $prenom;
    protected $nom;
    protected $typeEtudiant;
    protected $email;
    protected $telephone;
    protected $datenaiss;

    public function getMatricule(){
        return $this->matricule;
    }

    public function getPrenom(){
        return $this->prenom;
    }
  
    public function getNom(){
        return $this->nom;
    }

    public function getTypeEtudiant(){
        return $this->typeEtudiant;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelephone(){
        return $this->telephone;
    }

    public function getDateNaiss(){
        return $this->datenaiss;
    }

    public function setMatricule($matricule){
        $this->matricule=$matricule;
    }

    public function setPrenom($prenom){
        $this->prenom=$personne;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }

   
    public function setTypeEtudiant($typeEtudiant){
        $this->typeEtudiant=$typeEtudiant;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function setTelephone($telephone){
        $this->telephone=$telephone;
    }

    public function setDateNaiss($datenaiss){
        $this->datenaiss=$datenaiss;
    }
}