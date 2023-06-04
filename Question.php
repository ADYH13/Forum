
<?php require ('actions/user/VerifiAuth.php');
      require ('actions/question/ShowQuestionAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php' ?>
<body>
<br><br>
    <?php include 'includes/navbar.php' ?>

    
    <?php if (isset($ErrorMessage)) {echo $ErrorMessage;} 
    
        if (isset($QuestionDate)) {
            ?> 
            
            <div class="container">
                <h3> <?= $QuestionTitle; ?></h3>
                <hr>
                <p><?= $QuestionContent; ?></p>
                <hr>
                <small><?= $QuestionPseudoAuthor.' '.$QuestionDate ?> </small>

            </div>
            <?php
        }
    
        
    
    ?>
    




    <?php include 'includes/bootstrap.php' ?>
</body>
</html>