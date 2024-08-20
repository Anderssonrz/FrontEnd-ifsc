function verificarMulta() {
    var velocidadePermitida = parseFloat(document.getElementById("velocidadePermitida").value);
    var velocidadeCondutor = parseFloat(document.getElementById("velocidadeCondutor").value);
    var resultado = document.getElementById("resultado");

    if (isNaN(velocidadePermitida) || isNaN(velocidadeCondutor)) {
        resultado.innerHTML = "Por favor, insira valores numéricos válidos.";
        return;
    }

    var limiteSuperiorMultaLeve = velocidadePermitida * 1.2;

    if (velocidadeCondutor <= velocidadePermitida) {
        resultado.innerHTML = "Sem Multa";
    } else if (velocidadeCondutor <= limiteSuperiorMultaLeve) {
        resultado.innerHTML = "Multa Leve";
    } else {
        resultado.innerHTML = "Multa Grave";
    }
}