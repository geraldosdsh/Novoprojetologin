
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Template de login, usando Bootstrap.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</head>

<body class="body">   
    <div class="container">
        <div class="d-flex align-items-center bd-highlight  justify-content-center">
            <div class="card">
                <div class="card-header">
                    <form class="form">
                        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                        <label for="inputEmail" class="sr-only">Endereço de email</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
                        <label for="inputPassword" class="sr-only">Senha</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                        <div class="checkbox mb-3">
                            <label>
                            <input type="checkbox" value="remember-me"> Manter-me Logado
                            </label>
                        </div>
                        <div>
                        <button class="btn btn-sm btn-primary " type="submit">Login</button>
                        <div class="footerform">
                        <label>
                        </div>
                        <label>Ainda Não Possui Conta?</label><a href="http://localhost/projetofilipe/site/cadastro_login.php" class="btn btn-sm btn-primary ">  Cadastre-se</a>
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
