<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_cate3_arti1.php');
include('include/data_lien_nav.php');

echo $twig->render('head&nav.twig',[
    'css' => './css/categorie3.css',
    'languagelink' => $languagelink,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Moi',
    'headerimg' => ['./images/categorie2/ukflag.png','./images/categorie2/contact.png'],
]);
echo $twig->render('categorie3.twig', [
    'prem_article' => $prem_article,
    'deux_article' => $deux_article,
    'trois_article' => $trois_article
]);
echo $twig->render('footer.twig',[
    'h1footer' => 'TEST'
]); 
