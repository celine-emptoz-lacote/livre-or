<?php session_start();


?>

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
           
            <?php if (!isset($_SESSION['connect'])) :?>
                <a  href="index.php"><span class="icon-home" title="Accueil"></span></a>
                <a class="connexion" href="connexion.php">Connexion</a>
            <?php else :?>
                    <a  href="index.php"><span class="icon-home" title="Accueil"></span></a>
                    <a class="connexion" href="profil.php">Mon compte</a>
                    <a class="connexion" href="logout.php">Déconnexion</a>
                
            <?php endif ;?>

            

        </nav>
        <h1>Décoration d'interieur</h1>
    </header>
    <main >