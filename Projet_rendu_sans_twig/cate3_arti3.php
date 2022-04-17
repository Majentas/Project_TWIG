<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_cate3_arti3.php');
include('include/data_lien_nav.php');

echo $twig->render('categorie3.twig', [
    'lang' => 'fr',
    'css' => './css/categorie3.css',
    'next'=>'cate3_arti4.php',
    'back'=>'cate3_arti2.php',
    'languagelink' => $languagelink,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Moi',
    'prem_article' => $prem_article,
    'deux_article' => $deux_article,
    'trois_article' => $trois_article,
    'h1footer' => 'TEST art 3'
]);