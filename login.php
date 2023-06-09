<?php require('actions/user/loginAction.php') ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <title>Forum</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  background: rgb(104, 185, 91);
  overflow: hidden;
}
::selection{
  background: rgb(50, 126, 39);
}
.container{
  max-width: 440px;
  padding: 0 20px;
  margin: 170px auto;
}
.wrapper{
  width: 100%;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
}
.wrapper .title{
  height: 90px;
  background: rgb(50, 126, 39);
  border-radius: 5px 5px 0 0;
  color: #fff;
  font-size: 30px;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form{
  padding: 30px 25px 25px 25px;
}
.wrapper form .row{
  height: 45px;
  margin-bottom: 15px;
  position: relative;
}
.wrapper form .row input{
  height: 100%;
  width: 100%;
  outline: none;
  padding-left: 60px;
  border-radius: 5px;
  border: 1px solid lightgrey;
  font-size: 16px;
  transition: all 0.3s ease;
}
form .row input:focus{
  border-color: rgb(50, 126, 39);
  box-shadow: inset 0px 0px 2px 2px rgb(50, 126, 39);
}
form .row input::placeholder{
  color: #999;
}
.wrapper form .row i{
  position: absolute;
  width: 47px;
  height: 100%;
  color: #fff;
  font-size: 18px;
  background: rgb(50, 126, 39);
  border: 1px solid rgb(50, 126, 39);
  border-radius: 5px 0 0 5px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.wrapper form .pass{
  margin: -8px 0 20px 0;
}
.wrapper form .pass a{
  color: rgb(50, 126, 39);
  font-size: 17px;
  text-decoration: none;
}
.wrapper form .pass a:hover{
  text-decoration: underline;
}
.wrapper form .button input{
  color: #fff;
  font-size: 20px;
  font-weight: 500;
  padding-left: 0px;
  background: rgb(50, 126, 39);
  border: 1px solid rgb(50, 126, 39);
  cursor: pointer;
}
form .button input:hover{
  background: rgb(50, 126, 39);
}
.wrapper form .signup-link{
  text-align: center;
  margin-top: 20px;
  font-size: 17px;
}
.wrapper form .signup-link a{
  color: rgb(50, 126, 39);
  text-decoration: none;
}
form .signup-link a:hover{
  text-decoration: underline;
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
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Connexion</span></div>
        <form action="#" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Pseudo" id="InputPseudo" name="InputPseudo" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Mot de passe" id="InputPassword" name="InputPassword" required>
          </div>
          <div class="pass"><a href="#">Mot de passe oublié?</a></div>
          <div class="row button">
            <input type="submit" name="validate" onclick="validateForm()">
          </div>
          <div class="signup-link">Vous n'avez pas de compte? <a href="SignUp.php">Inscrivez vous</a></div>
        </form>
      </div>
    </div>

  </body>
</html>