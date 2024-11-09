<!-- [
    * Home Page Rules
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
            'type' => $model['typeModels'],
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
        }
    }

    $homePageModels = [
        'SUV' => $suvwModels[0] ?? null,
        'Hatch' => $hatchModels[0] ?? null,
        'Sedan' => $sedanModels[1] ?? null,
    ];

?>