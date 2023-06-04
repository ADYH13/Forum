
<?php require('actions/user/VerifiAuth.php') ?>
<?php require('actions/question/GetInfosOfEditedQuestion.php') ?>
<?php require('actions/question/EditQuestionAction.php') ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>
    <body>
    <?php include 'includes/navbar.php' ?>
    
        <div class="container">
            

                <?php if (isset($ErrorMessage)){ 
                        echo '<p>'. $ErrorMessage .'</p>';
                        } 
                     
                ?>

                <br><br>

                <?php if (isset($QuestionDate)) {
                    ?>
                    <form  method="POST">
                        <div class="mb-3">
                        <label for="InputTitle" class="form-label">Titre de la question</label>
                        <input type="text" class="form-control" id="InputTitle" name="InputTitle" value="<?= $QuestionTitle ?>">
                    
                        </div>

                        <div class="mb-3">
                            <label for="InputDescrip" class="form-label">Description de la question</label>
                            <textarea class="form-control" id="InputDescrip" name = "InputDescrip" ><?= $QuestionDescription ?></textarea> 
                        </div>

                        <div class="mb-3">
                            <label for="InputContenu" class="form-label">Contenu de la question</label>
                            <textarea type="text" class="form-control" id="InputContenu" name="InputContenu" ><?= $QuestionContent ?></textarea> 
                        </div>


                        
                        <button type="submit" class="btn btn-primary" name="validate">Modifier la question</button>

                
                </form>

                    <?php
                }

                ?>

                
        </div>



    <?php include 'includes/bootstrap.php' ?>
    </body>
    </html>