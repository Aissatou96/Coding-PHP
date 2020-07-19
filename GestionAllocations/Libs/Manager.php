<?php
abstract class Manager implements IDao{
    //Connexion est Fermée
    private $pdo=null;
    protected $tableName;
    protected $className;

  private function getConnexion(){
      //Connexion est fermée
      if($this->pdo==null){
        try{
          $this->pdo = new PDO("mysql:host=localhost;port=3308;dbname=gestionallocations","root","",
          array(
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
              PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
              )
          );
          /*recupère moi par défaut les données sous la forme d'un tableau associatif 
              avec FETCH_ASSOC */
              #$this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
      }catch (PDOException $e){
          die($e->getMessage());
      }   
      } 
  }

 private function closeConnexion(){
    if($this->pdo!=null){
      $this->pdo=null;
    }
  }

  public function insert($numChambre,$numero,$type){
    $this->getConnexion();
    $t=0;
    $sql = "INSERT INTO chambre(numCh,numBatiment,typeCh) VALUES('".$numChambre."','".$numero."','".$type."')";
    //$this->pdo->prepare($sql);
      $nbreLigne= $this->pdo->exec($sql);
        $this->closeConnexion();
    
   
    }

  public function executeUpdate($sql){
          $this->getConnexion();
           $nbreLigne= $this->pdo->exec($sql);
          $this->closeConnexion();
          return $nbreLigne;
   }

  public function executeSelect($sql){
    $this->getConnexion();
    //Traitement
      $result=$this->pdo->query($sql);
      $data=[];
      foreach( $result as $rowBD){
        //ORM=> tuple BD transformer en Objet
        /*la variable className va nous dire les informations reçues de la base de données seront 
          encapsulées dans quelle classe */
        $data[]=new $this->className($rowBD);// exemple:new User($rowBD) ça veut dire chaque ligne de la base
        /* de données, il faut l'encapsuler dans un objet de type className */ 
      }
      $this->closeConnexion();
      return $data; //$data va contenir toutes les lignes de la base de données qui seront retournés

  }

  public function findAll(){
    $sql="select * from $this->tableName";
    $data=$this->executeSelect($sql);
    var_dump($data);
  }


  public function delete($id){
    $sql="delete from $this->tableName where id=$id";
    return $this->executeUpdate($sql)!=0;
}





    //Connexion

    
    //Executer une requete et Retourner un Résultat:

       //Execution Requete MaJ(Insert,Update,delete)
        /*les requêtes de mise à jour retourne en général un entier qui représente le nombre de 
          de lignes qui a été modifié*/

       //Execution requete Select

    //FermerConnexion
}