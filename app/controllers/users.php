<?php

include($ROOTPATH.'/app/database/db.php');

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
    header('location:'. $BASE_URL. '/mess-management-system/dashboard.php');
    exit();
}

if (isset($_POST['login'])) {
    //printD($_POST);
    $user = selectOne($table, ['username' => $_POST['username']]);

    if ($user['id'] === 1){
        //login and redirect
        loginUser($user);
    } else{
        echo "Not success";
    }
} 

