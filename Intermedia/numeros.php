<html>

<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>

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
                <label for="numeros">Ingrese 10 numeros separados por comas</label>
                <input type="text" class="form-control" name="numeros"><br>
                <input type="submit" class="btn btn-success" name="submit" value="Ordenar"><br>
                <?php
                if (isset($_POST['submit'])) {
                    $numeros = $_POST['numeros'];
                    $nuevo = '';
                    $array = explode(',', $numeros);
                    $valor = sizeof($array);
                    asort($array);
                    if ($valor == 10) {
                        foreach ($array as $numero) {
                            $nuevo .=  $numero . ',';
                        }
                ?>
                        <br><input type="text" class="form-control" name="resultado" value="  <?php echo $nuevo; ?>"><br>
                <?php
                    } else {
                        echo "Debe ingresar un total de 10 números";
                    }
                }
                ?>
            </div>
        </form>
    </div>

</body>

</html>