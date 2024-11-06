<!-- [
    * Sign Up Page Rules
    *
    * This file is used to register a new user in the database.
    *
] -->
<?php 
    include '../../sql/pdo.php';

    function notify($type, $message, $url){
        if ($type == 'error') {
            header('Location: '.$url.'.php?error_=1&message='.urlencode($message));
            exit();
        } else if ($type == 'success') {
            header('Location: '.$url.'.php?success_=1&message='.urlencode($message));
            exit();
        }else{
            header('Location: '.$url.'.php');
            exit();
        }
    };

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $admin = isset($_POST['adm']) ? 1 : 0;
    
    if (empty($name) || empty($email) || empty($password)) {
        notify('error', 'Please fill in all fields!', 'signUpPage');
        exit();
    };

    if (strlen($password) < 6) {
        notify('error', 'Password must have at least 6 characters!', 'signUpPage');
        exit();
    };
    
    $query = $pdo->prepare('SELECT * FROM users WHERE emailUser = ?');
    $query->execute([$email]);
    $user = $query->fetch();
    
    if ($user) {
        notify('error', 'Email already registered!', 'signUpPage');
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

    session_start();

    $_SESSION['user'] = [
        'id' => $newId,
        'name' => $name,
        'email' => $email,
        'admin' => $admin
    ];
    
    if ($admin === 1) {
        header('Location: ../home/homePage.php');
    } else {
        notify('success', 'User registered successfully!', '../signIn/signInPage');
    };

    exit();
?>