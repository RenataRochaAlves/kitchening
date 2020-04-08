<?php 

include("pratos.php");
include("menu.php");

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
                <?php foreach($menu as $item) { ?>
                    <li><a href="#"><?= $item ?></a></li>
                <?php } ?>
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
                <?php foreach($menu as $item) { ?>
                    <li><a href="#"><?= $item ?></a></li>
                <?php } ?>
            </ul>
        </nav>
    </footer>
</body>
</html>