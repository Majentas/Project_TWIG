<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_cate1_arti4.php');
include('include/data_lien_nav.php');

echo $twig->render('categorie1.twig', [
    'lang' => 'fr',
    'prem_article' => $prem_article,
    'deux_article' => $deux_article,
    'trois_article' => $trois_article,
    'css' => './css/categorie1.css',
    'next'=>'cate1_arti5.php',
    'back'=>'cate1_arti3.php',
    'languagelink' => $languagelink,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Realisation perso',
    'h1footer' => 'TEST Footer'
]);
