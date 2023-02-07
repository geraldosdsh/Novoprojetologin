<?php
include '../conexao.php'; 
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Template de login, usando Bootstrap.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>

<body class="body">   
    <div class="container">
        <div  class="d-flex align-items-center bd-highlight  justify-content-center">
            <div class="card">
                <div class="card-header">
                    <form class="form-row" method="post" action="../functions/cadastro.php">
                      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        <div class="row">  
                          <label for="inputNome" class="sr-only">Nome</label>
                          
                              <div class="row">
                                <div class="col">
                                  <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
                                </div>
                                <div class="col">
                                  <input type="text" id="sobrenome" name="sobrenome" class="form-control" placeholder="Sobrenome">
                                </div>
                              </div>
                            
                        </div>
                        <div>
                          <label for="email" class="sr-only">Endereço de email</label>
                          <input type="email" id="email" name="email" class="forms form-control" placeholder="Seu email" required autofocus></div>
                        <div>
                          <label for="password" class="sr-only">Senha</label>
                            <input type="password" id="senha" name="senha" class="forms form-control" placeholder="Sua Senha" aria-describedby="passwordHelpInline">
                            <input type="password" id="confirmar_senha" name="confirmar_senha" class="forms form-control" placeholder="Confirmar Senha" aria-describedby="passwordHelpInline">  
                        </div>
                        <div >
                          <label for="cpf" class="sr-only">CPF</label>
                          <input type="text" id="cpf" name="cpf"  pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Digite o CPF no formato nnn.nnn.nnn-nn" class="forms form-control" placeholder="CPF" aria-describedby="passwordHelpInline">
                        </div>
                        <div class="boton-login ">
                        <button href="http://localhost/phptest/cadastroprodutos.php" class="btn btn-primary btn-xl mb-2" id="submitButton" onclick="validar()" type="submit"> Cadastrar </button></div>
                        <div class="boton-login m-3">
                            <label class="m-3">Já Possui Login?</label><a href="http://localhost/Novoprojetologin/login.php" class="btn m-3 btn-sm btn-primary "> Login</a>
                            </label>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>


<form class="form-inline">
  
</form>