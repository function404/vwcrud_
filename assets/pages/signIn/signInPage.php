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
                <h1>Sign In</h1>
                <p>Connect to your account!</p>
            </div>
            <div class="content-form">
                <form class="form" action="" method="POST">
                    <div class="info-field-form">
                        <i class="fa-solid fa-user"></i>
                        <input type="email" name="email" id="email" placeholder="Your e-mail" required>
                    </div>
                    <div class="info-field-form">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Your password" required>
                    </div>
                    <button class="btn-form" type="submit">Sign In</button>
                    <p>Don't have an account? <a href="../signUp/signUpPage.php">Sign Up</a></p>
                </form>
            </div>
        </section>
    </main>
</body>
</html>