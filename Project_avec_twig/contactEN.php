<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_lien_nav.php');

echo $twig->render('head&navEN.twig',[
    'css' => './css/contact.css',
    'languagelink' => 'contact.php',
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Contact',
    'headerimg' => ['./images/categorie2/ukflag.png','./images/categorie2/contact.png'],
]);
echo $twig->render('zcontactEN.twig');
echo $twig->render('footer.twig',[
    'h1footer' => 'TEST'
]); 
