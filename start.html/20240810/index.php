<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pesquisa.php" method="get">
    <input type="text" name="termo" placeholder="Pesquisar produtos...">
    <input type="submit" value="Pesquisar">
</form>

</body>
</html><?php
include 'db.php';

$sql = "SELECT id, nome, preco, tipo, categoria FROM produtos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["nome"] . "</h2>";
        echo "<p>Preço: " . $row["preco"] . "</p>";
        echo "<p>Tipo: " . $row["tipo"] . "</p>";
        echo "<p>Categoria: " . $row["categoria"] . "</p>";
        echo "<a href='detalhes.php?id=" . $row["id"] . "'>Ver detalhes</a><hr>";
    }
} else {
    echo "Nenhum produto encontrado.";
}

$conn->close();
?>
