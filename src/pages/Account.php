<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>EOS - ACCOUNT</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/src/styles/all.css" />
    <noscript>
        <link rel="stylesheet" href="/src/styles/noscript.css" />
    </noscript>
</head>

<body class="left-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/components/Header.php' ?>

        <!-- Main -->
        <div class="wrapper style1">

            <?php if (isset($_SESSION["userId"]) == false) : ?>
                <div class="login-form">
                    <form action="/src/site/AccountController.php" method="POST">
                        <div class="mb-3">
                            <input type="email" class="form-control login-form-input" id="email" name="email" placeholder="email" required />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control login-form-input" id="password" name="password" placeholder="password" required />
                        </div>
                        <input type="hidden" name="type" value="login" />
                        <button type="submit" class="btn btn-primary login-form-button">GO</button>

                        <?php if (isset($data["ERROR"])) : ?>
                            <div class="errorMessage"><?= $data["ERROR"] ?></div>
                        <?php endif; ?>

                    </form>
                </div>
            <?php elseif (isset($_SESSION["userId"]) == true) : ?>
                <div> u damn potato</div>
            <?php endif; ?>
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
        .login-form {
            min-width: 420px;
            max-width: 50%;
            margin: 0 auto;
        }

        .login-form-input {
            margin: 1rem;
        }

        .login-form-button {
            display: block;
            margin: 1rem auto;
        }

        .errorMessage {
            color: red;
            margin: 0 auto;
            display: block;
            text-align: center;
        }
    </style>
</body>

</html>