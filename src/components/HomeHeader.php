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
            <hr />
            <p>Helium and much more</p>
        </header>
        <footer>
            <a href="#banner" class="button circled scrolly">Start</a>
        </footer>
    </div>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="/index.php">Home</a></li>
            <li><a href="/src/site/ProductController.php">Products</a>
                <ul>
                    <?php foreach ($pdata as $product): ?>
                        <li><a href="<?= "#".$product->ID ?>"><?= $product->NAME ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li><a href="/src/pages/AboutUs.php">About Us</a></li>
            <li><a href="/src/site/ShoppingCartController.php" class="fa-solid fa-cart-shopping"><span class="label">Shopping Cart</span></a></li>
            <li><a href="/src/site/AccountController.php">My Account</a></li> <!-- this will be checked with php when login is available-->
        </ul>
    </nav>
</div>