<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>
<body>
    <h1>Funções</h1>

    <?php

    function notas($i, $j){

        $k = ($i + $j) / 2 ;

        return $k;

    }

    $res = notas(4, 5);

    echo "O resultado é ". $res;

    ?>
</body>
</html>