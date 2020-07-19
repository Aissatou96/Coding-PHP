<?php
public class Chambre(){
    
    private $numBatiment;
    private $typeCh;

    public function getNumBatiment(){
        return $this->numBatiment;
    }

    public function getTypeCh(){
        return $this->typeCh;
    }

    public function setTypeCh($typeCh){
        $this->typeCh=$typeCh;
    }

    public function setTypeCh($numBatiment){
        $this->numBatiment=$numBatiment;
    }

}