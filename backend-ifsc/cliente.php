<?php
session_start();
if (empty($_SESSION['email'])) {
   header("Location: index.php");
}

?>
<!doctype html>
<html lang="pt-br">

<head>
   <title>Cliente</title>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <!-- Bootstrap CSS v5.2.1 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
   <header>
      <!-- place navbar here -->
   </header>
   <main>
      <h1>Cadastro de Pessoas</h1>
      <form id="frmBuscaCliente">
         <div class="input-group">
            <input type="text" class="for-control" id="expressaoBusca" placeholder="Busca cliente">
            <button id="btnBusca" class="btn btn-primary">
               Buscar Cliente
            </button>
         </div>
         <button type="text" onclick="limparBusca()" class="btn btn-primary">
            Limpar
         </button>
      </form><br><br>


      <div id="content"></div>

      <!--tags -->
      <form id="frmIncluirCliente" style="display: none;" class="row">
         <p>
            <label for="inNome" class="col-sm-6 col-form-label">Nome</label>
            <input type="text" class="form-control" name="nome" id="inNome">
         </p>
         <p>
            <label for="inEmail" class="col-sm-6 col-form-label">E-mail</label>
            <input type="email" class="form-control" name="email" id="inEmail">
         </p>
         <p>
            <label for="id_uf">UF</label>
            <select name="id_uf" id="id_uf"></select>
         <p>
            <!-- <input type="reset" id="btnReset" class="btn btn-warning" value="Reset"> -->
            <input type="button" id="btnIncluir" class="btn btn-success" value="Submit">
         </p>
      </form>

      <!-- https://getbootstrap.com/docs/5.3/components/modal/ -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <form id="frmAlterarCliente">
                  <div class="modal-header">
                     <h1 class="modal-title fs-5" id="exampleModalLabel">Novo cliente</h1>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                     <p>
                        <label for="uCodigo" class="form-label">Código</label>
                        <input type="number" class="form-control" name="id_cliente" id="uCodigo" readonly>
                     </p>
                     <p>
                        <label for="uNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="uNome">
                     </p>
                     <p>
                        <label for="uEmail" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="uEmail">
                     </p>
                     <p>
                        <label for="uUf" class="form-label">UF</label>
                        <input type="text" class="form-control" name="id_uf" id="uUf">
                     </p>
               </form>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
               <button type="button" id="btnIncluir" class="btn btn-primary">Salvar Alterações</button>
            </div>
         </div>
      </div>
      </div><br>



      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Modificar dados do cliente</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <form id="frmAlterarCliente">
                     <p>
                        <label for="uCodigo" class="form-label">Código</label>
                        <input type="number" class="form-control" name="id_cliente" id="uCodigo" readonly>
                     </p>
                     <p>
                        <label for="uNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="uNome">
                     </p>
                     <p>
                        <label for="uEmail" class="form-label">E-mail</label>
                        <input type="email" class="form-control" name="email" id="uEmail">
                     </p>
                     <p>
                        <label for="uUf" class="form-label">UF</label>
                        <input type="text" class="form-control" name="id_uf" id="uUf">
                     </p>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  <button type="button" id="btnAtualizar" class="btn btn-primary">Salvar Alterações</button>
               </div>
            </div>
         </div>
      </div><br>
      <button id="btnIncluirCliente" class="btn btn-secondary">Novo Cliente</button>
   </main>
   <footer>
      <!-- place footer here -->
   </footer>
   <!-- Bootstrap JavaScript Libraries -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/756fe0e0f0.js" crossorigin="anonymous"></script>
   <script src="js/busca-clientes.js"></script>
</body>

</html>