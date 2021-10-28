<?php

include($ROOTPATH.'/app/database/db.php');


$table = 'receipt_table';
$item_id = "";
$quantity = "";
$rate = "";
$ordered_by  = "";
$supplier = "";
$order_no = "";


$receipt = selectAll($table);


if (isset($_POST['submit'])){
    unset($_POST['submit']);
    printD($_POST);
    $error = validateItem($_POST);

    if (empty($error)){
        $item_id = create($table, $_POST);
        //printD($item_id);
        header('location:'.$BASE_URL.'/mess/item_list.php');
    } else {
        $item_name = $_POST['item_name'];
        $quantity_unit = $_POST['quantity_unit'];
        $description = $_POST['description'];
        $item_rate = $_POST['item_rate'];
    }

    

}