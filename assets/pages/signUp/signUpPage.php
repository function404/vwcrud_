<!-- /**
    * Sign Up
    *
    * This file contains the Sign Up page of website.
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
    <title>VW: Volkswagen | Sign Up</title>
</head>
<body>
    <header class="logo-top-form">
        <a href="../home/homePage.php">
            <img src="../../gfx/volkswagen-logo.png" alt="LOGO-VW">    
        </a>
    </header>

    <main>
        <section class="container-form">
            <div class="content-form">
                <h1>Sign Up</h1>
                <p>Create an account at Volkswagen!</p>
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
                <form class="form" action="./signUpPage.rules.php" method="POST">
                    <div class="info-field-form">
                        <i class="fa-solid fa-user"></i>
                        <input type="name" name="name" onclick="toggleInputs()" id="name" placeholder="Enter your name" required>
                    </div>
                    <div class="info-field-form">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" id="email" onclick="toggleInputs()" placeholder="Enter your e-mail" required>
                    </div>
                    <div class="info-field-form">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" onclick="toggleInputs()" id="password" placeholder="Enter your password" required>
                        <a class="toggle-password" type="button" onclick="togglePassword()" >
                            <i id="toggle-icon" class="fa-solid fa-eye-slash"></i>
                        </a>
                    </div>
                    <div class="info-field-form adm">
                        <input type="checkbox" name="adm" id="adm" onclick="toggleAdmin()">
                        <label for="adm">I am administrator</label>
                    </div>
                    <button class="btn-form" type="submit">Sign Up</button>
                    <p>Have an account? <a href="../signIn/signInPage.php">Sign In</a></p>
                </form>
            </div>
            <div class="btn-goback">
                <a href="../home/homePage.php">Go back home</a>
            </div>
        </section>
    </main>

    <script src="../../javascript/global.js"></script>
</body>
</html>