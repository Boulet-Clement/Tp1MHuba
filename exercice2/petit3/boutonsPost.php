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
        <form action="boutonsPost.php" method="post" id="monForm">
            <div class="row">
                <div class="input-field col s3">
                <input placeholder="0" id="input_nombre" type="text" class="validate" name="nombre">
                <label for="input_nombre">Nombre de bouttons que vous voulez</label>
                </div>
                <!--<div class="input-field col s3">
                <p>Nombre de bouttons que vous voulez : <input type="text" name="nombre" /></p>
                </div>-->
            </div>
            <input type="submit" value="Envoyer" class="btn">
        </form>
        <?php 
        if (isset($_POST['nombre'])){
            $nombre = (int) htmlspecialchars($_POST['nombre']);
            $s = $nombre>1?'s':'';
            echo "voici ".$nombre." bouton".$s." :<br/>";
            for ($i=1; $i<$nombre+1;$i++){
                echo "<button class=\"btn\">Bouton ".$i."</button>";
            }
        }
        ?>
    </div>
</html>