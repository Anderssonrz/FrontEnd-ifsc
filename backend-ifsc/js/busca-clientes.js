
// CHAMADA DE FUNÇÕES
const btnBusca = document.getElementById("btnBusca");

// --------------------------------------------------------------------------

const btnIncluirCliente = document.getElementById("btnIncluirCliente");
btnIncluirCliente.addEventListener("click", (e) => {
  var elemSelectUf = document.getElementById("id_uf")
  var xhr = new XMLHttpRequest();
  xhr.onload = function () {

    if (xhr.status == 200 && xhr.readyState == 4) {
      console.log(xhr.responseText);
      var arrayUF = JSON.parse(xhr.responseText);
      for (uf of arrayUF) {
        console.log(uf);

        // variável "elemOpcao" representa (OPÇÃO) para selecionar as unidades federativas brasileiras.
        let elemOption = document.createElement("option");
        elemOption.innerText = `${uf.sigla} - ${uf.nome}`;
        elemOption.setAttribute('value', uf.id_uf);
        elemSelectUf.appendChild(elemOption);

      }
    }

  }
  xhr.open("GET", "uf-controller.php");
  xhr.send();
  frmIncluirCliente.style.setProperty("display", "block");
});
// ---------------------------------------------------------------------------------

const btnIncluir = document.getElementById("btnIncluir");
const btnAtualizar = document.getElementById("btnAtualizar");
const content = document.getElementById("content");
const frmIncluirCliente = document.getElementById("frmIncluirCliente");
const frmBuscaCliente = document.getElementById("frmBuscaCliente");
btnIncluirCliente.addEventListener("click", (e) => {
  frmIncluirCliente.style.setProperty("display", "block");
});

// -----------------------------------------------------------------------------------
btnIncluir.addEventListener("click", (e) => {
  const xhr = new XMLHttpRequest();
  let cliente = new FormData(frmIncluirCliente);
  xhr.onload = function () {
    if (xhr.status == 200) {
      alert("Inclusao Ok");
      frmIncluirCliente.reset();
      frmIncluirCliente.style.setProperty("display", "none");
      buscaClientes();
    }
    else {
      alert("Erro na Inclusao");
    }
  }
  xhr.open("POST", "cliente-insert.php");
  xhr.send(cliente);
  e.preventDefault();
});
// -------------------------------------------------------------------------------------

btnBusca.addEventListener("click", buscaClientes);
document.addEventListener("DOMContentLoaded", buscaClientes);
frmBuscaCliente.addEventListener("submit", buscaClientes);

function buscaClientes(e) {
  console.log("buscaClientes");
  const expressaoBusca = document.getElementById("expressaoBusca").value;
  const req = new XMLHttpRequest();
  req.onload = function () {
    if (req.status == 200) {
      let html = "<table class='table table-bordered table-hover table-sm'>";
      html += "<tr><th>CÓDIGO</th><th>NOME</th><th>E-MAIL</th><th>UF</th><th>Editar/Excluir</th></tr>";
      const vetorClientes = JSON.parse(this.responseText);
      for (let cliente of vetorClientes) {
        html += `<tr><td>${cliente.codigo}</td><td>${cliente.nome}</td><td>${cliente.email}</td><td>${cliente.id_uf}</td>`;
        html += '<td>';
        html += ` <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-info" onClick="showClienteUpdForm(${cliente.codigo})"><i class="fa-solid fa-pencil"></i></button>`;
        html += ` <button class="btn btn-danger" onClick="delCliente(${cliente.codigo});"><i class="fa-solid fa-trash-can"></i></button>`;
        html += '</td></tr>';
      }
      html += "</table>";
      content.innerHTML = html;
    }
    
    else {
      alert(`Erro: ${req.status} ${req.statusText}`);
    }
  }
  req.open("GET", `busca-clientes.php?expressaoBusca=${expressaoBusca}`);
  req.send();
  
}
// ---------------------------------------------------------------------------------------

function showClienteUpdForm(codigo) {
  console.log("entrou na funcao showClienteUpdForm");

  // Ajax para buscar os dados do cliente que eu quero alterar
  let xhr = new XMLHttpRequest();
  xhr.onload = function () {
    if (xhr.status == 200) {
      console.log(xhr.responseText);
      cliente = JSON.parse(xhr.responseText)[0];
      console.log(cliente);
      // popula os dados do cliente no formulario
      const frm = document.getElementById("frmAlterarCliente");
      frm.codigo.value = cliente.codigo;
      frm.nome.value = cliente.nome;
      frm.email.value = cliente.email;
      frm.id_uf.value = cliente.id_uf;

    }
  }
  if (uf.id) {
  xhr.open("GET", `cliente-get.php?codigo=${codigo}`);
  xhr.send();
  }
}
// --------------------------------------------------------------------------
btnAtualizar.addEventListener("click", (e) => {
  console.log("btnAtualizar.addEventListener");

  // "pega" o formulário de alteração
  const frm = document.getElementById("frmAlterarCliente");

  // cria um FormData a partir desse formulário
  let cliente = new FormData(frm);

  let xhr = new XMLHttpRequest;

  xhr.onload = function () {
    console.log(xhr.responseText);
    if (xhr.status == 200) {

      // Comando que salvará as alterações e fechará o Modal altomaticamente.
      buscaClientes();
      bootstrap.Modal.getInstance(document.getElementById("exampleModal")).hide();

    }
  }
  xhr.open("POST", `cliente-update.php`);
  xhr.send(cliente);
});


function delCliente(id) {
  if (confirm("Confirma a exclusão do registro?") == true) {
    let data = new FormData();
    data.append("id", id);
    console.log(data.id);
    let xhr = new XMLHttpRequest();
    xhr.onload = function () {
      if (xhr.status == 200) {
        alert("Exclusao Ok");
        buscaClientes();
      }
      else {
        alert(`Erro: ${xhr.status} ${xhr.statusText}`);
      }
    }
    xhr.open("POST", "cliente-delete.php");
    xhr.send(data);
  }
}

function limparBusca() {
  document.getElementById('expressaoBusca').reset();  
}

