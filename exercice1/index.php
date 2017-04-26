<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 6, Exercice 1 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
           <h1>Exercice 1</h1>
           <!-- Pour vérifier la présence d'un paramètre dans une url, on utilise la fonction spécifique isset dans une condition if/else -->
           <?php
                if(isset($_GET['nom']) && isset($_GET['prenom'])) {
            ?>
           <!-- Pour récupérer les paramètres de l'url, on utilise le tableau associatif spécifique $_GET qui stocke les valeurs demandées -->
           <p>Bonjour <?php echo $_GET['nom'] . ' ' . $_GET['prenom']; ?> !</p>
           <?php
                }else {
            ?>
            <p>Je ne peux pas lire le nom et le prénom !</p>
            <?php
                }
           ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>