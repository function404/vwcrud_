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

    include './listUsersPage.rules.php';
?>

<main>
    <section class="titles">
        <p class="dashboard-title">User List Panel</p>
        <div class="line"></div>
    </section>

    <section class="container-list-users">
        <div class="container-table">
            <table class='users-table'>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($dataListUsers as $user => $value) : ?>
                    <tr>
                        <td><?php echo $value['id']; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo ($value['admin'] == 1 ? 'Yes' : 'No' ); ?></td>
                        <td>
                        <button 
                            type="button" 
                            class="edit-btn" 
                            onclick="openEditModal(
                                '<?php echo $value['id']; ?>', 
                                '<?php echo $value['name']; ?>', 
                                '<?php echo $value['email']; ?>'
                            )">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                            <!-- <button class="edit-btn"><i class="fa-solid fa-pen"></i></button> -->
                            <button onclick="window.location.href = './listUsersPage.rules.php?delete=<?php echo $value['id']; ?>'" class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </section>

    <?php include '../../includes/modalUser.php' ?>
    
    <section class="btn-goback">
        <a href="../dashboard/dashboardPage.php">Go back</a>
    </section>

    <script src="../../javascript/global.js"></script>
</main>

<?php include '../../includes/footer.php'; ?>