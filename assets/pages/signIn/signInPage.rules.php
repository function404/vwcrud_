<!-- [
    * Sign In Page Rules
    *
    * This file is used to log a user into the project.
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
    ];

    if ($user['adminUser'] === 1) {
        header('Location: ../dashboard/dashboardPage.php');
    } else {
        header('Location: ../home/homePage.php');
    };

    exit();
?>