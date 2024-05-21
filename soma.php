
<html lang="pt- br">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=xftp7-7, initial-scale=1.0">
    <title>soma</title>
</head>
<body  class="bg-secondary text-white p-5">

<form action="" method="get">
    <label for="numero1">Insira o numero 1: </label>
    <input type="numero" id="Numero1" name="Numero1">
    <br><br>
    <label for="numero2">Insira o numero 2: </label>
    <input type="number" name="Numero2" id="Numero2">
    <br><br>
    <input type="submit" value="Calcular">
</form>

</body>
<?php

    $n1 = $_GET['Numero1'];
    $n2 = $_GET['Numero2'];

    $resultado = $n1 + $n2;

    if($resultado > 20){
        $resultado += 8;
        echo "<br><br> A soma dos números é: $resultado";
    }
    else{

    $resultado -= 5;
    echo "<br><br> O resultado dos números é: $resultado";   
    
    }

?>
</html>