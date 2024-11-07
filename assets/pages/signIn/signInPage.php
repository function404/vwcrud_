<!-- /**
    * Sign In
    *
    * This file contains the Sign In page of website.
    *
*/ -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../gfx/volkswagen-logo.png" />
    <title>VW: Volkswagen | Sign In</title>

    <?php
        session_start();

        if (isset($_SESSION['user']['logged'])) {
            header('Location: ../home/homePage.php');
            exit();
        };
    ?>
</head>
<body>
    <section class="logo-top-form">
        <a href="../home/homePage.php">
            <img src="../../gfx/volkswagen-logo.png" alt="LOGO-VW">    
        </a>
    </section>

    <main>
        <section class="container-form">
            <div class="content-form">
                <h1>Sign In</h1>
                <p>Connect to your account!</p>
            </div>
            <div class="content-form">
                <?php if (isset($_GET["error_"])) { ?>
                <div id="error" class="error">
                    <p><?= htmlspecialchars($_GET["message"]) ?></p>
                </div>
                <?php } ?>
                <?php if (isset($_GET["success_"])) { ?>
                <div id="success" class="success">
                    <p><?= htmlspecialchars($_GET["message"]) ?></p>
                </div>
                <?php } ?>
                <form class="form" action="./signInPage.rules.php" method="POST">
                    <div class="info-field-form">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" name="email" id="email" placeholder="Enter your e-mail">
                    </div>
                    <div class="info-field-form">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <a class="toggle-password" type="button" onclick="togglePassword()" >
                            <i id="toggle-icon" class="fa-solid fa-eye"></i>
                        </a>
                    </div>
                    <button class="btn-form" type="submit">Sign In</button>
                    <p>Don't have an account? <a href="../signUp/signUpPage.php">Sign Up</a></p>
                </form>
            </div>
            <div class="btn-goback">
                <a href="../home/homePage.php">Go back home</a>
            </div>
        </section>
    </main>

    <script src='../../javascript/global.js'></script>
</body>
</html>