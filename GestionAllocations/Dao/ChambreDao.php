<?php
/*J'aurai dans cette classe toutes les méthodes d'accès à la base de données*/
class ChambreDao extends Manager{

    public function __construct(){
        $this->tableName="Chambre";
        $this->className = "Chambre";
       
    }


    public function add($objet){

    }

    public function update($objet){

    }
   
    public function findByMatricule($matricule){

    }

    public function findByTypeEtudiant($typeEtudiant){

    }
   
}