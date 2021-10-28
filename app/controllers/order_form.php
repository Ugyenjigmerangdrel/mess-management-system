<?php

include($ROOTPATH.'/app/database/db.php');
include($ROOTPATH.'/app/helpers/validateItem.php');

$error = array();

$table = 'order_table';
$item_id = "";
$quantity = "";
$rate = "";
$ordered_by  = "";
$supplier = "";
$order_no = "";


$order_details = selectAll($table);

if(isset($_GET['del_id'])){
    $count = delete($table, $_GET['del_id']);

    $_SESSION['message'] = "Post Successfully Deleted";
    header('location:'. $BASE_URL. "/mess/item_list.php");
}


if (isset($_POST['save_multiple_data'])){
    unset($_POST['save_multiple_data']);
    
    $item_name = $_POST['item_supplying'];
    $quantity = $_POST['quantity'];
    $order = $_POST['order_no'];
    $data = array();
    $item_data = array();
    $quantity_data = array();
    $by = $_SESSION['username'];
    foreach($item_name as $index => $names)
    {
        global $conn;
        $s_names = $names;
        $s_quantity = $quantity[$index];
        $i_data = selectOne('item_table', ['item_name' => $s_names]);
        $s_rate = $i_data['item_rate'];
        $s_ordered_by = $_SESSION['username'];
        $su_data = selectOne('supplier_table', ['item_supplying' => $s_names]);
        $s_supplier = $su_data['supplier_name'];
        $order_no = $order;
        $amount = $s_quantity*$s_rate;


        //Order Detail Update
        $query = "INSERT INTO order_table (item_supplying, quantity, rate, ordered_by, supplier, order_no, amount) VALUES ('$s_names','$s_quantity', '$s_rate', '$s_ordered_by', '$s_supplier', '$order_no', '$amount');";
       
        
        $query_run = mysqli_query($conn, $query); 
    }
    //Order View Update
    $u_query= "INSERT INTO order_update (order_no, ordered_by) VALUES ('$order', '$by');";
       
        
    $u_run = mysqli_query($conn, $u_query); 
    if($query_run && $u_run)
    {
        $_SESSION['status'] = "Multiple Data Inserted Successfully";
        header("Location: order_list.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: order_list.php");
        exit(0);
    }
    

}






/**$s_quantity = $quantity[$index];
        // $s_otherfiled = $empid[$index];
        
        $_POST['quantity'] = $s_quantity;

        $item_name = selectOne('item_table', ['item_name' => $names]);
        $_POST['rate'] = $item_name['item_rate'];
        $_POST['item_supplying'] = $names;
        $supplier_name = selectOne('supplier_table', ['item_supplying' => $names]);
        $_POST['supplier'] = $supplier_name['supplier_name'];
        $_POST['ordered_by'] = 'admin1';
        $_POST['order_no'] = '12';
        
        //printD($_POST);
        $order_id = create($table, $_POST);
        //printD($item_id);
        header('location:'.$BASE_URL.'/mess/order_form.php');
        //$query = "INSERT INTO demo (name,phone) VALUES ('$s_name','$s_phone')";
        //$query_run = mysqli_query($con, $query); */