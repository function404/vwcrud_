<!-- [
    * Sign Up Page Rules
    *
    * This file is used to register a new user in the database.
    *
] -->
<?php 

    include '../../sql/pdo.php';

    function notify($type, $message){
        if ($type == 'error') {
            header('Location: signUpPage.php?error_=1&message='.urlencode($message));
            exit();
        } else if ($type == 'success') {
            header('Location: signUpPage.php?success_=1&message='.urlencode($message));
            exit();
        }else{
            header('Location: signUpPage.php');
            exit();
        }
    };

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $admin = isset($_POST['adm']) ? 1 : 0;
    
    if (empty($name) || empty($email) || empty($password)) {
        notify('error', 'Please fill in all fields!');
        exit();
    };
    
    $query = $pdo->prepare('SELECT * FROM users WHERE emailUser = ?');
    $query->execute([$email]);
    $user = $query->fetch();
    
    if ($user) {
        notify('error', 'Email already registered!');
        exit();
    };
    
    $query = $pdo->prepare('SELECT MAX(idUser) AS max_id FROM users');
    $query->execute();
    $result = $query->fetch();
    $newId = ($result['max_id'] ? $result['max_id'] + 1 : 1);
    
    $query = $pdo->prepare('INSERT INTO users (idUser, nameUser, emailUser, passwordUser, adminUser) VALUES (?, ?, ?, ?, ?)');
    $query->execute([
        $newId,
        $name,
        $email,
        password_hash($password, PASSWORD_DEFAULT),
        $admin
    ]);
    
    notify('success', 'User registered successfully!');
    exit();
?>