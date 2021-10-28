<?php

function validateItem($item){
    $errors = array();

    if (empty($item['supplier_name'])){
        array_push($errors, "Supplier Name Required");
    }

    if (empty($item['supplier_address'])){
        array_push($errors, "Supplier Address Required");
    }
    
    if (empty($item['supplier_contact'])){
        array_push($errors, "Supplier Contact Required");
    }

    if (empty($item['item_supplying'])){
        array_push($errors, "Item Supplying Required");
    }

    return $errors;
}