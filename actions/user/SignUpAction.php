<?php 
session_start();
require ('actions/database.php');

//validation du formulaire
if (isset($_POST['validate']) ) {
    
    // verifier si tout les champs ont été remplis
    if (!empty($_POST['InputEmail']) && !empty($_POST['InputName1']) && !empty($_POST['InputName2']) && !empty($_POST['InputPseudo']) && !empty($_POST['InputPassword'])) {
        
        //les données de l'utilisateur
        $user_mail = htmlspecialchars(  $_POST['InputEmail'] );
        $user_name = htmlspecialchars(  $_POST['InputName1'] );
        $user_surname = htmlspecialchars(  $_POST['InputName2'] );
        $user_pseudo = htmlspecialchars(  $_POST['InputPseudo'] );
        $user_password = password_hash(  $_POST['InputPassword'], PASSWORD_DEFAULT );
        
        //vérifier si l'utilisateur n'est pas déjà enregistré
        $CheckIfUserExist = $bd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
        $CheckIfUserExist->execute(array($user_pseudo));


        if ($CheckIfUserExist->rowCount() == 0)  {

            //Insérer l'utilisateur
            $InsertUser = $bd->prepare('INSERT INTO users(nom, prenom, pseudo, mail, mot_de_passe) VALUES(?, ?, ?, ?, ?)' );
            $InsertUser->execute(array($user_name,$user_surname,$user_pseudo,$user_mail,$user_password));

            //Récupérer les informations de l'utilisateur
            $GetUserInfos = $bd->prepare('SELECT id, nom, prenom, pseudo FROM users WHERE nom = ? AND prenom = ? AND pseudo = ?');
            $GetUserInfos->execute(array($user_name,$user_surname,$user_pseudo));

            $UserInfo = $GetUserInfos->fetch();

            //Initialiser la session
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $UserInfo['id'];
            $_SESSION['name'] = $UserInfo['nom'];
            $_SESSION['surname'] = $UserInfo['prenom'];
            $_SESSION['pseudo'] = $UserInfo['pseudo'];

            //Rediriger l'utilisateur vers la page d'accueil    
            header('Location: index.php');


        } else {
            $ErrorMessage = "L'utilisateur existe déjà !";
        }
        
    }
    else{
        $ErrorMessage = "Veuillez remplir tout les champs s'il vous plaît";
    }
}

