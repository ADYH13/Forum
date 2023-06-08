<?php require('actions/user/SignUpAction.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Forum</title>
</head>

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
      width: 500px;
      padding: 40px;
      padding-left: 60px;
      padding-right: 60px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .container h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group select {
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
    // JavaScript pour valider le formulaire d'inscription (exemple basique)
    function validateForm() {
      var email = document.getElementById("email").value;
      var nom = document.getElementById("nom").value;
      var prenom = document.getElementById("prenom").value;
      var pseudo = document.getElementById("pseudo").value;
      var password = document.getElementById("password").value;
      var ecole = document.getElementById("ecole").value;
      var filiere = document.getElementById("filiere").value;

      if (email === "" || nom === "" || prenom === "" || pseudo === "" || password === "" || ecole === "" || filiere === "") {
        alert("Veuillez remplir tous les champs.");
        return false;
      }
    }

    // JavaScript pour gérer les options de la liste déroulante "École"
    function handleEcoleChange() {
      var ecole = document.getElementById("ecole").value;
      var filiere = document.getElementById("filiere");

      // Réinitialiser les options de la liste déroulante "Filière"
      filiere.innerHTML = "";

      // Ajouter les options en fonction de l'école sélectionnée
      if (ecole === "ESI") {
        addOption(filiere, "STIC", "STIC");
        addOption(filiere, "STGI", "STGI");
        addOption(filiere, "STGP", "STGP");
      } else if (ecole === "ESCAE") {
        addOption(filiere, "ECS", "ECS");
        addOption(filiere, "HEA", "HEA");
        addOption(filiere, "CAE", "CAE");
      } else if (ecole === "CEPEGE") {
        addOption(filiere, "MPSI", "MPSI");
        addOption(filiere, "PCSI", "PCSI");
        addOption(filiere, "BIO", "BIO");
        addOption(filiere, "ECS", "ECS");
        }
        }
    // Fonction utilitaire pour ajouter des options à une liste déroulante
function addOption(selectElement, text, value) {
    var option = document.createElement("option");
    option.text = text;
    option.value = value;
    selectElement.add(option);
  }
</script>
</head>
<body>
  <div class="container">
  <?php if (isset($ErrorMessage)){ echo '<p>'. $ErrorMessage .'</p>';} ?>
<br>
    <h1>Inscription</h1>
    <form method="post">
      <div class="form-group">
        <label for="InputEmail">Adresse Email :</label>
        <input type="email" placeholder="Entrez votre adresse email" id="InputEmail" name="InputEmail" required>
      </div>
      <div class="form-group">
        <label for="InputName1">Nom :</label>
        <input type="text" placeholder="Entrez votre nom" id="InputName1" name = "InputName1" required>
      </div>
      <div class="form-group">
        <label for="InputName2">Prénom :</label>
        <input type="text" placeholder="Entrez votre prénom" id="InputName2" name="InputName2" required>
      </div>
      <div class="form-group">
        <label for="InputPseudo">Pseudo :</label>
        <input type="text"  placeholder="Entrez votre pseudo" id="InputPseudo" name="InputPseudo" required>
      </div>
      <div class="form-group">
        <label for="InputPassword">Mot de passe :</label>
        <input type="password"  placeholder="Entrez votre mot de passe" id="InputPassword" name="InputPassword" required>
      </div>
      <div class="form-group">
        <label for="ecole">École :</label>
        <select id="ecole" onchange="handleEcoleChange()" required>
          <option value="">Sélectionnez une école</option>
          <option value="ESI">ESI</option>
          <option value="ESCAE">ESCAE</option>
          <option value="CEPEGE">CEPEGE</option>
        </select>
      </div>
      <div class="form-group">
        <label for="filiere">Filière :</label>
        <select id="filiere" required>
          <option value="">Sélectionnez une filière</option>
        </select>
      </div>
      <div class="form-group">
        <a href="login.php"> <p>Vous avez déjà un compte ? connectez vous.   </p> </a>
        <button type="submit" name="validate" ondblclick="validateForm()">S'inscrire</button>
      </div>
    </form>
  </div>



</body>
</html>