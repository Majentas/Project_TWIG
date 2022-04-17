<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_acc.php');
include('include/data_lien_nav.php');

echo $twig->render('acceuil.twig', [
    'lang' => 'fr',
    'css' => './css/acc.css',
    'test' => $test,
    'test2' => $test2,
    'languagelink' => $languagelink,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Acceuil',
    'h1footer' => 'TEST',
]);
$message="attention, le contenu (data) n'est pas encore définitif. Les images ainsi que le texte est le meme dans la plupart des catégorie et articles. Par manque de temps les data seront modifier ulterieurement (voir le server tp2 adams pour le contenue des articles définitifs)";
echo '<script type="text/javascript">window.alert("'.$message.'");</script>';