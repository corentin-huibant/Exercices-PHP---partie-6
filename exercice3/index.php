<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 6, Exercice 3 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
           <h1>Exercice 3</h1>
           <!-- Pour vérifier la présence d'un paramètre dans une url, on utilise la fonction spécifique isset dans une condition if/else -->
           <?php
                if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
            ?>
           <!-- Pour récupérer les paramètres de l'url, on utilise le tableau associatif spécifique $_GET qui stocke les valeurs demandées -->
           <p>Afficher la date de démarrage : <?php echo $_GET['dateDebut']; ?></p>
           <p>et la date de conclusion : <?php echo $_GET['dateFin']; ?> </p>
           <?php
           //sinon, message d'erreur :
                }else {
            ?>
            <p> Nous ne trouvons pas les paramètres demandés</p>
            <?php
                }
           ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>