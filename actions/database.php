<?php

try{
    
    $bd = new PDO('mysql:host=localhost;dbname=Forum_bd;charset=utf8','root','');
}catch(Exception $e){
    die('Une Erreur est survenue : '. $e->getMessage());
}


