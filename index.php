<?php session_start(); 
    require('actions/question/ShowAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php include('includes/head.php') ?>
<body>
<?php include('includes/navbar.php') ?>

<br>
<br>
 

    <div class="container">
        <form method="get">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" id="search"  class="form-control" ></input>
                </div>
                <div class="col-4">
                    <button  class="btn btn-success">Rechercher</button>
                </div>
            </div>
        </form>
    </div>

<br><br>


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

<?php include('includes/bootstrap.php') ?>
</body>
</html>