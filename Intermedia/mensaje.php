<html>

<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div id="header">
        <ul id="menu" class="nav">
            <li><a href="menu.html"></li>
            <li><a href="palindromo.php">Palindromo</a></li>
            <li><a href="numeros.php">Ordenar</a></li>
            <li><a href="mensaje.php">Challenge</a></li>
        </ul>
    </div>
    <div id="contenido">
        <form method="post" class="border p-3 form" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="numeros">Ingrese su nombre</label>
                <input type="text" class="form-control" name="numeros"><br>
                <input type="submit" class="btn btn-success" name="submit" value="Submit"><br>
                <?php
                if (isset($_POST['submit'])) {

                    $nombre = $_POST['numeros'];
                ?>
                    <br><input type="text" class="form-control" name="resultado" value=" Hola <?php echo $nombre; ?> has completado el intermedia dev challege"><br>
                <?php
                }else{
                    echo "Ingrese un nombre";
                }
                ?>
            </div>
        </form>
    </div>
</body>

</html>