<?php
   include '../../sql/pdo.php';

   $sql = $pdo->prepare('SELECT * FROM users');
   $sql->execute();
   $users = $sql->fetchAll();

   $dataListUsers = [];

   foreach ($users as $user => $value) {
      $dataListUsers[] = [
         'id' => $value['idUser'],
         'name' => $value['nameUser'],
         'email' => $value['emailUser'],
         'admin' => $value['adminUser']
      ];
   };

   if (isset($_GET['delete'])){
      $id = $_GET['delete'];
      $sql = $pdo->prepare('DELETE FROM users WHERE idUser = :id');
      $sql->bindParam(':id', $id);
      $sql->execute();
      header('Location: listUsersPage.php');
  };
?>