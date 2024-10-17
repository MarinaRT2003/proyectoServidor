<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="Tirada">
        <h3>Tirada de 6 datos</h3>
        <?php 
            $tirada = 6;
            $dadosArray = [];
            for( $i = 0; $i < $tirada; $i++ ) {
                $dado = rand(1,6);
                echo'<img src="' . $dado . '.svg">';
                $dadosArray[] = $dado;
            }
        ?>
    </div>
    <div id="Eliminar">
        <h3>Dado a eliminar</h3>
        <?php 
            $dadoAzar=rand(1, 6);
            echo'<img src="' . $dadoAzar . '.svg">';
        ?>
    </div>
    <div id="Restantes">
        <h3>Dados restantes</h3>
        <?php 
            $arrayRestantes = array_diff($dadosArray, [$dadoAzar]);
            foreach ($arrayRestantes as $dado) {
                echo'<img src="' . $dado . '.svg">';
            }
        ?>
    </div>
</body>
</html>