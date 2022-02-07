<?php
// Les expressions rationnelles

$texte = "J'ai adopté un chaton";

if(preg_match('/chat/', $texte)){
    echo "La phrase contient le mot 'chat'";
}
else {
    echo "La phrase ne contient pas le mot 'chat'";
}
