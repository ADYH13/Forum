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

        
            <div class="card container">
            <h2 class="" style="border-bottom: 1px solid black ;"> 
                    <?= $question['titre'] ?>  
            </h2>
                <div class="card-body">
                    <table>
                        <tbody >
                            <tr >
                                <thead ><p class="card-text" style="padding: 50px;"> <?= $question['description']; ?> </p></thead>
                            </tr>
                            <tr>
                                <td style="padding: 10px;" colspan="2"> <a  href="Question.php?id=<?= $question['id'] ?>">Acceder à la question</a></td>
                            </tr>
                            <tr >
                                <td style="padding: 10px;"><a href="EditQuestions.php?id=<?= $question['id']; ?>" class="">Modifier la question</a></td>
                                <td style="padding: 10px;"><a href="actions/question/DeleteQuestionAction.php?id=<?= $question['id']; ?>" class="">Supprimer la question</a></td>
                            </tr>
                        </tbody>
                    </table>
                    
                   
                    
                    
                </div>
            </div>
            <br><br>
        


        <?php
    }



?>


</div>

<?php include "includes/footer.php" ?>
</body>
</html>