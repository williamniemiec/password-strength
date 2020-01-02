<?php require 'config.php' ?>
<!doctype html>
<html>
    <head>
        <title>Classificados</title>
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
        <link rel='stylesheet' href='assets/css/bootstrap.min.css' />
        <link rel='stylesheet' href='assets/css/style.css' />
        <script src='assets/js/jquery-3.4.1.min.js'></script>
        <script src='assets/js/bootstrap.bundle.min.js'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class='navbar navbar-expand-lg bg-dark navbar-dark navbar-fixed-top'>
            <div class='container-fluid'>
                <a class='navbar-brand' href='./'>Classificados</a>
                <button class='navbar-toggler' data-toggle='collapse' data-target='#menu'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div id='menu' class='navbar-collapse collapse'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'><a href='./' class='nav-link'>Home</a></li>
                        <li class='nav-item'><a href='./' class='nav-link'>Sobre</a></li>
                    </ul>
                </div>
                <ul class='nav navbar-nav navbar-right'>
                    <?php if(isset($_SESSION['userID']) && !empty($_SESSION['userID'])): ?>
                        <li class='navbar-text text-info' style='margin-right:20px;'>
                            <?php
                                require 'classes/usuario.class.php';
                                $u = new Usuario();
                                $name = $u->getName($_SESSION['userID']);
                                echo $name;
                            ?>
                        </li>
                        <li class='nav-item'><a href='anuncios.php' class='nav-link'>Meus anúncios</a></li>
                        <li class='nav-item'><a href='logout.php' class='nav-link'>Sair</a></li>
                    <?php else: ?>
                        <li class='nav-item'><a href='cadastro.php' class='nav-link'>Cadastrar</a></li>
                        <li class='nav-item'><a href='login.php' class='nav-link'>Login</a></li>
                    <?php endif ?>
                </div>
            </div>
        </nav>