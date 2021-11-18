<?php

include($ROOTPATH.'/app/database/db.php');


$table = 'receipt_table';
$item_name = "";
$quantity = "";
$rate = "";
$ordered_by  = "";
$supplier = "";
$order_no = "";

$x = 'hello';
$receipt = selectAll($table);


if (isset($_POST['submit'])){
    unset($_POST['submit']);
    $order_no = $_POST['order_no'];
    $item_name = $_POST['item_received'];
    $quantity = $_POST['quantity_received'];
    $rate = $_POST['item_rate'];
    $ordered_by = $_POST['ordered_by'];
    $comments = $_POST['comments'];
    $supplier = $_POST['item_supplier'];
    //printD(count($item_name));
    //$error = validateItem($_POST);
    
    foreach($item_name as $index => $names){
        global $conn;
        
        $s_names = $names;
        $s_quantity = $quantity[$index];
        $s_rate = $rate[$index];
        $s_supplier = $supplier[$index];
        $s_ordered_by = $ordered_by[$index];
        $s_comments = $comments;
        $order_no = $order_no;
        $amount = $s_quantity[$index]*$s_rate[$index];

        //printD($order_no);

        //Updating the receipt table
        $query = "INSERT INTO receipt_table (item, quantity, rate, ordered_by, supplier, order_no, amount, comments) VALUES ('$s_names','$s_quantity', '$s_rate', '$s_ordered_by', '$s_supplier', '$order_no', '$amount', '$s_comments');";
        
        $store_item = selectAll('store');
        //printD($store_item['item_name']);
        if ($store_item['item_name'] == $s_names){
            $given_quantity = $store_item['quantity'];
            $new_quantity = $given_quantity + $s_quantity;
            $store_sql = "UPDATE 'store' SET 'quantity' = '$new_quanity' WHERE 'item_name' = '$s_names'";
        } else{
            $store_sql = "INSERT INTO store (item_name, quantity) VALUES ('$s_names','$s_quantity');";
        }
        
        //printD($query);
        $store_query = mysqli_query($conn, $store_sql);
        $query_run = mysqli_query($conn, $query);  
    }

    if($query_run && $store_query)
    {
        $_SESSION['status'] = "Receipt Inserted Successfully";
        header("Location: received_table.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: received_table.php");
        exit(0);
    }
    

    

}
