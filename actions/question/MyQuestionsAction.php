<?php

require('actions/database.php');

$GetMyQuestions = $bd->prepare("SELECT * FROM quetions WHERE id_auteur = ? ORDER BY id DESC");
$GetMyQuestions->execute(array($_SESSION['id']));