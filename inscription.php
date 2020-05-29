<?php 
$title = "Inscription , décoration d'interieur";
require 'php/require/header.php';


if( !empty($_POST))
{
       
    $login = trim($_POST["login"]); //

    $bd = mysqli_connect("localhost","root","","livreor");

    $requete1 = "SELECT COUNT(*) AS nb FROM utilisateurs WHERE login = '$login' ";
    $query1 = mysqli_query($bd,$requete1);
    $resultat = mysqli_fetch_all($query1,MYSQLI_ASSOC);
        
    if ( $resultat[0]['nb'] != "1")
    {
        if ( $_POST['password'] == $_POST['password2'])
        {
            $password_Crypt = trim(password_hash($_POST["password"], PASSWORD_DEFAULT ));
            $requete = "INSERT INTO `utilisateurs`( `login`, `password`) VALUES ('$login','$password_Crypt')";
            $query = mysqli_query($bd,$requete);
            $_SESSION['message'] = "Merci pour votre inscription !";
            header('location: connexion.php');
            exit;
        }
        else{
            $erreur = "Les mots de passe ne sont pas identiques";
        }
    }
    else{
        $erreur = "Ce login existe déjà !";
    }
mysqli_close($bd);
}
?>

<h2 class="titre">Inscription</h2>

<?php if (!empty($erreur)) {
    echo "<div class= 'erreur'><p class='erreur-p'>".$erreur."</p></div>";
    } ;
?>

<form action="inscription.php" method="POST">
    <label for="login">Login :</label>
    <input type="text" id="login" name="login" required>

    <label for="motdepasse">Mot de passe :</label>
    <input type="password" id="motdepasse" name="password" required>

    <label for="motdepasse2">Confirmer votre mot de passe :</label>
    <input type="password" id="motdepasse2" name="password2" required>

    <input type="submit">

</form>

<?php require 'php/require/footer.html' ?>