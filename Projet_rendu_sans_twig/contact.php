<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_lien_nav.php');

echo $twig->render('zcontact.twig',[
    'lang' => 'fr',
    'css' => './css/contact.css',
    'languagelink' => 'contactEN.php',
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Contact',
    'headerimg' => ['./images/categorie2/ukflag.png','./images/categorie2/contact.png'],
    'h1footer' => 'TEST'
]);
