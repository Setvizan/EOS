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
                                <h2><a href="#">Einkaufswagen</a></h2>
                                <p>
                                    Hier sind deine Einkäufe.
                                </p>
                            </header>
                            <?php 
                                include_once $_SERVER["DOCUMENT_ROOT"].'/src/controller/ProductController.php';
                                $rep = new ProductController();
                                $rep->products();
                            ?>
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

</body>

</html>