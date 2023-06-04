<?php

session_start();
if(!isset($_SESSION['auth'])){
    header('Location: login.php');
}else {
    require('../database.php');

    if (isset($_GET['id']) && !empty($_GET['id'])) {
        
        $idQuestion = $_GET['id'];

        $CheckIfQuestionExist = $bd->prepare('SELECT * FROM quetions WHERE id = ?');
        $CheckIfQuestionExist->execute(array($_GET['id']));

        if ($CheckIfQuestionExist->rowCount() > 0) {
            $QuestionInfos = $CheckIfQuestionExist->fetch();
            
            if ($QuestionInfos['id_auteur'] == $_SESSION['id']) {

                $DeleteThisQuestion = $bd->prepare('DELETE FROM quetions WHERE id = ?');
                $DeleteThisQuestion->execute(array($_GET['id']));

                header('Location: ../../MyQuestions.php');
                
            } else {
                $ErrorMessage = "Vous n'êtes pas autorisé à y acceder ...";
            }
            
        } else {
            echo 'Aucune question trouvé';
        }
        

    } else {
        echo 'Aucune question trouvé';
    }

}


