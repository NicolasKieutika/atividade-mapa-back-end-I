<?php
include("dados.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Mapa</title>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

    <!--  Menu de navegação  -->
    <header>

        <nav>
            <ul>
                <li><a href="#" title="Home" alt="Home"> Home </a></li>
                <li><a href="#" title="Quem Somos" alt="Quem Somos"> Quem Somos </a></li>
                <li><a href="#" title="Contato" alt="Contato"> Contato </a></li>
            </ul>
        </nav>
        <div class="logo">
        <img src="marmitas/logo.jpg" alt="Logo Dona Rita">
        </div>
    </header>

    <main>
        <br>
        <h1>Venha conhecer nossas deliciosas marmitas!</h1><br><br><br>


        <?php
        foreach ($Marmitas as $key => $value) {
        ?>
            <article>
                <a href="pagina2.php?id=<?= $value['id']; ?>"><img src=<?= $value['imagem']; ?>></a>
                <h2><?= $value['nome']; ?></h2>
                <br>
                <div class="botao">
                <input type="button" value="Ver Detalhes">
                </div>
            </article>
        <?php
        }
        ?>

    </main>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
<div class="fim">
Politica de Privacidade <br>
Termos de Uso<br>
Aviso Legal
</div>
<br>
  obs:ja de antemao gostaria de me desculpar pela qualidade do trabalho, tenho tido dificuldades nesse assunto
nas ultimas disciplinas que envolvem html, css, java e agora o php, mas tenho grande curiosidade em aprender mais 
e aperfeiçoar-me neste assunto, irei caprichar mais na proxima!
<hr>
NICOLAS JUAN KIEUTIKA --- RA 210847685
</footer>
</body>


</html>