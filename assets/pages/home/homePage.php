<!-- /**
    * Home page
    *
    * This file contains the home page of website.
    *
*/ -->

<?php
    include '../../includes/header.php';

    session_start();

    if(isset($_GET['logout'])){
        header('location: ./homePage.php');
        unset($_SESSION['user']);
        session_destroy();
    };
?>

<main>

    <h1>Welcome, <?php echo $_SESSION['user']['name'] ?? 'Usuario' ?>!</h1>
    <h1>Home page</h1>
    <h4>Hello World!</h4>
    <p>This is <b>Home</b> page!</p>
    <?php if(isset($_SESSION['user'])): ?>
        <a href="?logout">Deslogar</a>
    <?php endif; ?>
</main>

<?php include '../../includes/footer.php'?>