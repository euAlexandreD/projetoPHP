<?php 
    include_once("helpers/url.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Conexão com estilos do projeto -->
    <link rel="stylesheet" href=" <?= $BASE_URL ?>/styles/styles.css">
    <!-- Fonte do projeto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
    <title>Código dus guri</title>
</head>

<body>
    <header>

        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Logo">
        </a>

        <nav id="navbar">
            <ul>
                <li>
                    <a href="<?= $BASE_URL ?>" class="nav-link">Home</a>
                    <a href="<?= $BASE_URL ?>/contato.php" class="nav-link">Contato</a>
                    <a href="" class="nav-link">Artigos</a>
                    <a href="" class="nav-link">Categorias</a>
                </li>
            </ul>
        </nav>
    </header>