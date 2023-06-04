<?php session_start(); ?>
<?php require('actions/question/MyQuestionsAction.php') ?>
<!DOCTYPE html>
<html lang="fr">
<?php include "includes/head.php" ?>
<body>
<?php include "includes/navbar.php" ?>


<br>

<div class = "container"> 
<?php 

    while($question = $GetMyQuestions->fetch()){
        ?>

        
            <div class="card">
            <h5 class="card-header" > 
                <a href = "Question.php?id=<?= $question['id'] ?>">
                    <?= $question['titre'] ?>
                </a>
            </h5>
                <div class="card-body">
                    <p class="card-text"> <?= $question['description']; ?> </p>
                    <a href="Question.php?id=<?= $question['id'] ?>" class="btn btn-primary">Acceder à la question</a>
                    <a href="EditQuestions.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier à la question</a>
                    <a href="actions/question/DeleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer à la question</a>
                </div>
            </div>
            <br><br>
        


        <?php
    }



?>


</div>

<?php include "includes/bootstrap.php" ?>
</body>
</html>