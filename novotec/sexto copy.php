<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle </title>
</head>
<body>
    
<h1>foreach</h1>

Nome dos alunos:

<?php

$n = array("1" => "Anielly", "2" => "Erick", "3" => "Euller", "4" => "Geovana", "5" => "Gustavo", "6" => "Kaiki", "7" => "Kaynan", "8" => "Lucas", "9" => "Mariane", "10" => "Matheus", "11" => "Nathan", "12" => "Pedro", "13" => "Raissa", "14" => "Thamiris", "15" => "Willian");

/*
echo "<br>";
foreach ($n as $i) {

    echo $i. ", ";
    
}
*/
/*
echo "<br>";

foreach (array_keys($n) as $k) {
    echo $k. ", ";
}

echo "<br>";
*/

echo "<br>";
foreach ($n as $key => $value){
    echo $key. " = ". $value. "<br>";
}

echo "<br>";
?>
</body>
</html>