<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_cate2_arti4.php');
include('include/data_lien_nav.php');

echo $twig->render('categorie2.twig', [
    'lang' => 'fr',
    'css' => './css/categorie2.css',
    'next'=>'cate2_arti5.php',
    'back'=>'cate2_arti3.php',
    'languagelink' => $languagelink,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Projet',
    'prem_article' => $prem_article,
    'deux_article' => $deux_article,
    'trois_article' => $trois_article,
    'h1footer' => 'TEST arti 4'
]);