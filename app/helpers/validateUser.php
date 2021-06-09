<?php

function validateLogin($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, "missing");
    }

    if (empty($user['password'])){
        array_push($errors, "missing");
    }

    return $errors;
}
