<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Genero| PHP</title>
</head>
<body  class="bg-secondary text-white p-5">
    <h1>Cadastro</h1>

    <form action="" method="get">

    <label for="nome">Digite seu nome: </label>
    <input type="text" name="nome" id="name">
    <br><br>
    <label for="idade">Digite sua idade: </label>
    <input type="number" name="idade" id="idade">
    <br><br>
    <label for="genero">Escolha seu gênero: </label>

    <select name="genero" id="genero">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
        <option value="nao">Prefiro não dizer</option>
    </select>
<br><br>
    <input type="submit" value="Enviar">

    </form>


    <?php

    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    $genero = $_GET['genero'];

    if($idade < 25 and $genero = 'feminino'){

        echo "<br><br>$nome, ACEITA!<br>";
    }
    else{

        echo "<br><br>$nome, NÃO ACEITA!<br>";
    }

    ?>
</body>
</html>