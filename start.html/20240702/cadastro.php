<?php
require ("conexao.php");
if (isset($_POST["btnSalvar"])){
      $caracteristica = '';
      $caracteristica['nome'] = $_POST['txtNome'];
      $caracteristica['descricao'] = $_POST['txtDescricao'];
      cadastrarcaracteristica($conexao, $caracteristica);
    }
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<style>
    form {
        margin: 10px;
    }
</style>

<body>
    <form action="#" method="POST">
        <div class="mb-3">
            <label for="nomeproduto" class="form-label">Nome </label>
            <input type="text" name="txtNome" class="form-control" id="nomeproduto">
        </div>
        <div class="mb-3">
            <label for="descricaoproduto" class="form-label">Descrição</label>
            <textarea type="text" name="txtDescricao" class="form-control" id="descricaoproduto"></textarea>
        </div>
        <button type="submit" name="btnSalvar" class="btn btn-primary">Cadastrar</button>
    </form>
</body>

</html>
<?php
function cadastrarcaracteristica($conexao, $caracteristica)
{
    $nome = $caracteristica['nome'];
    $descricao = $caracteristica['descricao'];

    $sql= " INSERT INTO caracteristica(nome, descricao) VALUES ('$nome', '$descricao')";

    if(mysqli_query($conexao, $sql) == TRUE){
        echo "Registro inserido com sucesso!";
        header("Location : index.php");

    }else{
        echo "Erro ao inserir registro" . mysqli_connect_error();
    }
}
