<?php
    $mot = "beweb";//Chaîne de caractères
    echo "Mot : " . $mot . "\n";
    $choix = 4;//Sélectionner le choix
    
    //choix 1
    switch ($choix) {
    case 1:
        $reverse = strrev($mot);
        if ($mot == $reverse){
            echo "Ceci est un palindrome" . "\n";//Lecture "Ceci est un palindrome"
        }
        else {
            echo "Ceci n'est pas un palindrome" . "\n";//Lecture "Ceci n'est pas un palindrome"
        }
    break;
    
    //choix 2
    case 2:
        strlen($mot);//Retourne le nombre de caractères
        echo strlen($mot) . " lettres\n";//Lecture nombre de caractères
    break;

    //choix 3
    case 3:    
        $remp="z";//La lettre remplacée
        $val="w";//La lettre actuelle
        $bodytag = str_replace($val,$remp,$mot);
        echo ($bodytag) . "\n";//Affichage bodytag
    break;

    //choix 4
    case 4:
        $depart=0;
        $milieu=strlen($mot)/2;//Mot divisé par 2
        $mot1= substr($mot, $depart, $milieu);//Retourne un segment de chaîne
        $mot2= substr($mot, $milieu, strlen($mot));//Retourne un segment de chaîne
        echo $mot1."/";//Affichage mot1
        echo $mot2."\n";//Affichage mot2
    break;
}
?>