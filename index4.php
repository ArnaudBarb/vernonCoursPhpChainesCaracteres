<?php
//expressions rationnelles suite

$texte = "abcddde";
$recherche = '/d{3}/';
echo preg_match($recherche, $texte); //renvoie 1