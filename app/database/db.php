<?php
session_start();
require('connect.php');

function executeQuery($sql, $data){
    global $conn;
    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function printD($value) // development use needs to be deleted for production
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}

function selectAll($table, $conditions = []){
    global $conn;

    $sql = "SELECT * FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    } else{
        $i = 0;

        foreach ($conditions as $key => $value) {
            if ($i === 0){
                $sql = $sql . " WHERE $key= ?";
            } else{
                $sql = $sql . " AND $key= ?";
            }
            $i++;
        }
        /**In order to prevent from sql inject where the user might type in sql codes which will be directly executed code, in order to prevent that from happening we will be using bind parameters. */

       
        $stmt = executeQuery($sql, $conditions);
        //$stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }
}

function selectOrder($table, $conditions = []){
    global $conn;

    $sql = "SELECT item_supplying, quantity, rate, amount FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    } else{
        $i = 0;

        foreach ($conditions as $key => $value) {
            if ($i === 0){
                $sql = $sql . " WHERE $key= ?";
            } else{
                $sql = $sql . " AND $key= ?";
            }
            $i++;
        }
        /**In order to prevent from sql inject where the user might type in sql codes which will be directly executed code, in order to prevent that from happening we will be using bind parameters. */

       //printD($sql);
        $stmt = executeQuery($sql, $conditions);
        //$stmt = executeQuery($sql, $conditions);
        $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }
}

function display_order($table, $col){
    global $conn;

    $sql = "SELECT * FROM $table ORDER BY $col DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    return $records;
}


function selectOne($table, $conditions)//second parameter is compulsory
{ 
    global $conn;

    $sql = "SELECT * FROM $table"; //for sql query and php variable to work together we need to use "";
  
        
    $i = 0;
    foreach ($conditions as $key => $value) {
    
        if ($i === 0) {
            $sql = $sql . " WHERE $key= ?";
        } else{
            $sql = $sql . " AND $key= ?";
        }
        $i++;
    } 

    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc(); 

    return $records;   

}

function create($table, $data){
    global $conn;
    $sql = "INSERT INTO $table SET";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i === 0) {
            $sql = $sql . " $key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
}

function delete($table, $id){
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
}


function searchItem($term){
    $match = '%' . $term . '%';
    global $conn;
    $sql = "SELECT * 
            FROM item_table WHERE item_name LIKE ?
            ";

    $stmt = executeQuery($sql, ['item_name' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC); 

    return $records;   
}