<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Template de login, usando Bootstrap.</title>
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />

</head>

<body>


    <div>
        <div class="painel container-lg">
            <div id="arredondamento">
                <aside id="header">
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
                                            <i id="lock" class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>
                                        <button class="btn btn-success  btn-lg text-center btn-block m-3"
                                            type="submit">SING
                                            UP</button>
                                    </div>
                                </form>
                            </section>
                        </main>
                    </div>
                    <div class="logesquerda">
                        <ul id="inicio">
                            <h1 class="titulo">Welcome Back!</h1>
                            <h5 class="titulo">To keep connected with us </br> please login with your personal info</h5>
                            <a class="btn btn-lg text-center btn-block m-3" aria-current="page">
                                SING IN</a>
                        </ul>
                    </div>

                </aside>
            </div>
        </div>
    </div>


    <footer id="footer">
        <div class="copyright container">
            <div class="text-center">
                &copy; Copyright <strong>Junior Rodrigues</strong>
            </div>
        </div>
    </footer>
    </div>


</body>

</html>