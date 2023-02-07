<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Template de login, usando Bootstrap.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="bordasite">
        <aside id="header">
            <nav class="nav nav-bar">
                <ul class="logesquerda">
                    <h1 class="titulo">Welcome Back!</h1>
                    <h5 class="titulo">To keep connected with us please login witg your personal info</h5>
                    <a class="btn btn-lg text-center btn-block m-3" aria-current="page">
                        SING IN</a>

                </ul>
            </nav>

            <div>

                <main id="main">
                    <section id="inicio" class="row text-center m-0 p-0">
                        <form class="form-signin">
                            <h1 class="lgg h3 mb-3 text-center font-weight-normal">Faça login</h1>
                            <div class="inputs">
                                <div class="inputWithIcon">
                                    <input type="text" id="nome " placeholder="Nome" required autofocus>
                                    <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
                                </div>

                                <div class="inputWithIcon">
                                    <input type="text" id="email" placeholder=" Email" required autofocus>
                                    <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                                </div>

                                <div class="inputWithIcon">
                                    <input type="text" id="senha" placeholder="Senha" required autofocus>
                                    <i class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                </div>

                                <button class="btn btn-lg text-center btn-primary btn-block m-3"
                                    type="submit">Login</button>
                            </div>
                        </form>
                    </section>
                </main>
            </div>
        </aside>

        <footer id="footer">
            <div class="copyright container">
                <div class="text-center">
                    &copy; Copyright <strong>Junior Rodrigues</strong>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="static/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/script.js"></script>

</body>

</html>