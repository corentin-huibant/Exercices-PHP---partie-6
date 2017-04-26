<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 6, Exercice 6 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
           <h1>Exercice 6</h1>
           <!-- Pour vérifier la présence d'un paramètre dans une url, on utilise la fonction spécifique isset dans une condition if/else -->
           <?php
                if(isset($_GET['batiment']) && isset($_GET['salle'])) {
            ?>
           <!-- Pour récupérer les paramètres de l'url, on utilise le tableau associatif spécifique $_GET qui stocke les valeurs demandées -->
           <p>Vous êtes dans le batiment <?php echo $_GET['batiment'] . ', salle ' . $_GET['salle']; ?></p>
           <?php
           //message d'erreur :
                }else {
            ?>
            <p>Nous ne trouvons pas les paramètres demandés</p>
            <?php
                }
           ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>