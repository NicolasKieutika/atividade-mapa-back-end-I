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
        </div>
        <div class="logo">
        <img src="marmitas/logo.jpg" alt="Logo Dona Rita">
        </div>
    </header>

    <main>
        <h1>Faça já seu pedido!!</h1>


        <?php
    $id = $_GET["id"];

        foreach ($Marmitas as $key => $value) {
            if ($value["id"]== $id) {
                
            ?>
            <article><!-- é necessário melhorar o css desta parte-->
				<a href="#"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['nome'];?></h2>
				<h2><?=$value['ingredientes'];?></h2>
                <h2><?=$value['tamanho'];?></h2>
                <h2><?=$value['preço'];?></h2>
                <br>
                <div class="botao">
                <input type="button" value="Comprar">
                </div>
			</article>
			<?php
        }
                    }
			?>

    </main>
    <br><br><br>
    <br><br><br>
    <h3>Telefone para contato:  (**) *****-****<br>
Endereço:  **Infomação sobre o Endereço**<br>
Facebook:  **facebook**<br>
Instagram:  **instagram**<br>
Twitter:  **twitter**<br>
</h3>

    <br>    <br>  <br>  <br>  <br>
    <footer>
<div class="fim">
Politica de Privacidade <br>
Termos de Uso<br>
Aviso Legal
</div>
<br>
<hr>
NICOLAS JUAN KIEUTIKA --- RA 210847685
</footer>


</body>


</html>