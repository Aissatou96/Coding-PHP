<?php
    /*1.Fonction is_lower() qui retourne si un caractère alphabétique est une minuscule (a à z)*/
            function is_lower($c){
                return ($c>='a' && $c<='z');
            }

    /*2.Fonction is_upper() qui retourne si un caractère alphabétique est une majuscule (A à Z)*/
            function is_upper($c){
                return ($c>='A' && $c<='Z');
            }

    /*3.Fonction is_entier() qui retourne si un caractère passé en paramètre est un entier positif*/
            function is_entier($c){
                return ($c>='0' && $c<='9');
            }

    /*4.Fonction my_strlen() qui retourne la taille d'un tableau ou d'une chaîne de caractères*/
            function my_strlen($tabouChaine){
                $i=0;
                while(!empty($tabouChaine[$i])){
                    $i++;
                }
                return $i;
            }

    /*5.Fonction is_valide() qui retourne si un mot est valide*/
            function is_valide($mot){
                for($i=0;$i<my_strlen($mot);$i++){
                    if(is_lower($mot[$i]) && is_upper($mot[$i])){
                      return true;  
                    }
                }
                return false; 
            }

    /*6.Fonction is_number() qui retourne si un entier est positif ou pas*/
            function is_number($nbr){
                for ($i=0; $i < my_strlen($nbr); $i++) { 
                    if (!(is_entier($nbr[$i]))) {
                        return false;
                    }
                }
                return ($nbr>0); 
            } 

    /*7.Fonction is_car_in_string() qui retourne si un caractère est dans une chaine*/
            function is_car_in_string($c,$chaine){
                for($i=0;$i<my_strlen($chaine);$i++){
                    if($c==$chaine[$i]){
                        return true;
                    }
                }
                return false;
            }

    /*8.Fonction count_char_in_string() qui retourne le nombre de fois qu'un caractère est présent dans une chaîne*/
            function count_char_in_string($c,$chaine){
                $compteur=0;
                for($i=0;$i<my_strlen($chaine);$i++){
                    if(is_car_in_string($c,$chaine)){
                        $compteur+=$compteur;
                    }
                }
                return $compteur;
            }
       
    /*9.Fonction my_trim*/
            function my_trim(){
                
            }
?>
