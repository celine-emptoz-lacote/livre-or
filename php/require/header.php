<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="src/css/fontello/css/fontello.css">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>

    <header>

        <nav>
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">

                <?php if (!isset($_SESSION['connect'])) :?>
                    <li><a  href="index.php">Accueil</a></li>
                    <li><a  href="connexion.php">Connexion</a></li>
                    <li><a href="livre-or.php?page=1">Livre d'or</a></li>
                <?php else :?>
                        <li><a  href="index.php">Accueil</a></li>
                        <li><a  href="profil.php">Mon compte</a></li>
                        <li><a href="livre-or.php?page=1">Livre d'or</a></li>
                        <li><a  href="logout.php">Déconnexion</a></li>
                    
                <?php endif ;?>
                </ul>
            </div>
        </nav>
            <h1>Décoration d'interieur</h1>
    </header>
    <main >