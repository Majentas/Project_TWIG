<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_cate1_arti2.php');
include('include/data_lien_nav.php');

echo $twig->render('head&nav.twig',[
    'css' => './css/categorie1.css',
    'languagelink' => $languagelink,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Realisation perso',
    'headerimg' => ['./images/categorie1/ukflag.png','./images/categorie1/contact.png'],
]);
echo $twig->render('categorie1.twig', [
    'prem_article' => $prem_article,
    'deux_article' => $deux_article,
    'trois_article' => $trois_article
]);
echo $twig->render('footer.twig',[
    'h1footer' => 'TEST'
]);