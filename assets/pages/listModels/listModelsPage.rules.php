<?php
    include '../../sql/pdo.php';

    $sql = $pdo->prepare('SELECT * FROM models');
    $sql->execute();
    $models = $sql->fetchAll();

    $dataListModels = [];

    foreach ($models as $model => $value) {
        $img = base64_encode($value['photoModels']);

        $dataListModels[] = [
            'id' => $value['idModels'],
            'name' => $value['nameModels'],
            'type' => $value['typeModels'],
            'color' => $value['colorModels'],
            'img' => $img,
            'availability' => $value['availabilityModel']
        ];
    };

    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $sql = $pdo->prepare('DELETE FROM models WHERE idModels = :id');
        $sql->bindParam(':id', $id);
        $sql->execute();
        header('Location: listModelsPage.php');
    };
?>