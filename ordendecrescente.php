
<html lang="pt-br">
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="descrecente.css">
    <title>Ordem descrecente | PHP</title>
</head>
<body  class="bg-secondary text-white p-5">
    <h1>Ordem descrecente</h1>

<form action="" method="get">

    <label for="Numero1">Insira o 1º número: </label>
    <input type="number" name="Numero1" id="Numero1">
    <br><br>
    <label for="Numero2">Insira o 2º número: </label>
    <input type="number" name="Numero2" id="Numero2">
    <br><br>
    <label for="Numero3">Insira o 3º número: </label>
    <input type="number" name="Numero3" id="Numero3">
    <br><br>
    <input type="submit" value="Enviar">

</form>

<?php

    if(isset($_GET['Numero1']) && isset($_GET['Numero2']) && isset($_GET['Numero3'])) {
        
        $n1 = $_GET['Numero1'];
        $n2 = $_GET['Numero2'];
        $n3 = $_GET['Numero3'];
    
        
        function comparar($a, $b) {
            return $b - $a;
        }
    
        
        $numeros = array($n1, $n2, $n3);
    
        
        usort($numeros, 'comparar');
    
        
        echo "<br> A ordem decrescente é: ";
        foreach ($numeros as $numero) {
            echo "$numero ";
        }
    }

?>

</body>
</html>