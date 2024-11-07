<?php 
    include '../../includes/header.php';

    session_start();

    if ($_SESSION['user']['admin'] === 0) {
        header('Location: ../home/homePage.php');
        exit();
    };

    if(isset($_GET['logout'])){
        header('location: ../home/homePage.php');
        unset($_SESSION['user']);
        session_destroy();
    };
?>

<main>
    <p class="dashboard-title">Admin Panel</p>
    <div class="line"></div>

    <!-- <div class="dashboard-container">
        <div class="dashboard-content-container">
            <div class="dashboard-content">
                <div class="dashboard-content">
                    <i class="fa-solid fa-user"></i>
                    <p>204</p>
                </div>
                <p>users</p>
            </div>
            <div class="dashboard-content">
                <div class="dashboard-content-box">
                    <i class="fa-solid fa-user"></i>
                    <p>205</p>
                </div>
                <p>Consumidor</p>
                <div class="dashboard-content-box">
                    <i class="fa-solid fa-user"></i>
                    <p>205</p>
                </div>
                <p>Admin</p>
            </div>
        </div>
        <div class="dashboard-content-container">
            <div class="dashboard-content">
                <div class="dashboard-content">
                    <i class="fa-solid fa-user"></i>
                    <p>204</p>
                </div>
                <p>product</p>
            </div>
            <div class="dashboard-content">
                <div class="dashboard-content-box">
                    <i class="fa-solid fa-car"></i>
                    <p>hatch</p>
                    <p>205</p>
                </div>
                <div class="dashboard-content-box">
                    <i class="fa-solid fa-car"></i>
                    <p>205</p>
                    <p>sedan</p>
                </div>
            </div>
        </div>
    </div> -->
    <?php if(isset($_SESSION['user'])): ?>
        <a href="?logout">Deslogar</a>
    <?php endif; ?>
</main>


<?php include '../../includes/footer.php'?>