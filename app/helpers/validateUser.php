<?php

function validateLogin($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, "Username is required");
    }

    if (empty($user['password'])){
        array_push($errors, "Password is required");
    }

    return $errors;
}
