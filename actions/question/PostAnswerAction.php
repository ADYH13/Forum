<?php 
require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertAnswer = $bd->prepare('INSERT INTO reponses(id_auteur, pseudo_auteur, id_question, contenu)VALUES(?, ?, ?, ?)');
        $insertAnswer->execute(array($_SESSION['id'], $_SESSION['pseudo'], $idQuestion, $user_answer));

    }

}