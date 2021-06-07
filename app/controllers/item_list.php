<?php

include($ROOTPATH.'/app/database/db.php');

$errors = array();
$table = 'item_table';
$item_name = "";
$quantity_unit = "";
$description = "";
$item_rate = "";


$item = selectAll($table);

if (isset($_POST['submit'])){
    unset($_POST['submit']);
    //printD($_POST);
    $item_id = create($table, $_POST);
}