<?php 
$title = "Mon profil , décoration d'interieur";
require 'php/require/header.php' ;

$bd = mysqli_connect("localhost","root","","livreor");

$id = $_SESSION['id'];

$requete = "SELECT * FROM `utilisateurs` WHERE id = $id ";
$query = mysqli_query($bd,$requete);
$user = mysqli_fetch_all($query);

if (isset($_SESSION['connect']))
{
    if (isset($_POST)){
        if (isset($_POST['login']))
        {
            if ($_POST['login'] != $user[0][1])
            {
                $login = $_POST['login'];
    
                $requete_verification = "SELECT COUNT(*) AS nb FROM utilisateurs WHERE login = '$login' ";
                $query_verification = mysqli_query($bd,$requete_verification);
                $verif = mysqli_fetch_all($query_verification, MYSQLI_ASSOC);
    
                if ($verif[0]['nb'] == '0')
                {
                    $requete_update = "UPDATE `utilisateurs` SET `login`='$login' WHERE id = $id";
                    $query_update = mysqli_query($bd,$requete_update);
    
                    $requete = "SELECT * FROM `utilisateurs` WHERE id = $id ";
                    $query = mysqli_query($bd,$requete);
                    $user = mysqli_fetch_all($query);
                    $message = "Modifications prisent en compte !";
                    
                }
                else{
                    $erreur = "Ce login existe dejas !";
                } 
            }
        }
        if ( !empty($_POST['password'])  && !empty($_POST['password2'])  ) 
        {
            if ($_POST['password'] === $_POST['password2'])
            {
                $password = password_hash( $_POST['password'] , PASSWORD_DEFAULT);
                $requete_update_mdp = "UPDATE `utilisateurs` SET `password`='$password' WHERE id = $id";
                $query_update_mdp = mysqli_query($bd,$requete_update_mdp);
    
                $requete = "SELECT * FROM `utilisateurs` WHERE id = $id ";
                $query = mysqli_query($bd,$requete);
                $user = mysqli_fetch_all($query);
                $message = "Les modifications sont prisent en compte !";
            }
            else{
                $erreur ="Les mots de passes ne sont pas identiques";
            }
        }
    }
}
else{
    header('location: connexion.php');
}


?>

<h1 class="titre">Mon compte</h1>

<?php echo "<p class='p-profil' >Bonjour ".ucfirst($_SESSION['login'])." ! </p>" ?>
<?php if( !empty($erreur) ) { echo '<div class="erreur"><p>'.$erreur.'</p></div>'; }?>
<?php if( !empty($message) ) { echo '<div class="message"><p>'.$message.'</p></div>'; }?>

<a class="a-profil" href="#modif" >Modifier</a> 
    


<form class="modif" id="modif" action="profil.php" method = "POST">
    <label for="login">Nouveau login :</label>
    <input type="text" id="login" name="login" value="<?=  $user[0][1] ?>" required> 

    <label for="password"> Nouveau mot de passe :</label>
    <input type="password" id="password" name ="password" placeholder="Entrer votre nouveau mot de passe">

    <label for="password2">Confirmer votre mot de passe :</label>
    <input type="password" id="password2" name="password2" placeholder="Entrer votre nouveau mot de passe">

    <input  type="submit" name="modifier" value="Modifier">
    
</form>


<?php require 'php/require/footer.html' ?>