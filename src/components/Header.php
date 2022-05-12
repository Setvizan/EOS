<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/src/repository/ProductRepository.php";
$rep = new ProductRepository();
$pdata = $rep->findAll();
?>

<div id="header">

    <!-- Inner -->
    <div class="inner">
        <header>
            <h1><a href="/index.php" id="logo">EOS</a></h1>
        </header>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="/index.php">STARTSEITE</a></li>
            <li><a href="/src/site/ProductController.php">PRODUKTE</a>
                <ul>
                    <?php foreach ($pdata as $product): ?>
                        <li><a href="<?= "/src/site/ProductController.php?pid=".$product->ID ?>"><?= $product->NAME ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="/src/pages/AboutUs.php">ÜBER UNS</a></li>
            <li><a href="/src/site/ShoppingCartController.php" class="fa-solid fa-cart-shopping"><span class="label">WARENKORB</span></a></li>
            <li><a href="/src/site/AccountController.php">MEIN KONTO</a></li> <!-- this will be checked with php when login is available-->
        </ul>
    </nav>
</div>