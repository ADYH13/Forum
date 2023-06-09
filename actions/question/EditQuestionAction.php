<?php

require('actions/database.php');

if (isset($_POST['validate'])) {


    if (!empty($_POST['InputTitle']) && !empty($_POST['InputDescrip'])) {
        
        $NewQuestionTitle = htmlspecialchars($_POST['InputTitle']) ;
        $NewQuestionDescription =nl2br( htmlspecialchars($_POST['InputDescrip'])) ;
        

        $UpdateQuestion = $bd->prepare('UPDATE quetions SET titre = ?, description = ? WHERE id = ? ');
        $UpdateQuestion->execute(
            array(
                $NewQuestionTitle,
                $NewQuestionDescription,
                $idQuestion
            )
        );

        header('Location: MyQuestions.php');
    } 
    
    else {
        echo 'Veuillez completer tout les champs ...';
    }
    
}