<?php require('actions/user/loginAction.php') ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Forum</title>
</head>
    

    <body>

    <style>
    /* Styles CSS */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .container {
      width: 500px; /* Nouvelle valeur pour élargir la div */
      padding: 60px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
      
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    @media (max-width: 600px) {
      /* Styles pour les petits écrans */
      .container {
        padding: 20px;
      }
    }
  </style>
  <script>
    // JavaScript pour valider le formulaire de connexion (exemple basique)
    function validateForm() {
      var email = document.getElementById("email").value;
      var password = document.getElementById("password").value;

      if (email === "" || password === "") {
        alert("Veuillez remplir tous les champs.");
        return false;
      }
    }
  </script>
</head>
<body>
  <div class="container">
  <?php if (isset($ErrorMessage)){ echo '<p>'. $ErrorMessage .'</p>';} ?>
<br>
    <h1>Connexion</h1>
    <form method="post">
      <div class="form-group">
        <label for="InputPseudo">Pseudo :</label>
        <input type="text"  placeholder="Entrez votre Pseudo" id="InputPseudo" name="InputPseudo" required >
      </div>
      <div class="form-group">
        <label for="InputPassword">Mot de passe :</label>
        <input type="password" id="password" placeholder="Entrez votre mot de passe" id="InputPassword" name="InputPassword" required>
      </div>
      <div class="form-group">
        <a href="SignUp.php"> <p>Vous n'avez pas de compte ? Inscrivez vous.   </p> </a>
        <button type="submit" name="validate" onclick="validateForm()">Se connecter</button>
      </div>
    </form>
  </div>
        
        
    </body>
</html>