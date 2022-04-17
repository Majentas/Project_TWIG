<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_cate2_arti3EN.php');
include('include/data_lien_navEN.php');

echo $twig->render('categorie2.twig', [
    'lang' => 'en',
    'css' => './css/categorie2.css',
    'next'=>'cate2_arti4EN.php',
    'back'=>'cate2_arti2EN.php',
    'languagelink' => $languagelink,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Project',
    'prem_article' => $prem_article,
    'deux_article' => $deux_article,
    'trois_article' => $trois_article,
    'h1footer' => 'TEST arti 3 en'
]);