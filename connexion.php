<?php 
$title = "Connexion , décoration d'interieur";
require 'php/require/header.php';

if (!empty($_POST['valider']))
{  
    $login= $_POST['login'];
    $password = $_POST['password'];

    $bd = mysqli_connect("localhost","root","","livreor");

    $requete = "SELECT *  FROM utilisateurs WHERE login = '$login' ";
    $query = mysqli_query($bd,$requete);
    $resultat = mysqli_fetch_all($query);

    if ( !empty($resultat) && password_verify($password,$resultat[0][2]))
    {
        $_SESSION['connect'] = 1;
        $_SESSION['id'] = $resultat[0][0];
        $_SESSION['login'] = $resultat[0][1];
        header('location: profil.php');
        exit;
    }
    else
    {
        $erreur = "Identifiant et/ou mot de passe incorrect";
    }
    mysqli_close($bd);
}


?>

<h2 class="titre">Se connecter</h2>

<?php if (!empty($erreur)) { echo "<div class= 'erreur'><p class='erreur-p'>".$erreur."</p></div>"; } ?>

<?php if (!empty($_SESSION['message'])) :?>
    <p class="message"><?php echo $_SESSION['message'] ?></p>
<?php endif ;?>

<form action="connexion.php" method="POST">

    <label for="login">Login :</label>
    <input type="text" id="login" name ="login" required >

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name ="password" required >

    <input type="submit" name ="valider">
</form>
<p>Pour s'incrire cliquer <a class="a-inscription" href="inscription.php">ici</a></p>

<?php 

require 'php/require/footer.html';
unset($_SESSION["message"]);
?>