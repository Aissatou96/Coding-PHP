<?php

class SecurityController extends Controller{

   public  function __construct(){
      $this->folder="security";
      $this->layout="accueil";
      $this->validator=new Validator();
    
   }

    public function index(){
         $this->view="accueil";
         $this->render();

    }
    public function enregistrerCH(){
         $this->view="addChambre";
         $this->render();
}
    public function enregistrerEtu(){
        $this->view="addEtudiant";
        $this->render();
}

      public function gererEtu(){
         $this->view="gererEtudiant";
         $this->render();
      }

      public function gererCH(){
         $this->view="gererChambre";
         $this->render();
      }

//add chambre

public function addchambre(){
   if(isset($_POST['addchambres'])){
      extract($_POST);
      $alea = date("is") ;
      $numChambre=$numBatiment.$alea;
      $this->dao=new ChambreDao();
      $user=$this->dao-> insert($numChambre,$numBatiment,$typeChambre);
      $this->view="addChambre";
      $this->render(); 
   }
}











public function listeEtudiant(){
   $limit = $_POST['limit'];
   $offset = $_POST['offset'];
   
}
    
}

