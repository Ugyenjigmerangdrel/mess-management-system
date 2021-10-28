<?php

include($ROOTPATH.'/app/database/db.php');
include($ROOTPATH.'/app/helpers/validateSupplier.php');

$error = array();

$table = 'supplier_table';
$supplier_name = "";
$supplier_address = "";
$supplier_contact = "";
$item_supplying = "";


$item = selectAll($table);

if(isset($_GET['del_id'])){
    $count = delete($table, $_GET['del_id']);

    $_SESSION['message'] = "Post Successfully Deleted";
    header('location:'. $BASE_URL. "/mess/supplier.php");
}


if (isset($_POST['submit'])){
    unset($_POST['submit']);
    //printD($_POST);
    $error = validateItem($_POST);

    if (empty($error)){
        $item_id = create($table, $_POST);
        //printD($item_id);
        header('location:'.$BASE_URL.'/mess/supplier.php');
    } else {
        $supplier_name = $_POST['supplier_name'];
        $supplier_address = $_POST['supplier_address'];
        $supplier_contact = $_POST['supplier_contact'];
        $item_supplying = $_POST['item_supplying'];
    }

    

}