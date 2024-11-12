<?php 
   include '../../includes/header.php';

   if (!isset($_SESSION['user']) || $_SESSION['user']['admin'] === 0) {
      header('Location: ../home/homePage.php');
      exit();
   };

   if (isset($_GET['logout'])) {
      unset($_SESSION['user']);
      session_destroy();
      header('Location: ../home/homePage.php');
      exit();
   };

?>

<main>
    <section class="titles">
        <p class="dashboard-title">Models List Panel</p>
        <div class="line"></div>
    </section>

    <section class="container-list-users">
        <?php
            include './listModelsPage.rules.php';
        ?>
    </section>
    
    <section class="btn-goback">
        <a href="../home/homePage.php">Go back home</a>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>