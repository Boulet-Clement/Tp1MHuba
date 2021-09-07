<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container">
            <?php 
            session_start();
            if(isset ($_SESSION["compteur"])){
                $_SESSION["compteur"]+=1;
            }else{
                $_SESSION["compteur"]=0;
            }
            echo "<h2>Nombre de visites: ". $_SESSION["compteur"] . "</h2><br/>";
            ?>
            <a href="resetCompteur.php" class="btn">Réinitialiser le compteur</a>
        </div>
    </body>
</html>
