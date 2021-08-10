<?php
require_once 'config.php';
function connnetDb(){
    //連線mysql資料庫
    $mysqli=new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW, "test");
    //排除連線資料庫異常錯誤
    if(!$mysqli){
        die('can not connect db');
    }

    //在mysql中選中myapp資料庫
    // mysqli_select_db("test");
    // return $conn;
  }
?>
