<?php

// Créer une constante avec la fonction adaptée, et lui donner le nom et la valeur 18
define("TEL", 18);

// Utiliser cette constante dans une nouvelle variable de type string, ayant pour contenu "Le numéro des pompiers est le " puis concaténer votre constante
$variable =  "Le numéro des pompiers est le " . TEL;

echo $variable;


// Concaténer les chaines de caractères suivantes :
//  - La référence "19805" est 
//  - l'appareil le plus vendu dans
//  - l'agglomération de "Pont-l'évêque"

echo "<br>";
$text1 = "La référence \"19805\" est";
$text2 = "l'appareil le plus vendu dans";
$text3 = "l'agglomération de \"Pont-l'évêque\" ";

echo "$text1 $text2 $text3";