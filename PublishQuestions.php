<?php 
require('actions/user/VerifiAuth.php');
require('actions/question/PublishQuestionAction.php')
?>
<!DOCTYPE html>
<html lang="fr">
<?php include('includes/head.php') ?>
<body>

<?php include('includes/navbar.php') ?>

<form class="container" method="POST">

<?php if (isset($ErrorMessage)){ 
        echo '<p>'. $ErrorMessage .'</p>';
        } 
      elseif(isset($SucessMessage)){
        echo '<p>'. $SucessMessage .'</p>';
      }
          
?>

   <br><br>
  <div class="mb-3">
    <label for="InputTitle" class="form-label">Titre de la question</label>
    <input type="text" class="form-control" id="InputTitle" name="InputTitle">
    
  </div>

  <div class="mb-3">
    <label for="InputDescrip" class="form-label">Description de la question</label>
    <textarea class="form-control" id="InputDescrip" name = "InputDescrip"> </textarea> 
  </div>

  <div class="mb-3">
    <label for="InputContenu" class="form-label">Contenu de la question</label>
    <textarea type="text" class="form-control" id="InputContenu" name="InputContenu"> </textarea> 
  </div>


  
  <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>

  
</form>


    <?php include('includes/bootstrap.php') ?>
</body>
</html>