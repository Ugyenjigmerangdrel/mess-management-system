<?php

require('connect.php');

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

        $stmt = $conn->prepare($sql);
        

        //$stmt = executeQuery($sql, $conditions);
        //$records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

        return $records;
    }
}

$hello = selectAll('users');

printD($hello);