<?php
    require("conexao.php");

    if (isset($_POST["btnSalvar"])) {
        $caracteristica = [];
        $caracteristica['nome'] = $_POST['txtNome'];
        $caracteristica['descricao'] = $_POST['txtDescricao'];
        cadastrarCaracteristica($conexao, $caracteristica);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >

    <style>
        form {
            margin: 1rem;
        }

        legend {
            text-align: center;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Cadastrar Característica</legend>
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="nomeProduto" class="form-label">Nome</label>
                <input type="text" name="txtNome" class="form-control" id="nomeProduto">
            </div>
            <div class="mb-3">
                <label for="descricaoProduto" class="form-label">Descrição</label>
                <textarea type="text" name="txtDescricao" class="form-control" id="descricaoProduto" cols="30" rows="5"></textarea>
            </div>
            <button type="submit" name="btnSalvar" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-primary" href="index.php">Ver tabela</a>
        </form>
    </fieldset>
</body>

</html>

<?php

    function cadastrarCaracteristica($conexao, $caracteristica){
        $nome = $caracteristica['nome'];
        $descricao = $caracteristica['descricao'];

        $sql = "INSERT INTO caracteristica (nome, descricao) VALUES ('$nome', '$descricao')";
        
        if (mysqli_query($conexao, $sql) == TRUE){
            echo "Registro inserido com sucesso!";
            header("Location: index.php");
        } else {
            echo "Erro ao inserir registro " . mysqli_connect_error();
        }
    }

?>
