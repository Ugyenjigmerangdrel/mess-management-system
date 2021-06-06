<?php

include('C:/xampp/htdocs/mess-management-system/app/database/db.php');

$errors = array();

$username = '';
$password = '';

$table = 'users';


function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];

    $_SESSION['message'] = 'Sucessfully Logged In';
    $_SESSION['type'] = 'success';
    header('location:'.'C:/xampp/htdocs/mess-management-system');
    exit();
}

if (isset($_POST['login'])) {
    //printD($_POST);
    $errors = 0;

    if (count($errors) === 0){
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user){
            //login and redirect
            loginUser($user);
        } else{
            echo "Not success";
        }
    }
} 

