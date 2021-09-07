<html>
    <head>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <!-- Mon css -->
        <link rel="stylesheet" href="form.css">
            
    </head>
    <body>
        <div class="container">
        <?php 
            for ($i=0; $i<10;$i++){
                echo "<button class=\"btn\">Bouton ".$i."</button>";
            }
        ?>
    </div>
    </body>
    
</html>