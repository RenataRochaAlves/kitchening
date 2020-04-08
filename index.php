<?php

$produtos = [
	[
		"nome" => "Lagosta",
		"descricao" => "Lagosta da mar cáspi, cozida no vapor de vacas suecas",
		"img" => "images/lagosta.jpg"
	],[
		"nome" => "Camarão na moranga",
		"descricao" => "Texto descritivo do prato camarão na moranga",
		"img" => "images/camarao.jpg"
	],[
		"nome" => "Feijoada de Frutos do Mar",
		"descricao" => "Ninguém gosta desse prato... mas o chef insiste",
		"img" => "images/feijoada.jpg"
	],[
		"nome" => "Cuzcuz",
		"descricao" => "Texto que descreve de uma forma insana o que é simples: um Cuzcuz",
		"img" => "images/cuzcuz.jpg"
	]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchening</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div id="logo">
        <img src="images/logo.jpg" alt="Kitchening">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Portfólio</a></li>
                <li><a href="#">Lojas</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="banner">
            <p>banner</p>
        </section>

        <section id="produtos">
            <?php 
            for($i=0; $i < count($produtos); $i++) { ?>
                <article>
                    <img src="<?= $produtos[$i]["img"]?>" alt="<?= $produtos[$i]["nome"]?>">
                    <h3><?= $produtos[$i]["nome"]?></h3>
                    <p><?= $produtos[$i]["descricao"]?></p>
                    <button type="button">ver mais</button>
                </article>
            <?php } ?>

        </section>

        </main>
    <footer>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Quem somos</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Portfólio</a></li>
                <li><a href="#">Lojas</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>