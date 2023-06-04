<?php

require('actions/database.php');

//Récupérer les questions par défaut sans recherche
$getAllQuestions = $bd->query('SELECT * FROM quetions ORDER BY id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utlisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //La recherche
    $usersSearch = htmlspecialchars($_GET['search']) ;

    //Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
    $getAllQuestions = $bd->query('SELECT * FROM quetions WHERE titre LIKE "%'.$usersSearch.'%" ORDER BY id DESC');

}