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

    include "./homePage.rules.php";
?>

<main>
    <section class="container-title-home">
        <article class="content-title-home flex-start">
            <div class="info-title-home">
                <p class="title-home">Hello, <?php echo $_SESSION['user']['name'] ?? 'Everyone' ?>!</p>
                <p class="subtitle-home">Welcome!</p>
            </div>
        </article>
        <article class="content-title-home flex-end">
            <a class="links-models-home" href="../models/modelsPage.php">
                <p>Discover more models</p>
            </a>
        </article>
    </section>
    <div class="line"></div>

    <h1 style="font-size: 40px;">Main models</h1>
    <p style="margin-top: 20px; margin-bottom: 20px;"><u>Select one of the models</u></p>

    <section>
        <div class="content-card">
            <ul class="container-ul-card">
                <?php foreach ($homePageModels as $type => $model): ?>
                    <?php if ($model): ?>
                        <div class="content-ul-card" onclick="window.location.href = '../models/modelsPage.php#<?php echo ($model['type'] == 'SUV' ? 'SUVW' : $model['type']) ?>'">
                            <li class="container-li-card">
                                <div class="content-li-card">
                                    <div class="info-li-card" style="background-color: <?php echo $model['color']; ?>;">
                                        <div class="subinfo-li-card">
                                            <div class="img-li-card">
                                                <img src="data:image/jpeg;base64,<?php echo $model['img']; ?>" title="<?php echo $model['name']; ?>" alt="<?php echo $model['name']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
</main>

<?php include '../../includes/footer.php'?>