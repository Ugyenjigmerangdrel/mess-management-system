<?php

include($ROOTPATH.'/app/database/db.php');
include($ROOTPATH.'/app/helpers/validateItem.php');

$error = array();

$table = 'item_table';
$item_name = "";
$quantity_unit = "";
$description = "";
$item_rate = "";


$item = selectAll($table);

if (isset($_POST['submit'])){
    unset($_POST['submit']);
    //printD($_POST);
    $error = validateItem($_POST);

    if (empty($error)){
        $item_id = create($table, $_POST);
        //printD($item_id);
        header('location:'.$BASE_URL.'/mess-management-system/item_list.php');
    } else {
        $item_name = $_POST['item_name'];
        $quantity_unit = $_POST['quantity_unit'];
        $description = $_POST['description'];
        $item_rate = $_POST['item_rate'];
    }

    

}