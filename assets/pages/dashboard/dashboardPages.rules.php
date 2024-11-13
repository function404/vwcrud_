<!-- [
    * Dashboard Page Rules
    *
    * This file is used to manage dashboard page states.
    *
] -->
<?php
    include '../../sql/pdo.php';

    $query = $pdo->prepare('SELECT * FROM users');
    $query->execute();
    $users = $query->fetchAll();

    $consumers = 0;
    $admins = 0;
    $allusers = 0;

    foreach ($users as $user) {
        if ($user['adminUser'] == 0) {
            $consumers++;
        } else {
            $admins++;
        }
        $allusers++;
    };

    $query = $pdo->prepare('SELECT * FROM models');
    $query->execute();
    $models = $query->fetchAll();

    $allmodels = 0;
    $hatch = 0;
    $sedan = 0;
    $suv = 0;
    $pickup = 0;

    foreach ($models as $model) {
        switch ($model['typeModels']) {
            case 'Hatch':
                $hatch++;
                break;
            case 'Sedan':
                $sedan++;
                break;
            case 'SUV':
                $suv++;
                break;
            case 'Pickup':
                $pickup++;
                break;
        }

        $allmodels++;
    };
    
?>