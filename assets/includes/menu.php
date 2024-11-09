<!-- /**
    * Menu
    *
    * This file contains the menu of the website.
    *
*/ -->

<?php
    session_start();

    if (isset($_GET['logout'])) {
        unset($_SESSION['user']);
        session_destroy();
        header('Location: ../home/homePage.php');
    };
?>

<div class="header-container">
    <div class="logo-header">
        <a href="../home/homePage.php">
            <image src="../../gfx/volkswagen-logoW.png" alt="White logo">
        </a>
    </div>
    <div class="menu-header">
        <div class="nav-header">
            <a href="../home/homePage.php">
                <i class="fa-solid fa-house"></i>
                Home
            </a>
            <?php
                if (isset($_SESSION['user']['logged']) === true) {
                    echo '<a href="?logout"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>';
                } else {
                    echo '<a href="../signIn/signInPage.php"><i class="fa-solid fa-user-large"></i>Sign In</a>';
                };

                if (isset($_SESSION['user']) && $_SESSION['user']['admin'] === 1) {
                    echo '<a href="../dashboard/dashboardPage.php"><i class="fa-solid fa-gear"></i>Dashboard</a>';
                };
            ?>
        </div>
        <div class="side-bar-header">
            <input id="burger-checkbox" type="checkbox" />
            <label class="burger" for="burger-checkbox">
                <span></span>
                <span></span>
                <span></span>
            </label>
        </div>
    </div>
</div>
<div class="bottom-header">
    <div class="line-before"></div>
        <div class="logo-reduced">
            <img src="../../gfx/volkswagen-logoW.png" alt="White logo">
        </div>
    <div class="line-after"></div>
</div>

<script src="../../javascript/global.js"></script>