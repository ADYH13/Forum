<nav class="navbar navbar-expand-lg  bg-body-tertiary ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Questions</a>
        </li>

        <?php 
          if (isset($_SESSION['auth'])) {
            ?>

        <li class="nav-item">
          <a class="nav-link" href="PublishQuestions.php">Publier une question</a> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="MyQuestions.php">Mes Questions</a> 
        </li>

        <?php

        }?>

        <?php 
          if (isset($_SESSION['auth'])) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="actions/user/logoutAction.php">Déconnexion</a> 
              </li>
            <?php

          } else {
            
            ?> 
            <li class="nav-item">
                <a class="nav-link" href="login.php">Connexion</a> 
            </li>

            <li class="nav-item">
                <a class="nav-link" href="SignUp.php">Inscription</a> 
            </li>
            
            <?php
          }
          
        ?>


        
      </ul>
    </div>
  </div>
</nav>