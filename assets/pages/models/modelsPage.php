<!-- /**
    * Models Page
    *
    * This file contains the Models page of website.
    *
*/ -->
<?php
    include "./modelsPage.rules.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="shortcut icon" type="image/x-icon" sizes="32x32" href="../../gfx/volkswagen-logo.png" />
    <title>VW: Volkswagen | Home</title>
</head>
<body>
   <header class="header-models-page">
      <?php include '../../includes/menu.php'; ?>
   </header>

   <main>
        <section class="titles">
            <p class="models-title">Models</p>
            <div class="line"></div>
        </section>

        <?php
            $sections = [
                'Hatch' => $hatchModels,
                'Sedan' => $sedanModels,
                'SUVW' => $suvwModels,
                'Pickup' => $pickupModels,
            ];

            foreach ($sections as $title => $models):
        ?>
                <section class="section-content-models" id="<?php echo $title; ?>">
                    <div class="title-models">
                        <h1><?php echo $title . " (" . count($models) . ")"; ?></h1>
                    </div>
                    <div class="content-card">
                        <ul class="container-ul-card">
                            <?php foreach ($models as $index => $model): ?>
                                <div class="content-ul-card">
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
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </section>
        <?php endforeach; ?>
   </main>

<?php include '../../includes/footer.php'; ?>
</body>
</html>