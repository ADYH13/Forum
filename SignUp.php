<?php require('actions/user/SignUpAction.php') ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body>




<form class="container" method="POST">

<?php if (isset($ErrorMessage)){ echo '<p>'. $ErrorMessage .'</p>';} ?>

   <br><br>
  <div class="mb-3">
    <label for="InputEmail" class="form-label">Email address</label>
    <input type="email" class="form-control" id="InputEmail" name="InputEmail">
    
  </div>

  <div class="mb-3">
    <label for="InputName1" class="form-label">Nom</label>
    <input type="text" class="form-control" id="InputName1" name = "InputName1"> 
  </div>

  <div class="mb-3">
    <label for="InputName2" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="InputName2" name="InputName2"> 
  </div>

  <div class="mb-3">
    <label for="InputPseudo" class="form-label">Pseudo</label>
    <input type="text" class="form-control" id="InputPseudo" name="InputPseudo"> 
  </div>

  <div class="mb-3">
    <label for="InputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="InputPassword" name="InputPassword">
  </div>

  <div class="mb-3">
    <label for="inputState" class="form-label">Ecole</label>
    <select id="inputState" class="form-select" name="inputState">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="Check1" >
    <label class="form-check-label" for="Check1">Check me out</label>
  </div>

  <a href="login.php"> <p>Vous avez déjà un compte ? connectez vous.   </p> </a>
  <button type="submit" class="btn btn-primary" name="validate">Inscription</button>

  
</form>




<?php include 'includes/bootstrap.php' ?>
</body>
</html>