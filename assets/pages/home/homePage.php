<!-- /**
    * Home page
    *
    * This file contains the home page of website.
    *
*/ -->

<?php
    include '../../includes/header.php';    

    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        session_destroy();
        header('Location: ../home/homePage.php');
    };
?>

<main>

    <h1>Welcome, <?php echo $_SESSION['user']['name'] ?? 'Usuario' ?>!</h1>
    <h1>Home page</h1>
    <h4>Hello World!</h4>
    <p>This is <b>Home</b> page!</p>
</main>

<?php include '../../includes/footer.php'?>