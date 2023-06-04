<?php

require('actions/database.php');

if (isset($_POST['validate'])) {


    if (!empty($_POST['InputTitle']) && !empty($_POST['InputDescrip']) && !empty($_POST['InputContenu'])) {
        
        $NewQuestionTitle = htmlspecialchars($_POST['InputTitle']) ;
        $NewQuestionDescription =nl2br( htmlspecialchars($_POST['InputDescrip'])) ;
        $NewQuestionContent = nl2br(htmlspecialchars($_POST['InputContenu'])) ;

        $UpdateQuestion = $bd->prepare('UPDATE quetions SET titre = ?, description = ?, contenu = ? WHERE id = ? ');
        $UpdateQuestion->execute(
            array(
                $NewQuestionTitle,
                $NewQuestionDescription,
                $NewQuestionContent,
                $idQuestion
            )
        );

        header('Location: MyQuestions.php');
    } 
    
    else {
        echo 'Veuillez completer tout les champs ...';
    }
    
}