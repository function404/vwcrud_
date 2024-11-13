<?php 
    include '../../includes/header.php';    

    include './registerPage.rules.php';
?>

<main>
    <section class="titles">
        <p class="dashboard-title">Register</p>
        <div class="line"></div>
    </section>

    <section class="form-toggle">
        <button class="modelo active">Vehicles</button>
        <button class="chave">Keys</button>
    </section>

    <div style="width: 100%;">
        <section id="register1" style="display: block;" class="container-register active">
            <div class="content-register">
                <h2>Register Vehicle</h2>
                <?php if (isset($_GET["error_"]) && isset($_GET["error_models"])) { ?>
                <div id="error" class="error">
                    <p><?= htmlspecialchars($_GET["message"]) ?></p>
                </div>
                <?php } ?>
                <?php if (isset($_GET["success_"]) && isset($_GET["error_models"])) { ?>
                <div id="success" class="success">
                    <p><?= htmlspecialchars($_GET["message"]) ?></p>
                </div>
                <?php } ?>
                <form action="./registerPage.rules.php?type=models" method="POST" enctype="multipart/form-data">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enter name">

                    <label for="type">Type:</label>
                    <select name="type" id="type">
                        <option value="" disabled selected>Select</option>
                        <option value="SUV">SUV</option>
                        <option value="Hatch">Hatch</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Pickup">Pickup</option>
                    </select>

                    <label for="color">Color:</label>
                    <input type="color" name="color" id="color" placeholder="#000000">

                    <label>Image:</label>
                    <input type="file" name="image" id="image">

                    <div class="buttons">
                        <button type="submit" class="cadastrar">Register</button>
                    </div>
                </form>
            </div>
        </section>
    
        <section id="register2" style="display: none;" class="container-register">
            <div class="content-register">
                <h2>Register Key</h2>
                <?php if (isset($_GET["error_"]) && isset($_GET["error_key"])) { ?>
                <div id="error" class="error">
                    <p><?= htmlspecialchars($_GET["message"]) ?></p>
                </div>
                <?php } ?>
                <?php if (isset($_GET["success_"]) && isset($_GET["error_key"])) { ?>
                <div id="success" class="success">
                    <p><?= htmlspecialchars($_GET["message"]) ?></p>
                </div>
                <?php } ?>
                <form action="./registerPage.rules.php?type=keys" method="POST">
                    <label for="number">Key:</label>
                    <input type="number" name="number" id="number" placeholder="Enter key">

                    <label for="number2">Repeat Key:</label>
                    <input type="number" name="number2" id="number2" placeholder="Enter key">
                    <div class="buttons">
                        <button type="submit" class="cadastrar">Register</button>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <section class="btn-goback">
        <a href="../dashboard/dashboardPage.php">Go back</a>
    </section>

    <script src="../../javascript/global.js"></script>
</main>

<?php include '../../includes/footer.php'; ?>