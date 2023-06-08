<?php 
    require ('actions/user/VerifiAuth.php');
    require ('actions/user/ShowOneUsersProfileAction.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<?php include 'includes/head.php' ?>
</head>
<?php include 'includes/navbar.php' ?>
<body>
<br><br>

<div class="container">
    <?php 
        if(isset($errorMsg)){ echo $errorMsg; }

        if(isset($getHisQuestions)){

            ?>
            <div class="card">
                <div class="card-body">
                    <h4>@<?= $user_pseudo; ?></h4>
                    <hr>
                    <p><?= $user_lastname . ' ' . $user_firstname; ?></p>
                </div>
            </div>
            <br>
            <?php
            while($question = $getHisQuestions->fetch()){ 
                ?>
                <div class="card">
                    <div class="card-header">
                        <?= $question['titre']; ?>
                    </div>
                    <div class="card-body">
                        <?= $question['description']; ?>
                    </div>
                    <div class="card-footer">
                        Par <?= $question['pseudo_auteur']; ?> le <?= $question['date_publication'];  ?>
                    </div>
                </div>
                <br>
                <?php
            }

        }
    ?>  
</div>


<?php include 'includes/footer.php' ?>
</body>
</html>