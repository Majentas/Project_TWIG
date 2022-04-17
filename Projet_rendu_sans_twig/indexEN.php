<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/data_acc.php');
include('include/data_lien_navEN.php');

echo $twig->render('acceuil.twig', [
    'lang' => 'en',
    'css' => './css/acc.css',
    'test' => $test,
    'test2' => $test2,
    'languagelink' => $languagelinken,
    'rea_article_lien' => $rea_article_lien,
    'rea_article_nom' => $rea_article_nom,
    'projet_article_lien' => $projet_article_lien,
    'projet_article_nom' => $projet_article_nom,
    'moi_article_lien' => $moi_article_lien,
    'moi_article_nom' => $moi_article_nom,
    'titre' => 'Home',
    'h1footer' => 'TEST en',
]);
$message="attention, the content (data) is not yet final. Images and text are the same in most categories and articles. Due to lack of time the data will be modified later (see the tp2 adams server for the final articles)";
echo '<script type="text/javascript">window.alert("'.$message.'");</script>';