<?php
// Les expressions rationnelles

$texte = "J'ai adopté un chaton";

if(preg_match('/chat/', $texte)){
    echo "La phrase contient le mot 'chat'";
}
else {
    echo "La phrase ne contient pas le mot 'chat'";
}
echo "<hr />";

$texte2 = "J'ai adopté un chat";

if(preg_match('/un chat|un chien/', $texte2)){
    echo "La phrase contient l'expression un 'chat' ou un 'chien'";
}
else {
    echo "La phrase ne contient ni le mot 'chat' ni le mot 'chien'";
}
echo "<hr />";

if(strpos($texte2, 'un chat') !== false || strpos($texte2, 'un chien')) {
    echo "chien ou chat";
}
else {
    echo "Ni chien ni chat";
}
echo "<hr />";

$recherche = "/J'ai adopté un (chat|chien)/";
echo preg_match($recherche, $texte2);//renvoie la valeur 1
echo "<hr />";

$texte3 = 'Les enfants sont rentrés à 12h45';
$recherche3 ='/[012][0123456789]h[012345][0123456789]/';
echo preg_match($recherche3, $texte3);//renvoie 1
echo "<hr />";






















