<?php
require_once 'functions.php';

//排空錯誤
if(empty($_GET['id'])){
    die('id is empty');
}
//連線資料庫
connnetDb();
$mysqli=new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW, "test");

$id=intval($_GET['id']);

//刪除指定資料
$sql_query = ("DELETE FROM users WHERE id=$id");
mysqli_query($mysqli,$sql_query);

//排錯並返回頁面
if(mysqli_error()){
    echo mysqli_error();
}else{
    header("Location:allusers.php");
}

?>
