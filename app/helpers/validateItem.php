<?php

function validateItem($item){
    $errors = array();

    if (empty($item['item_name'])){
        array_push($errors, "Item Name Required");
    }

    if (empty($item['quantity_unit'])){
        array_push($errors, "Quantity Unit Required");
    }
    
    if (empty($item['description'])){
        array_push($errors, "Description Required");
    }

    if (empty($item['item_rate'])){
        array_push($errors, "Item Rate Required");
    }

    return $errors;
}