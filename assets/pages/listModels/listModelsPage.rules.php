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

    if (isset($_POST['updateModel'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $color = $_POST['color'];
        $availability = $_POST['availability'];
        $imageFile = $_FILES['image'];

        if (isset($imageFile['tmp_name']) && $imageFile['size'] > 0) {
            $image = base64_encode(file_get_contents($imageFile['tmp_name']));

            $query = $pdo->prepare('UPDATE models SET nameModels = :name, typeModels = :type, colorModels = :color, availabilityModel = :availability, photoModels = :image WHERE idModels = :id');
            $query->bindParam(':id', $id);
            $query->bindParam(':name', $name);
            $query->bindParam(':type', $type);
            $query->bindParam(':color', $color);
            $query->bindParam(':availability', $availability);
            $query->bindParam(':image', $image);
            $query->execute();
            header('Location: listModelsPage.php?img=s');
            exit();
        } else {
            $query = $pdo->prepare('UPDATE models SET nameModels = :name, typeModels = :type, colorModels = :color, availabilityModel = :availability WHERE idModels = :id');
            $query->bindParam(':id', $id);
            $query->bindParam(':name', $name);
            $query->bindParam(':type', $type);
            $query->bindParam(':color', $color);
            $query->bindParam(':availability', $availability);
            $query->execute();
            header('Location: listModelsPage.php?img=not');
            exit();
        };
    };
?>