const btn = document.getElementById("btn")
const content = document.getElementById("content")

btn.addEventListener("click", (e) => {
    const req = new XMLHttpRequest();
    req.onload = function () {
        if (req.status === 200) {
            obj = JSON.parse(this.responseText)
            text = "<table>";
            for(registro in obj){
            text +="<tr>" + campo.innerText +"</tr>";
            for(campo in registro){
            }
            text +="<tr>";
            }
            text = "<table>";
            content.innerText = text;
        } else {
            alert(`Erro: ${req.status} ${req.statusText}`);
        }
    }
    req.open("GET", "ajax1ex.php");
    req.send();
});
