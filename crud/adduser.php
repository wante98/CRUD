<?php
require_once 'functions.php';
//首先進行非空排錯
if(!isset($_POST['name'])){
    die('name is not define');
}
if(!isset($_POST['age'])){
    die('age is not define');
}
$name=$_POST['name'];
$age=$_POST['age'];
if(empty($name)){
    die('name is empty');
}
if(empty($age)){
    die('age is empty');
}
//連線資料庫
connnetDb();
$mysqli=new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW, "test");


//執行型別轉換，防止SQL注入
$age=intval($age);
//插入資料
$sql_query = ("INSERT INTO users(name,age) VALUES ('$name',$age)");
// mysqli_query("INSERT INTO users(name,age) VALUES ('$name',$age)");
mysqli_query($mysqli,$sql_query);

//返回列表頁面
if(mysqli_error()){
    echo mysqli_error();
}else{
    header("Location:allusers.php");
}
