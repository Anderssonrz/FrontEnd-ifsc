const frm= document.querySelector("form");

frm.addEventListener("submit", (e) => {
const descricao = document.getElementById('medicamento').value;
const preco = parseFloat(document.getElementById('preco').value)
const precoPromocional = Math.floor((preco * 2));
    

document.getElementById('descricaoResultado').textContent = "Leve 2 por apenas R$ " + precoPromocional.toFixed(2);
e.preventDefault();
});
