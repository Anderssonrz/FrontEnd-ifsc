const janta = parseFloat(prompt("digite o preço da janta: "))
const taxa =  janta * (10 / 100)
const total = janta + taxa

alert("ficara R$ " +total.toFixed(2))
alert("a taxa é de R$" +taxa.toFixed(2))
