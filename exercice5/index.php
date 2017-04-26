<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - partie 6, Exercice 5 </title>
        <link href="../style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centered">
           <h1>Exercice 5</h1>
           <!-- Pour vérifier la présence d'un paramètre dans une url, on utilise la fonction spécifique isset dans une condition if/else -->
           <?php
                if(isset($_GET['semaine'])) {
            ?>
           <p>Le paramètre semaine est égal à <?php echo $_GET['semaine']; ?></p>
           <?php
           //sinon, message d'erreur :
                }else {
            ?>
            <p> Nous ne trouvons pas le paramètre semaine dans l'adresse url. </p>
            <?php
                }
           ?>
        </div>
        <!-- inclusion d'un template qui reprend le menu de navigation pour les exercices-->
        <?php include("../nav/index.php"); ?>
    </body>
</html>