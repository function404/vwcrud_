<!-- /**
    * Dashboard Page
    *
    * This file contains the Dashboard page of website.
    *
*/ -->
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

    include './dashboardPages.rules.php';
?>

    <main>
        <section class="titles">
            <p class="dashboard-title">Admin Panel</p>
            <div class="line"></div>
            <p class="dashboard-subtitle">Dashboard</p>
            <p class="dashboard-username">Welcome, <?php echo $_SESSION['user']['name'] ?? 'Administrator'; ?></p>
            <div class="line"></div>
        </section>

        <section class="dashboard-container">
            <div class="dashboard-content">
                
                <div class='card usuarios large'>
                    <div class='box-icon-count'>
                        <i class='fa-solid fa-user'></i>
                        <p class='count'><?php echo $allusers; ?></p>
                    </div>
                    <div class='label'>Users</div>
                </div>

                <div class="container-card">
                    <div class="card consumidor small">
                        <div class="box-icon-count">
                            <i class="fa-solid fa-user"></i>
                            <p class="count"><?php echo $consumers; ?></p>
                        </div>
                        <div class="label">Consumer</div>
                    </div>
                    <div class="card administrador small">
                        <div class="box-icon-count">
                            <i class="fa-solid fa-user"></i>
                            <p class="count"><?php echo $admins; ?></p>
                        </div>
                        <div class="label">Admin</div>
                    </div>
                </div>

                <div class="card modelos large">
                    <div class="box-icon-count">
                        <i class="fa-solid fa-car"></i>
                        <p class="count"><?php echo $allmodels; ?></p>
                    </div>
                    <div class="label">Models</div>
                </div>
                
                <div class="container-card">
                    <div class="card hatch small">
                        <div class="box-icon-count">
                            <i class="fa-solid fa-car"></i>
                            <p class="count"><?php echo $hatch; ?></p>
                        </div>
                        <div class="label">Hatch</div>
                    </div>
                    <div class="card sedan small">
                        <div class="box-icon-count">
                            <i class="fa-solid fa-car"></i>
                            <p class="count"><?php echo $sedan; ?></p>
                        </div>
                        <div class="label">Sedan</div>
                    </div>
                    <div class="card suv small">
                        <div class="box-icon-count">
                            <i class="fa-solid fa-car"></i>
                            <p class="count"><?php echo $suv; ?></p>
                        </div>
                        <div class="label">SUV</div>
                    </div>
                    <div class="card pickup small">
                        <div class="box-icon-count">
                            <i class="fa-solid fa-car"></i>
                            <p class="count"><?php echo $pickup; ?></p>
                        </div>
                        <div class="label">Pickup</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tables-links-container">
            <div class="tables-links-content">
                <a class="tables-links-users" href="../listUsers/listUsersPage.php">
                    <p>User Table</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </a> 
            </div>
            <div class="tables-links-content">
                <a class="tables-links-models" href="../listModels/listModelsPage.php">
                    <p>Models Table</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
            <div class="tables-links-content">
                <a class="tables-links-register" href="../register/registerPage.php">
                    <p>Register Page</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </a> 
            </div>
        </section>
    </main>

<?php include '../../includes/footer.php'; ?>
