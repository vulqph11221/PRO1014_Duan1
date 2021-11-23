<?php
function pdo_get_connection(){
    $dburl = "mysql:host=localhost;dbname=duan1_PRO1014;charset=utf8";
    $username = 'root';
    $password = '';

    $conn = new PDO($dburl,$username,$password);
    $conn-->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
    return $conn;
}

function pdo_excute($sql){
    $sql_args = array_slice(func_get_args(),1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt =->excute(sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
?>