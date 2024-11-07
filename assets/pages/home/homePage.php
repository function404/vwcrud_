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
        <section class="container-title-home">
            <article class="content-title-home flex-start">
                <div class="info-title-home">
                    <p class="title-home">Hello, <?php echo $_SESSION['user']['name'] ?? 'Usuario' ?>!</p>
                    <p class="subtitle-home">Welcome!</p>
                </div>
            </article>
            <article class="content-title-home flex-end">
                <a class="links-models-home" href="../models/modelsPage.php">
                    <p>
                        Conhecer mais modelos
                    </p>
                </a>
            </article>
        </section>
        <div class="line"></div>

        <h1>Home page</h1>
        <p>This is <b>Home</b> page!</p>
    </main>

<?php include '../../includes/footer.php'?>