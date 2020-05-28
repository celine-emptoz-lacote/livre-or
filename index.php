<?php 
$title = "Accueil , décoration d'interieur";
require 'php/require/header.php'; 

$bd = mysqli_connect("localhost","root","","livreor");
$requete = "SELECT * FROM commentaires  inner join utilisateurs ON utilisateurs.id= id_utilisateur ORDER BY rand() LIMIT 0,3 ";
$query = mysqli_query($bd,$requete);
$resultat = mysqli_fetch_all($query);

?>
        <div class="index-main-div">
            <section>
                <h2>Table basse industrielle : 22 idées déco pour le salon</h2>
                <hr>
                <img src="src/img/table1.Jpg" alt="Table basse">
                <p>Vous êtes à la recherche d’une table basse industrielle pour votre salon ? Découvrez cette sélection de 22 idées déco.</p>
                <p>Choisir sa table de salon dans un style industriel amène à se poser quelques questions. Quelle dimension, quelle hauteur, quels matériaux, quel style, quelle fonction ?...</p>
                <a class="bouton" href="#">Lire la suite</a>
            </section>
            <section>
                <h2>Une suspension industrielle : style brut et chaleureux</h2>
                <hr>
                <img src="src/img/suspension.jpg" alt="suspension industrielle">
                <p>Incontournable, la suspension industrielle s’invite dans nos intérieurs pour lui donner un véritable style décontracté et authentique !
                Pratique, elle apporte luminosité et authenticité, pour une ambiance rétro, le tout dans un esprit “factory”.
                Si vous souhaitez misez sur ce style, en choisissant une suspension industrielle, originale et intemporelle ...</p>
                <a class="bouton" href="#">Lire la suite</a>
            </section>
            <section>
                <h2>S’évader le temps d'une visite</h2>
                <hr>
                <img src="src/img/australie.jpg" alt="Photo de cuisine">
                <p>Rendez vous en Australie , dans une beach house familiale ou je qualifirai la décoration de tendance, chaleureuse et audacieuse ! Je croix que quand on arrive à meler ses trois adjectifs , le pari est réussi !</p>
                <p>C’est vrai que la cuisine de dimanche dernier était whaou mais celle-ci est ...</p>
                <a class="bouton" href="#">Lire la suite</a>
            </section>
            <section>
                <h2>Creér un espace jardin à l'interieur</h2>
                <hr>
                <img src="src/img/fleurs.jpg" alt="Jardin d'interieur">
                <p>Alors ce confinement? Ca se passe bien? Comme visiblement en France vous en avez encore [au moins] pour un petit mois à être à la maison, je me suis dit qu'il était intéressant de se pencher sur la question du jardin quand on n'a pas d'extérieur. Qu'on soit dans une maison de ville ou dans un appartement, qu'on soit bloqué dans une chambre de bonne ...</p>
                <a class="bouton" href="#">Lire la suite</a>
            </section>
        </div>

        
        <?php if ( isset($resultat) && !empty($resultat)) :?>
        <section class="livre-or">
        
            <h2>Livre d'or</h2>
            <p class="livre-or-p">Ce que les gens pensent de nous</p>
            <div class="livre-or-div">
                
                <?php foreach ($resultat as $valeur) : ?>
                <div>   
                    <p class="index_login"><?php echo ucfirst($valeur[5]) ?></p>
                    <p><?php echo mb_strimwidth ( $valeur[1] , '0' , '150' ,"..."); ?></p>
                </div>
                <?php endforeach ;?>
            </div>
        
            <a class="connexion" href="livre-or.php?page=1">Acceder au livre d'or</a>
        </section>
        <?php endif ;?>
       
<?php require 'php/require/footer.html' ?>