<?php
    include '../../sql/pdo.php';

    $sql = $pdo->prepare('SELECT * FROM models');
    $sql->execute();
    $models = $sql->fetchAll();

    echo '<div class="container-table">';
    echo "<table class='users-table models'>";
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Name</th>';
    echo '<th>Type</th>';
    echo '<th>Color</th>';
    echo '<th>Photo</th>';
    echo '<th>Availability</th>';
    echo '<th>Actions</th>';
    echo '</tr>';

    foreach ($models as $model => $value) {
        $img = base64_encode($value['photoModels']);
        echo '<tr>';
        echo '<td>'.$value['idModels'].'</td>';
        echo '<td>'.$value['nameModels'].'</td>';
        echo '<td>'.$value['typeModels'].'</td>';
        echo '<td>'.$value['colorModels'].'</td>';
        echo '<td><img src="data:image/jpeg;base64,'.$img.'" alt="dsadsad"></td>'; 
        echo '<td>'.$value['availabilityModel'].'</td>';
        echo '<td>
                <button class="edit-btn"><i class="fa-solid fa-pen"></i></button>
                <button class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
            </td>';
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
?>