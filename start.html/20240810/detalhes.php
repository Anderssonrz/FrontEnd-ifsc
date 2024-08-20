<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM produtos WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["nome"] . "</h2>";
        echo "<p>Preço: " . $row["preco"] . "</p>";
        echo "<p>Tipo: " . $row["tipo"] . "</p>";
        echo "<p>Categoria: " . $row["categoria"] . "</p>";
        echo "<p>Descrição: " . $row["descricao"] . "</p>";
        echo "<p>Data de Lançamento: " . $row["data_lancamento"] . "</p>";
        if ($row["desconto"]) {
            echo "<p>Desconto: " . $row["desconto"] . "%</p>";
        }
        echo "<p>Características: " . $row["caracteristicas"] . "</p>";
    }
} else {
    echo "Produto não encontrado.";
}

$conn->close();
?>
