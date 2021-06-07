<?php

function validateLogin($user){
    $errors = array();

    if (empty($user['username'])){
        array_push($errors, true);
    }

    if (empty($user['password'])){
        array_push($errors, true);
    }

    return $errors;
}