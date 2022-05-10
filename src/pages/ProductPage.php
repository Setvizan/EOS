<!DOCTYPE HTML>
<html>

<head>
    <title>EOS - PRODUCTS</title>
    <?php require_once $_SERVER["DOCUMENT_ROOT"]."/src/utils/headerLinks.php";?>
</head>

<body class="no-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <?php include_once $_SERVER["DOCUMENT_ROOT"].'/src/components/Header.php'?>

        <!-- Main -->
        <div class="wrapper style1">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-12-mobile imp-mobile" id="content">
                        <article id="main">
                            <header>
                                <h2><a href="#">Produkte</a></h2>
                                <p>
                                    Gas, Gas und Gas
                                </p>
                            </header>
                            <div class="productList">
                                <?php foreach ($data as $product) : ?>
                                    <div class="card productListProduct" style="width: 18rem;">
                                        <img src="<?= $product->IMAGE_PATH == "/" ? "/src/images/pic03.jpg" : $product->IMAGE_PATH ?> " class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $product->NAME ?></h5>
                                            <p class="card-text"><?= $product->DESCRIPTION ?></p>
                                            <p class="card-text"><small class="text-muted"><?= $product->COST ?></small></p>
                                            <a href="?=<?= $product->ID ?>" class="btn btn-primary">BUY</a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer -->
        <?php include_once $_SERVER["DOCUMENT_ROOT"].'/src/components/Footer.php'?>
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
            flex-direction:row; 
            flex-wrap: wrap; 
            justify-content: space-around;
        }
    </style>
</body>

</html>