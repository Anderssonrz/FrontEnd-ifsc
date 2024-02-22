const frm= document.querySelector("form");
const resp= document.querySelector("h3");

frm.addEventListener("submit", (e) => {
const nome= frm.inNome.value;
const idade= frm.inIdade.value;

resp.innerText = `Ola ${nome} sua idade é ${idade}`;
e.preventDefault();
});

frm.addEventListener("reset", (e) => {
    resp.innerText ="";
    frm.inNome.focus();
})
