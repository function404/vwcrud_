<?php 
    include '../../includes/header.php';

    if ($_SESSION['user']['admin'] === 0 || !isset($_SESSION['user'])) {
        header('Location: ../home/homePage.php');
        exit();
    };

    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        session_destroy();
        header('location: ../home/homePage.php');
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
    <?php
        if (isset($_SESSION['user'])) {
            echo '<a href="?logout" class="logout">Logout</a>';
        };
    ?>
</main>


<?php include '../../includes/footer.php'?>