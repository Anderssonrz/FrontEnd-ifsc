
const frm = document.querySelector("form");
const resp1 = document.querySelector("h3");
const resp2 = document.querySelector("h4");

frm.addEventListener("submit", (e) => {
    e.preventDefault()

    const nome = frm.inNome.value
    const nota1 = Number(frm.inNota1.value)
    const nota2 = Number(frm.inNota2.value)

    const media = (nota1 + nota2)/ 2
    resp1.innerText = `Media das notas ${  media.toFixed(2)}`


    if (media >= 7) {
        resp2.innerText = `Parabens ${nome}! Você foi aprovado(a)`
        resp2.style.color = "#02ccf0"
    } else if
        (media >= 4) {
        resp2.innerText = `Atenção ${nome}! Você esta em exame`
        resp2.style.color = "#69f002"
    } else {
        resp2.innerText = `Ops  ${nome}! Você foi reprovado(a)`
        resp2.style.color = "#fc031c"
    }
});
frm.addEventListener("reset", (e) => {
    resp1.innerText ="";
    frm.inNome.focus();
})