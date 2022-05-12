<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>EOS - REGISTRATION</title>
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . "/src/utils/headerLinks.php"; ?>
</head>

<body class="left-sidebar is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <?php include_once $_SERVER["DOCUMENT_ROOT"] . '/src/components/Header.php' ?>

        <!-- Main -->
        <div class="wrapper style1">

            <div class="register-form">
                <form action="/src/site/AccountController.php" method="POST">
                    <div class="mb-3">
                        <input type="email" class="form-control register-form-input" id="email" name="email" placeholder="email" required />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control register-form-input" id="firstname" name="firstname" placeholder="firstname" required />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control register-form-input" id="lastname" name="lastname" placeholder="lastname" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control register-form-input" id="password" name="password" placeholder="password" required />
                    </div>
                    <input type="hidden" name="type" value="register" />
                    <button type="submit" class="btn btn-primary register-form-button">REGISTRIEREN</button>
                    <?php if (isset($data["ERROR"])) : ?>
                        <div class="errorMessage"><?= $data["ERROR"] ?></div>
                    <?php endif; ?>
                </form>
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
        .register-form {
            min-width: 420px;
            max-width: 50%;
            margin: 0 auto;
        }

        .register-form-input {
            margin: 1rem;
        }

        .register-form-button {
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