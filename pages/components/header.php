<?php
$path = $_SERVER['SCRIPT_NAME'];
$title = basename($path, '.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <!--Lien pour la Favicon-->
    <link rel="shortcut icon" href="../assets/logo_copywritingfreak.png" type="image/x-icon">
    <!--Links pour css et framework css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
    <a href="#">
        <img src="../../assets/logo_copywritingfreak.png" alt="Logo de CopyWriting Freak" width="70px" height="70px"
             class="img-thumbnail">
    </a>
</header>