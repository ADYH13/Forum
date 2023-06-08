<?php 
session_start();
require('actions/database.php');

//validation du formulaire
if (isset($_POST['validate']) ) {
    
    // verifier si tout les champs ont été remplis
    if (!empty($_POST['InputPseudo']) && !empty($_POST['InputPassword'])) {
        
        //les données de l'utilisateur
        $user_pseudo = htmlspecialchars(  $_POST['InputPseudo'] );
        $user_password = htmlspecialchars(  $_POST['InputPassword']);
        
        //vérifier si l'utilisateur existe
        $CheckIfUserExist = $bd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $CheckIfUserExist->execute(array($user_pseudo));

        
        


        if ($CheckIfUserExist->rowCount() > 0) {
            
            //vérifier le mot de passe
            $UserInfos = $CheckIfUserExist->fetch();
            if (password_verify($user_password,$UserInfos['mot_de_passe'])) {
                
                

                //Initialiser la session
                $_SESSION['auth']       = true;
                $_SESSION['pseudo']     = $UserInfos['pseudo'];
                $_SESSION['id']         = $UserInfos['id'];
                $_SESSION['name']       = $UserInfos['nom'];
                $_SESSION['surname']    = $UserInfos['prenom'];
                $_SESSION['mail']       = $UserInfos['mail'];

                header('Location: index.php');
            }
            else {
                $ErrorMessage = "Votre mot de passe est incorrect";
            }
            
        }
        else{
            $ErrorMessage = "Votre pseudo est incorrect";
        }

        
        
    }
    else{
        $ErrorMessage = "Veuillez remplir tout les champs s'il vous plaît";
    }
}
