<?php
   include '../../sql/pdo.php';

   $sql = $pdo->prepare('SELECT * FROM users');
   $sql->execute();
   $users = $sql->fetchAll();

   echo '<div class="container-table">';
   echo "<table class='users-table'>";
   echo '<tr>';
   echo '<th>Id</th>';
   echo '<th>Name</th>';
   echo '<th>Email</th>';
   echo '<th>Admin</th>';
   echo '<th>Actions</th>';
   echo '</tr>';

   foreach ($users as $user => $value) {
      echo '<tr>';
      echo '<td>'.$value['idUser'].'</td>';
      echo '<td>'.$value['nameUser'].'</td>';
      echo '<td>'.$value['emailUser'].'</td>';
      echo '<td>'.$value['adminUser'].'</td>';
      echo '<td>
               <button class="edit-btn"><i class="fa-solid fa-pen"></i></button>
               <button class="delete-btn"><i class="fa-solid fa-trash-can"></i></button>
            </td>';
      echo '</tr>';
   }
   echo '</table>';
   echo '</div>';
?>