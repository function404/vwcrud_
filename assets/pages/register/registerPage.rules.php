<?php
    include '../../sql/pdo.php';

    function notify($type, $message, $url){
        $paramType = isset($_GET['type']) && $_GET['type'] == 'models' ? 'error_models' : 'error_key';
        header("Location: {$url}?" . http_build_query([
            $type . "_"=> 1,
            $paramType => 1,
            'message' => $message
        ]));
        exit();
    }
    
    if (isset($_GET['type'])) {
        if ($_GET['type'] == 'models') {
            $name = trim($_POST['name']);
            $type = trim($_POST['type']);
            $color = trim($_POST['color']);
            $imageFile = $_FILES['image'];
        
            if (empty($name) || empty($type) || empty($imageFile['tmp_name'])) {
                notify('error', 'Fill in all fields', 'registerPage.php');
                exit();
            }
        
            $imageData = file_get_contents($imageFile['tmp_name']);
        
            $query = $pdo->prepare('SELECT MAX(idModels) AS max_id FROM `models`');
            $query->execute();
            $result = $query->fetch();
            $newId = ($result['max_id'] ? $result['max_id'] + 1 : 1);

            $sql = $pdo->prepare('INSERT INTO `models` (idModels, nameModels, typeModels, colorModels, photoModels, availabilityModel) VALUES (?, ?, ?, ?, ?, ?)');
            $sql->execute([
                $newId,
                $name,
                $type,
                $color,
                $imageData,
                1
            ]);
        
            notify('success', 'Vehicle registered successfully', 'registerPage.php');
            exit();
        } else if ($_GET['type'] == 'keys') {
            $number = trim($_POST['number']);
            $number2 = trim($_POST['number2']);

            if (empty($number) || empty($number2)) {
                notify('error', 'Fill in all fields', 'registerPage.php');
                exit();
            };

            if (strlen($number) < 6 || strlen($number2) < 6) {
                notify('error', 'The key must have at least 6 digits', 'registerPage.php');
                exit();
            };

            if ($number !== $number2) {
                notify('error', 'The keys do not match', 'registerPage.php');
                exit();
            };

            $query = $pdo->prepare('SELECT MAX(idKey) AS max_id FROM `keys`');
            $query->execute();
            $result = $query->fetch();
            $newId = ($result['max_id'] ? $result['max_id'] + 1 : 1);

            $query = $pdo->prepare('SELECT * FROM `keys` WHERE `key` = ?');
            $query->execute([$number]);

            if ($query->fetch()) {
                notify('error', 'Key already registered', 'registerPage.php');
                exit();
            };

            $sql = $pdo->prepare('INSERT INTO `keys` (idKey, `key`) VALUES (?, ?)');
            $sql->execute([
                $newId,
                $number
            ]);

            notify('success', 'Key registered successfully', 'registerPage.php');
            exit();
        };
    };
?>