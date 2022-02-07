<?php

$version = 8;
$langue = 'fr';
$url = 'PHP %d est disponible sur l\'adresse https://%s.php.net';
// printf($url, $version, $langue);

$reponse = sprintf($url, $version, $langue);
echo ($reponse);

printf('<br />');
printf('%b <br >', 3);
printf('%o -%x - <br />', 15, 20);
printf('%03d <br />', 2); //Affiche 002
printf('%03d <br />', 20); //Affiche 020
printf('%-4s Michel<br />', 'Bonjour');
printf("[%-10.9s]\n", $version); //justification à gauche mais avec une coupure de 8 caractères


$fr = '%d est la version de %s';
$en = '%d is %s\'s version';

$langue = $fr;

if ($langue === 'en')
    printf ($en, 8.1, 'PHP');

else
printf($fr, 8.1, 'PHP');

echo "<hr />";

$infos = ['PHP', 8.1];
vprintf('%s %d', $infos);
