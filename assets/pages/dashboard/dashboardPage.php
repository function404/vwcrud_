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
    <section class="titles">
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

        <p class="dashboard-subtitle">Dashboard</p>
        <div class="line"></div>
    </section>

    <section class="dashboard-container">
        <div class="dashboard-content">
            <div class="card usuarios large">
                <div class="box-icon-count">
                    <i class="fa-solid fa-user"></i>
                    <p class="count">205</p>
                </div>
                <div class="label">Users</div>
            </div>
        
            <div class="container-card">
                <div class="card consumidor small">
                    <div class="box-icon-count">
                        <i class="fa-solid fa-user"></i>
                        <p class="count">159</p>
                    </div>
                    <div class="label">Consumer</div>
                </div>
                <div class="card administrador small">
                    <div class="box-icon-count">
                        <i class="fa-solid fa-user"></i>
                        <p class="count">46</p>
                    </div>
                    <div class="label">Admin</div>
                </div>
            </div>

            <div class="card modelos large">
                <div class="box-icon-count">
                    <i class="fa-solid fa-car"></i>
                    <p class="count">7</p>
                </div>
                <div class="label">Models</div>
            </div>
            
            <div class="container-card">
                <div class="card hatch small">
                    <div class="box-icon-count">
                        <i class="fa-solid fa-car"></i>
                        <p class="count">2</p>
                    </div>
                    <div class="label">Hatch</div>
                </div>
                <div class="card sedan small">
                    <div class="box-icon-count">
                        <i class="fa-solid fa-car"></i>
                        <p class="count">2</p>
                    </div>
                    <div class="label">Sedan</div>
                </div>
                <div class="card suv small">
                    <div class="box-icon-count">
                        <i class="fa-solid fa-car"></i>
                        <p class="count">2</p>
                    </div>
                    <div class="label">SUV</div>
                </div>
                <div class="card pickup small">
                    <div class="box-icon-count">
                        <i class="fa-solid fa-car"></i>
                        <p class="count">2</p>
                    </div>
                    <div class="label">Pickup</div>
                </div>
            </div>
        </div>
    </section>

    <section class="tables-links-container">
        <div class="tables-links-content">
            <a class="tables-links-users" href="#">
                <p>User Table</p>
                <i class="fa-solid fa-chevron-right"></i>
            </a> 
        </div>
        <div class="tables-links-content">
            <a class="tables-links-models" href="#">
                <p>Models Table</p>
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>
    </section>
</main>


<?php include '../../includes/footer.php'?>