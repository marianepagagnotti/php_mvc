<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "View/includes/css_config.php" ?>
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Projeto MVC</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav col-3">
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pessoa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/pessoa/form">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/pessoa">Listar</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/produto/form">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/produto">Listar</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Funcionario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/funcionario/form">Cadastrar</a></li>
                            <li><a class="dropdown-item" href="/funcionario">Listar</a></li>

                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuario
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/usuario/trocar">Trocar Senha</a></li>
                            <li><a class="dropdown-item" href="/usuario">Listar</a></li>

                        </ul>
                    </li>
                    <div class="col-12"></div>
                    <div class="col-12"></div>
                    <div class="col-12"></div>

                    <li class="nav-item ">
                        <a class="btn btn-danger" href="/logout">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container">

    </main>
    <footer>

    </footer>
    <?php include "View/includes/js_config.php" ?>
</body>

</html>