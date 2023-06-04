<?php

require('actions/database.php');

if (isset($_GET['id']) && !empty($_GET['id']) ) {
    
    $idQuestion = $_GET['id'];

    $CheckIfQuestionExist = $bd->prepare('SELECT * FROM quetions WHERE id = ?');
    $CheckIfQuestionExist->execute(array($_GET['id']));

    if ($CheckIfQuestionExist->rowCount() > 0) {
        $QuestionInfos = $CheckIfQuestionExist->fetch();

        if ($QuestionInfos['id_auteur'] == $_SESSION['id']) {
            $QuestionTitle = $QuestionInfos['titre'];
            $QuestionDescription = str_replace('<br />','', $QuestionInfos['description']);
            $QuestionContent = str_replace('<br />','',$QuestionInfos['contenu']) ;
            $QuestionDate = $QuestionInfos['date_publication']; 
        } else {
            $ErrorMessage = "Vous n'êtes pas autorisé à y acceder ...";
        }
        
    }else{
        $ErrorMessage = "Aucune question n'a été trouvé ...";
    }
} else {
    $ErrorMessage = "Aucune question n'a été trouvé ...";
}
