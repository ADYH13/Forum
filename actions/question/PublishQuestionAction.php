<?php

require('actions/database.php');

if (isset($_POST['validate'])) {
    
    if (!empty($_POST['InputTitle']) && !empty($_POST['InputDescrip']) ) {
        $question_title = nl2br(htmlspecialchars($_POST['InputTitle']));
        $question_description = nl2br(htmlspecialchars($_POST['InputDescrip']));
        $question_date = date('d/m/Y');
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        $InsertQuestion = $bd->prepare("INSERT INTO quetions (titre, description, id_auteur, pseudo_auteur, date_publication) VALUES (?,?,?,?,?)");
        $InsertQuestion->execute(
            array(
                $question_title,
                $question_description,
                $question_id_author,
                $question_pseudo_author,
                $question_date
            )
        );

        $SucessMessage = "Votre question a bien été enregistré ...";

    } else {
        $ErrorMessage = "Completez tout les champs ...";
    }
    
}