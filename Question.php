<?php 
    require ('actions/user/VerifiAuth.php');
    require ('actions/question/ShowQuestionAction.php');
    require ('actions/question/PostAnswerAction.php');
    require ('actions/question/ShowAllAnswerOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>
<style>
    .forum-post {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 10px;
      background-color: #f9f9f9;
      box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
      border-radius: 5%;

      margin: 0px 0px 0px 0%;
    }

    .forum-post h2 {
      margin: 0;
      color: #333;
    }

    .forum-post p {
      margin: 0;
      color: #666;
    }

    .forum-post .author {
      font-weight: bold;
    }

    .forum-post .date {
      color: #999;
    }
    .post-form {
      margin-bottom: 20px;
    }

    .post-form textarea {
      width: 100%;
      height: 100px;
      resize: vertical;
      padding: 10px;
      border: 1px solid #ccc;
    }

    .post-form button[type="submit"] {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
    }

    .post-form input[type="submit"]:hover {
      background-color: #555;
    }

    .reponse{
        margin: 10%;
        height: auto;

    }
    .card-header{
        border-bottom: 1px solid black;
       
        
    }
    .show-content, .show-answers{
        padding: 10%;
    }

    .container{
        height: auto;
    }
</style>
<body>
    <?php include 'includes/navbar.php' ?>

    <br>

    <?php if (isset($ErrorMessage)) {echo $ErrorMessage;} 
        
        if (isset($QuestionDate)) {
            ?> 
            <section class="show-content">
                <div class="">
                    <div class="forum-post container">
                        <h2><?= $QuestionTitle; ?></h2>
                        <p class="author">Auteur : <?=$QuestionPseudoAuthor?></p>
                        <p class="date"> <?=$QuestionDate?> </p>
                        <p><?= $QuestionDescription; ?></p>
                    </div>

                </div>
                
            </section>

            <section class="show-answers">
                <form action="" class="form-group" method="post">
                    <div class="post-form">
                        <h2>Repondre : </h2>
                        <textarea name="answer" class="form-control" placeholder="Votre message"></textarea>
                        <button class="" type="submit" name="validate">Repondre</button>
                    </div>
                </form>

        
    <h2>Les Reponses </h2>
                <?php 
                        while($answer = $getAllAnswersOfThisQuestion->fetch()){
                            ?>
                            <div class="forum-post container">
                                <h2><?= $answer['pseudo_auteur']; ?></h2>
                                <p><?= $answer['contenu']; ?></p>
            
                            </div>
                            <br>
                            <?php
                        }
                    ?>

            </section>            
            <?php
        }
    
        
    
    ?>
    




    <?php include 'includes/bootstrap.php' ?>
</body>
</html>