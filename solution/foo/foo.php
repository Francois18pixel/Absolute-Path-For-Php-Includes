<?php

include $_SERVER['DOCUMENT_ROOT'] . 'solution/include.php';
// on indique un chemin absolu qu'on va générer grace à la supervariable $_SERVER

//https://www.php.net/manual/fr/reserved.variables.server.php

// doit être lancé depuis le server web (barre des taches de
// chrome sinon $_SERVER['DOCUMENT_ROOT'] renverra '' car il n'y à pas de server

// $_SERVER['DOCUMENT_ROOT'] correspond à la racine lue par votre server donc attention à comment vous accédez á
// votre site dans la barre d'adresse de votre navigateur :
//
//  - si vous passez par "localhost" il faut alors ajouter au chemin ci-dessus le dossier de votre projet car
// localhost fait référence au dossier www donc $_SERVER['DOCUMENT_ROOT'] donnera c:/laragon/www
//
// - si vous passez par le VHOST (l'adresse en .test proposée par laragon) $_SERVER['DOCUMENT_ROOT'] donnera
// c:/laragon/www/monprojet

// Je vous conseille de passer par le VHOST car le comportement de votre application sera la même après déploiement
// sur server. Si vous developpez en passant par lcalhost vous serew obligé de changer tous vos chemins.


echo 'foo';