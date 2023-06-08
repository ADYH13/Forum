<?php session_start(); 
    require('actions/question/ShowAllQuestionsAction.php');
?>
<!DOCTYPE html>

<?php include('includes/head.php') ?>

<body>

<?php include('includes/navbar.php') ?>







    <?php include 'includes/search.php' ?>
    

<br>

<div class="content">
    <?php 

        if ($getAllQuestions->rowCount() > 0) {
            while ($question = $getAllQuestions->fetch()) {
                ?> 

                

                <div class="container card">
                    <div class="card-header">
                        <a href = "Question.php?id=<?= $question['id'] ?>">
                            <?= $question['titre'] ?>
                        </a> 
                    </div>
                    <div class="card-body">
                    <?= $question['description'] ?>
                    </div>
                    <div class="card-footer">
                        Publié par <?= $question['pseudo_auteur'] ?>, le <?= $question['date_publication'] ?>
                    </div>
                </div>
                <br>
                
                <?php
                }
        } else {
            ?>
                <div class="container">
                    Rien n'a été trouvé ...
                </div>
            
            <?php
        }
        
        
        
    
    ?>
</div>

<?php include 'includes/footer.php' ?>

</body>
</html>