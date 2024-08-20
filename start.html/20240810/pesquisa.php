<?php
include 'db.php';

$termo = $_GET['termo'];

$sql = "SELECT id, nome, preco, tipo, categoria FROM produtos 
        WHERE nome LIKE '%$termo%' 
        OR tipo LIKE '%$termo%' 
        OR categoria LIKE '%$termo%' 
        OR preco LIKE '%$termo%'";
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
