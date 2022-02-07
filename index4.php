<?php
//expressions rationnelles suite

$texte = "abcddde";
$recherche = "/d{3}/";//nombre d'occurences fixes
echo preg_match($recherche, $texte); //renvoie 1
echo"<hr />";

$texte2 = "abcddde";
$recherche2 = "/abcd{3,5}e/"; //nombre d'occurences de la lettre 'd' délimité de 3 à 5 occurences
//$recherche = "/abcd*e/"; //nombre d'occurences de la lettre 'd' de  0 à n fois
//$recherche = "/abcd+e/"; //nombre d'occurences de la lettre 'd' de  1 à n fois
//$recherche = "/abcd*e/"; //nombre d'occurences de la lettre 'd' de  à n fois
echo preg_match($recherche2, $texte2);  //renvoie 1
echo"<hr />;

