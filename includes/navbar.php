<style>
    /* Styles CSS */
    body {
      
      margin: 0;
      
      font-family: Arial, sans-serif;
    }

    .navbar {
      background-color: rgb(50, 126, 39);
      overflow: hidden;

    }

    .navbar a {
      float: left;
      display: block;
      color: #fff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;
      border: none;
      outline: none;
      color: #fff;
      padding: 14px 16px;
      background-color: inherit;
      margin: 0;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: rgba(67, 133, 89, 0.631);
      color: #333;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: #333;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
      color: #333;
    }

    .navbar .icon {
      display: none;
    }

    @media screen and (max-width: 600px) {
      .navbar a:not(:first-child), .dropdown .dropbtn {
        display: none;
      }

      .navbar a.icon {
        float: right;
        display: block;
      }

      .navbar.responsive .icon {
        background-color: rgb(50, 126, 39);
        
      }

      .navbar.responsive a {
        float: none;
        display: block;
        text-align: left;
      }

      .navbar.responsive .dropdown {
        float: none;
      }

      .navbar.responsive .dropdown-content {
        position: relative;
      }

      .navbar.responsive .dropdown .dropbtn {
        display: block;
        width: 100%;
        text-align: left;
      }
    }
  </style>
  <script>
    // JavaScript pour activer la navigation responsive
    function toggleResponsiveNavbar() {
      var navbar = document.getElementById("myNavbar");
      if (navbar.className === "navbar") {
        navbar.className += " responsive";
        
      } else {
        navbar.className = "navbar";
      }
    }
  </script>

<nav>
  <div class="navbar" id="myNavbar">
    <a href="index.php">Le Forum de la cité</a>
    <a href="index.php">Questions</a>
    <?php 
          if (isset($_SESSION['auth'])) {
            ?>
    <a  href="PublishQuestions.php">Publier une question</a> 
    <a  href="MyQuestions.php">Mes Questions</a> 
    
        <?php
        }
          if (isset($_SESSION['auth'])) {
            ?>
                <a  href="actions/user/logoutAction.php">Déconnexion</a> 
            <?php

          } else {
            ?> 
                <a  href="login.php">Connexion</a> 
                <a  href="SignUp.php">Inscription</a> 
            <?php
          }
          
        ?>
    <a href="javascript:void(0);" class="icon" onclick="toggleResponsiveNavbar()">
      <img src="assets/img/menu-burger.png" alt="Menu" style="width: 30px; height: 12px;">
    </a>
  </div>
</nav>


