<?php 
$title = "Ajout de commentaire";
require 'php/require/header.php';

if ( !isset($_SESSION['connect']) ) 
{
    header('location: index.php');
}
else{

    if (isset($_POST['envoyer']))
    {
        if( !empty($_POST['commentaire']) )
        {
            $id_utilisateur = $_SESSION['id'];
            $com = $_POST['commentaire'];
            $bd = mysqli_connect("localhost","root","","livreor");
            $requete = "INSERT INTO `commentaires`( `commentaire`, `id_utilisateur`, `date`) VALUES ('$com','$id_utilisateur',NOW())";
            $query = mysqli_query($bd,$requete);
            $message = "Merci !";
        }
        else{
            $erreur = "Veuillez entrer votre  commentaire !";
        }  
    }
}

    



?>



<h2 class="titre">Livre d'or</h2>

<?php if (!empty($erreur)) :?>
    <div class="erreur">
        <p>
            <?php echo $erreur; ?>
        </p>
    </div>
<?php elseif (!empty($message)) :?>
    <div class="message">
        <p>
            <?php echo $message; ?>
        </p>
    </div>
<?php endif ; ?>
<form action="commentaire.php" method="POST">
    <label for="commentaire">Votre commentaire :</label>
    <textarea name="commentaire" id="commentaire" cols="30" rows="10"></textarea>

    <input type="submit" name="envoyer">
</form>


<?php require 'php/require/footer.html' ?>