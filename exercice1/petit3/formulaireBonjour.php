<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Mon css -->
        <link rel="stylesheet" href="form.css">
    </head>
    <div class="container">
        <?php 
            $message_accueil = 'Bonjour et bienvenue !';
            if (isset($_POST['prenom']) && ($_POST['prenom']!='')){
                echo "<h1>Bonjour ". htmlspecialchars($_POST['prenom'])." !</h1>";
            }else{
                echo "<h1>".$message_accueil."</h1>";
            }
        ?>
        <form action="formulaireBonjour.php" method="post" id="monForm">
            <div class="row">
                <div class="input-field col s3">
                <input placeholder="Jean" id="input_prenom" type="text" class="validate" name="prenom">
                <label for="input_prenom">Votre prénom</label>
                </div>
            </div>
            <input type="submit" value="Envoyer" class="btn">
        </form>
    </div>
    
</html>