<!DOCTYPE HTML>
<html>

<head>
    <title>EOS - PRODUKTE</title>
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
                        <?php if (isset($_GET["pid"])) : ?>
                            <div>
                                <a href="/src/site/ProductController.php" class="btn btn-primary mt-3 mb-3"> < ZURÜCK</a>
                            </div>
                            <?php foreach ($data as $product) : ?>
                                <section id="main" class="card container">
                                    <header>
                                        <h2><?php echo $product->NAME ?></h2>
                                    </header>
                                    <div class="row">
                                            <div class="col-12">
                                                <section class="box">
                                                    <div style="display: flex; width: 100%; justify-content: space-between;">
                                                        <div style="width: 20%;">
                                                            <span class="image fit">
                                                                <img src="<?= $product->IMAGE_PATH == "/" ? "/src/images/pic03.jpg" : $product->IMAGE_PATH ?> " alt="...">
                                                            </span>
                                                        </div>
                                                        <div style="width: 75%">
                                                            <p><small><?= $product->LONG_DESCRIPTION ?></small></p>
                                                            <p><small class="text-muted"><?= $product->COST ?></small></p>
                                                            <a href="/src/site/ShoppingCartController.php?toCart=<?= $product->ID ?>" class="btn btn-primary">BUY</a>
                                                        </div>
                                                    </div>
                                                    <div style="width: 100%; display: flex; justify-content: flex-end">
                                                        <h3><?= $product->COST ?></h3>
                                                    </div>

                                                </section>
                                            </div>
                                        </div>
                                </section>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <article id="main">
                                <header>
                                    <h2><a href="/src/site/ProductController.php">Produkte</a></h2>
                                    <p>
                                        Gas, Gas und Gas
                                    </p>
                                </header>
                                <div class="productList">
                                    <?php foreach ($data as $product) : ?>
                                        <div class="card productListProduct" style="width: 18rem;">
                                            <img src="<?= $product->IMAGE_PATH == "/" ? "/src/images/pic03.jpg" : $product->IMAGE_PATH ?> " class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="/src/site/ProductController.php?pid=<?= $product->ID ?>"><?= $product->NAME ?></a></h5>
                                                <p class="card-text"><?= $product->DESCRIPTION ?></p>
                                                <p class="card-text"><small class="text-muted"><?= $product->COST ?></small></p>
                                                <a href="/src/site/ShoppingCartController.php?toCart=<?= $product->ID ?>" class="btn btn-primary">BUY</a>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </article>
                        <?php endif; ?>
                    </div>
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
    <style>
        .productList {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    </style>
</body>

</html>