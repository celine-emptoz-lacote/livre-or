<?php 
$title = "Livre d'or";
require 'php/require/header.php';

$bd = mysqli_connect("localhost","root","","livreor");

$commentaire_total = "SELECT COUNT(id) FROM commentaires ";
$query_commentaire_total = mysqli_query($bd,$commentaire_total);
$total = mysqli_fetch_all($query_commentaire_total);


if (isset($_GET['page']) && !empty($_GET['page']) && $_GET['page'] > 0)
{
    $_GET['page'] = intval($_GET['page']);
    $page_courante = $_GET['page'];
}
else {
    $page_courante = 1;
}

$commantaire_par_page = 3;
$depart = ( $page_courante - 1)*$commantaire_par_page;
$pageTotal = ceil($total[0][0]/$commantaire_par_page);


$requete = "SELECT * , DATE_FORMAT(date, '%d/%m/%Y') AS date FROM `commentaires` inner join utilisateurs ON utilisateurs.id= id_utilisateur  ORDER BY date DESC LIMIT $depart,$commantaire_par_page"; // inner join pour aller chercher le nom de l utilisateur
$query = mysqli_query($bd,$requete);
$resultat = mysqli_fetch_all($query,MYSQLI_ASSOC);

mysqli_close($bd);
?>

    <h2 class="titre">Livre d'or</h2>

    <?php if (isset($_SESSION['message'])) :?>
        <p class="message"> <?= $_SESSION['message'] ?> </p>
    <?php endif ;?>

    <?php if( isset($resultat)) :?>
        <?php foreach ($resultat as $value) : ?>
            <section class="livreor_section">
                <h3>Posté le <?php echo $value['date'] ?> , par <span><?php echo ucfirst($value['login']) ?></span> </h3>
                <p><?php echo $value['commentaire'] ?></p>
            </section>
        <?php endforeach ;?>
    <?php endif ;?>

    <nav class="nav-pagination">
        <?php for ($i = 1 ; $i <= $pageTotal ; $i++) : ?>
            <?php if ( isset($_GET['page']) && $_GET['page'] == $i) : ?>
                <a id="color" href='livre-or.php?page=<?php echo $i?>'><?php echo $i ?></a>     
            <?php else :?>
                <a  href='livre-or.php?page=<?php echo $i?>'><?php echo $i ?></a> 
            <?php endif ;?>
        <?php endfor ; ?>
    </nav>

    <?php if (!empty($_SESSION['connect']) == 1) : ?>
        <a class="connexion" href="commentaire.php">Ajouter un commenatire</a>
    <?php else :?>
        <p>Pour pouvoir poster un commentaire <a class="a-inscription" href="connexion.php">connecter vous </a> </p>
    <?php endif ;?>

<?php require 'php/require/footer.html';

unset($_SESSION['message']);
?>
