<?php require('actions/user/loginAction.php') ?>
<!DOCTYPE html>

<html>
    <?php include('includes/head.php') ?>
    

    <body>

        <form class="container" method="POST">

            <?php if (isset($ErrorMessage)){ echo '<p>'. $ErrorMessage .'</p>';} ?>

            <br><br>
            
            <div class="mb-3">
                <label for="InputPseudo" class="form-label">Pseudo</label>
                <input type="text" class="form-control" id="InputPseudo" name="InputPseudo"> 
            </div>

            <div class="mb-3">
                <label for="InputPassword" class="form-label">Password</label>
                <input type="password" class="form-control" id="InputPassword" name="InputPassword">
            </div>


            <a href="SignUp.php"> <p>Vous n'avez pas de compte ? Inscrivez vous.   </p> </a>
            <button type="submit" class="btn btn-primary" name="validate">Connexion</button>
            
        </form>
        
        
        <?php include('includes/bootstrap.php') ?>
    </body>
</html>