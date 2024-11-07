<!-- [
    * Sign In Page Rules
    *
    * This file is used to log a user into the project.
    *
] -->
<?php
    include '../../sql/pdo.php';

    function notify($type, $message, $url){
        header("Location: {$url}.php?" . http_build_query([
            $type . "_"=> 1,
            'message' => $message
        ]));
        exit();
    };

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        notify('error', 'Please fill in all fields!', 'signInPage');
        exit();
    };

    $query = $pdo->prepare('SELECT * FROM users WHERE emailUser = ?');
    $query->execute([$email]);
    $user = $query->fetch();

    if (!$user || !password_verify($password, $user['passwordUser'])) {
        notify('error', 'Invalid email or password!', 'signInPage');
        exit();
    };

    session_start();

    $_SESSION['user'] = [
        'id' => $user['idUser'],
        'name' => $user['nameUser'],
        'email' => $user['emailUser'],
        'admin' => $user['adminUser'],
        'logged' => true
    ];

    if ($user['adminUser'] === 1) {
        header('Location: ../dashboard/dashboardPage.php');
        exit();
    }else{
        header('Location: ../home/homePage.php');
    }

    exit();
?>