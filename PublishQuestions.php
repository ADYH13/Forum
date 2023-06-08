<?php 
require('actions/user/VerifiAuth.php');
require('actions/question/PublishQuestionAction.php')
?>
<!DOCTYPE html>
<html lang="fr">
  <style>
    .container {
      width: 100%;
    }
    
    .content{
      display: contents;
    }
  </style>
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

   <br>

   <div class="content">
      <div class="container">
        <label for="InputTitle" class="form-label">Titre de la question</label>
        <input type="text" class="form-control" id="InputTitle" name="InputTitle" placeholder="">
        
      </div>
    

      <div class="container">
        <label for="InputDescrip" class="form-label">Description de la question</label>
        <textarea class="form-control" id="InputDescrip" name = "InputDescrip" placeholder=""> </textarea> 
      </div>

  </div>

  


  
  <button type="submit" class="btn" name="validate">Publier la question</button>

  
</form>


    <?php include('includes/footer.php') ?>
</body>
</html>