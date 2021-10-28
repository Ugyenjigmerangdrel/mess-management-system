<?php

include($ROOTPATH.'/app/database/db.php');
include($ROOTPATH.'/app/helpers/validateUser.php');

$errors = array();

$username = '';
$password = '';

$table = 'users';


function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['user_role'] = $user['user_role'];
    $_SESSION['message'] = 'Sucessfully Logged In';
    $_SESSION['type'] = 'success';
    header('location:'. $BASE_URL. '/mess/dashboard.php');
    exit();
}

if (isset($_POST['login'])) {
    //printD($_POST);
    $errors = validateLogin($_POST);

    if (count($errors) === 0){
        $user = selectOne($table, ['username' => $_POST['username']]);

        if ($user && password_verify($_POST['password'], $user['password'])){
            //login and redirect
            loginUser($user);
        } else{
            array_push($errors, 'Wrong Credientials');
            $username = $_POST['username'];
            $password = '';
        }
    }
} 

