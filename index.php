<?php
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/css.css">
    <link href="assets/javaScript/js.js" defer>
    <title>Site de jogos</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="img/JciNAinB_400x400-removebg-preview.png">
        </div>
        <input type="checkbox" id="menu-toggle" />
            <label for="menu-toggle" class="menu-icon">&#9776;</label>

    <ul class="menu">
    <li><a href="" id="nav1">Home</a></li>
    <li><a href="" id="nav2">Sobre nós</a></li>
    <li><a href="" id="nav3">Produtos</a></li>
    <li><a href="" id="nav4">Contate-nos</a></li>
    </ul>
    </nav>

    <div class="background">
        <div class="content">
            <h1 id="h1-responsable" class="gradient-text">Aqui se encontra os melhores jogos com os melhores preços</h1>
            <h2>Venha conferir!</h2>
            <button class="btn-1">Clique aqui!</button>
        </div>
    </div>
    <div class="background-2">
    <h3>Aqui estão os jogos em destaque:</h3>
    <div class="content-2">
        <div class="card-container">
            <div class="card">
                <div class="card-image">
                    <img src="assets/img/robby-johnson-duality-light-1080-logo.jpg" alt="Jogo 1">
                </div>
                <div class="card-content">
                    <h4>The last of us part II</h4>
                    <p>The Last of Us Part II (TLOU2) é um jogo de ação e aventura desenvolvido pela Naughty Dog e lançado em 2020. Com uma narrativa emocionante e envolvente, o jogo apresenta uma jornada intensa e visceral da personagem Ellie em um mundo pós-apocalíptico repleto de desafios. Com gráficos impressionantes e mecânicas de jogo cativantes, TLOU2 oferece uma experiência inesquecível aos jogadores.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="assets/img/gta-5-michael-2560x1440.jpg" alt="Jogo 3">
                </div>
                <div id="card-2" class="card-content">
                    <h4>GTA 5</h4>
                    <p>
Grand Theft Auto V (GTA V) é um jogo de ação e aventura em mundo aberto desenvolvido pela Rockstar Games. Ambientado na cidade fictícia de Los Santos, os jogadores assumem o papel de três protagonistas, cada um com suas próprias histórias interligadas. Com uma jogabilidade rica e diversas atividades, como missões, roubo de veículos e exploração da cidade.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-image">
                    <img src="assets/img/3df8ebd3956674204d2ab7437947a9b2.jpeg" alt="Jogo 2">
                </div>
                <div class="card-content">
                    <h4>God Of War Ragnarok</h4>
                    <p>
God of War Ragnarok é um aguardado jogo de ação e aventura desenvolvido pela Santa Monica Studio. Continuando a história do aclamado God of War de 2018, o jogo leva os jogadores a uma jornada épica com Kratos e seu filho Atreus, enfrentando desafios mitológicos e batalhando contra deuses nórdicos. Com gráficos impressionantes e uma narrativa envolvente.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>