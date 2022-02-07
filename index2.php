<?php
echo 'L\'age que j\'ai';
echo ('<hr />');

echo htmlspecialchars("Tom & Jerry");

$html = '<h1><a href="index.php">Page Index</a></h1>';
echo "texte : ". $html . "<br />";
echo "texte : ". strip_tags($html) . "<br />";
echo "texte : ". strip_tags($html, '<a>') . "<br />";//2ème tag autorisé

//conventions d'affichage locales
//setlocale(LC_ALL, 'nl_NL');
setlocale(LC_ALL, 'fr_FR', 'fr', 'Fr', 'fr_FR@euro');

echo ('<hr />');

echo strstr('toto@gmail.com', '@');
echo ('<hr />');

echo substr('toto@gmail.com', 4, 2); //Affiche les caractères aux indices indiqués
echo ('<hr />');

//remplacer un motif par un autre
$teste= 'Je fais du PHP';
$cherche = 'PHP';
$remplace = 'code';
echo str_replace($cherche, $remplace, $texte);//Affiche Je fais du code