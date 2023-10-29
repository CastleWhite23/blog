<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- LINKS CSS -->
    <link rel="stylesheet" href="<?php echo BASEURL; ?>public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo BASEURL; ?>public/css/style.css">
    <!-- FONTS AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- GOOGLE FONTS -->
    <title>home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg nav-color ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo BASEURL ?>"><i class="fa-solid fa-house color-white"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3 hover-color">
                        <a class="nav-link" aria-current="page" href="<?php echo BASEURL ?>views/"><i
                                class="fa-solid fa-newspaper "></i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-address-card"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo BASEURL ?>views/layouts/add.php">Criar
                                    post</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo BASEURL ?>views/layouts/myPosts.php">Gerenciar
                                    meus posts</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end mb-2 mb-lg-0 ">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    </form>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo BASEURL ?>views/layouts/login.php"><i
                                class="fa-solid fa-circle-user"></i></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- <nav>
         links, criar, login, cadastrar 
        <ul>
            <li><a href="<?php //echo BASEURL ?>views/layouts/login.php">Entrar</a></li>
        </ul>
    </nav> -->