document.getElementById('promoForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var descricao = document.getElementById('medicamento').value;
    var preco = parseFloat(document.getElementById('preco').value);
    
    // Verifica se o preço é válido
    if (isNaN(preco) || preco <= 0) {
        alert('Por favor, insira um preço válido.');
        return;
    }
    
    // Calcula o valor da promoção
    var precoPromocional = preco * 2 - Math.floor((preco * 2));
    
    // Exibe o resultado
    document.getElementById('descricaoResultado').textContent = "Leve 2 por apenas R$ " + precoPromocional.toFixed(2);
    document.getElementById('resultado').style.display = 'block';
});
