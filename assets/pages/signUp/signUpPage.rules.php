<!-- [
    * Sign Up Page Rules
    *
    * This file is used to register a new user in the database.
    *
] -->
<?php 

    include '../../sql/pdo.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admin = $_POST['adm'] ?? 0;

    $query = $pdo->prepare('INSERT INTO users (idUser, nameUser, emailUser, passwordUser, adminUser) VALUES (null, ?, ?, ?, ?)');
    $query->execute(array($name, $email, $password, ($admin ? 1 : 0)));
    echo 'User registered successfully!';
?>