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

    include './listModelsPage.rules.php';
?>

<main>
    <section class="titles">
        <p class="dashboard-title">Models List Panel</p>
        <div class="line"></div>
    </section>

    <section class="container-list-users">

        <div class="container-table">
            <table class='users-table models'>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Color</th>
                    <th>Photo</th>
                    <th>Availability</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($dataListModels as $model => $value): ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><?php echo $value['type'] ?></td>
                        <td><?php echo $value['color'] ?></td>
                        <td><img src="data:image/jpeg;base64,<?php echo $value['img'] ?>" alt="dsadsad"></td> 
                        <td><?php echo $value['availability'] ?></td>
                        <td>
                            <button class="edit-btn"><i class="fa-solid fa-pen"></i></button>
                            <button onclick="window.location.href = './listModelsPage.rules.php?delete=<?php echo $value['id']; ?>'" class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>
    
    <section class="btn-goback">
        <a href="../dashboard/dashboardPage.php">Go back</a>
    </section>
</main>

<?php include '../../includes/footer.php'; ?>