<!-- [
    * Models Page Rules
    *
    * This file is used to pull information from models into the database.
    *
] -->
<?php
    include '../../sql/pdo.php';

    $query = $pdo->prepare('SELECT * FROM models');
    $query->execute();
    $models = $query->fetchAll();

    $suvwModels = [];
    $hatchModels = [];
    $sedanModels = [];
    $pickupModels = [];

    foreach ($models as $model) {
        $img = base64_encode($model['photoModels']);
        $modelData = [
            'name' => $model['nameModels'],
            'color' => $model['colorModels'],
            'availability' => $model['availabilityModel'],
            'img' => $img
        ];

        switch ($model['typeModels']) {
            case 'SUV':
                $suvwModels[] = $modelData;
                break;
            case 'Hatch':
                $hatchModels[] = $modelData;
                break;
            case 'Sedan':
                $sedanModels[] = $modelData;
                break;
            case 'Pickup':
                $pickupModels[] = $modelData;
                break;
        }
    }

    $suvw = count($suvwModels);
    $hatch = count($hatchModels);
    $sedan = count($sedanModels);
    $pickup = count($pickupModels);
?>
