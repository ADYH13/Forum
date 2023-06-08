<?php
require('actions/database.php');

if (isset($_GET['id']) && !empty($_GET['id']) ) {
    
    $idQuestion = $_GET['id'];
    //Vérifier si la question existe
    $CheckIfQuestionExist = $bd->prepare('SELECT * FROM quetions WHERE id = ?');
    $CheckIfQuestionExist->execute(array($_GET['id']));

    if ($CheckIfQuestionExist->rowCount() > 0) {
        //Recuperer les données de la questions
        $QuestionInfos = $CheckIfQuestionExist->fetch();

            //Stocker ces données dans des variables 
            $QuestionTitle = $QuestionInfos['titre'];
            $QuestionDescription = str_replace('<br />','', $QuestionInfos['description']);
            
             
            $QuestionIdAuthor = $QuestionInfos['id_auteur'];
            $QuestionPseudoAuthor = $QuestionInfos['pseudo_auteur'];
            $QuestionDate = $QuestionInfos['date_publication'];
        
        
    }else{
        $ErrorMessage = "Aucune question n'a été trouvé ...";
    }
} else {
    $ErrorMessage = "Aucune question n'a été trouvé ...";
}
