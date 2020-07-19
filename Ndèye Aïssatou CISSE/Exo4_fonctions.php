<?php
  /*FONCTIONNALITE 1:Valider si une chaine est une phrase ou pas*/
  function validerPhrase($chaine){
    if(preg_match("/^[A-Z]/",$chaine) && preg_match("/[.?!]$/",$chaine))
    {
        return true;
    }
    else
    {
      return false;
    }
}


/*FONCTIONNALITE 2: Fonction qui découpe un texte en phrase*/
  function texteEnPhrase($texte){
    return preg_split('#(?<=[.?!])\s*(?=[a-z])#i',$texte);
  
  }
  

  /*FONCTIONNALITE3: Fonction qui enlève les espaces inutiles d'une phrase*/
    function delete_space($phrase){
      
    }
?>


     
  
