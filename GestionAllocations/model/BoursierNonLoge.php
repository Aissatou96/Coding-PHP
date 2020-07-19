<?php
class BoursierNonLoge extends EtudiantBoursier{

    public function __construct($row=null){
        $this->profil="nonLoger";
        if($row!=null){
            $this->hydrate($row);
        }

    }
    
}