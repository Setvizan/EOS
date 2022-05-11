<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>EOS - SHOPPING CART</title>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/src/utils/headerLinks.php"; ?>
</head>

<body class="no-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/components/Header.php' ?>

        <!-- Main -->
        <div class="wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-12-mobile imp-mobile" id="content">
                        <?php foreach ($data as $product) : ?>
                            <div class="card productListProduct" style="width: 18rem;">
                                <img src="<?= $product->IMAGE_PATH == "/" ? "/src/images/pic03.jpg" : $product->IMAGE_PATH ?> " class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $product->NAME ?></h5>
                                    <p class="card-text"><?= $product->DESCRIPTION ?></p>
                                    <p class="card-text"><small class="text-muted"><?= $product->COST ?></small></p>
                                    <a href="/src/site/ShoppingCartController.php?toCart=<?= $product->ID ?>" class="btn btn-primary">BUY</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <hr />
                <div>
                    CHECKOUT
                </div>
            </div>

        </div>

        <!-- Footer -->
        <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/components/Footer.php' ?>
    </div>

    <!-- Scripts -->
    <script src="/src/scripts/jquery.min.js"></script>
    <script src="/src/scripts/jquery.dropotron.min.js"></script>
    <script src="/src/scripts/jquery.scrolly.min.js"></script>
    <script src="/src/scripts/jquery.scrollex.min.js"></script>
    <script src="/src/scripts/browser.min.js"></script>
    <script src="/src/scripts/breakpoints.min.js"></script>
    <script src="/src/scripts/util.js"></script>
    <script src="/src/scripts/main.js"></script>

</body>

</html>