<?php
require_once 'functions.php';

if(empty($_POST['id'])){
    die('id is empty');
}
if(empty($_POST['name'])){
    die('name is empty');
}
if(empty($_POST['age'])){
    die('age is empty');
}


$id=intval($_POST['id']);
$name=$_POST['name'];
$age=intval($_POST['age']);


//連線資料庫
connnetDb();
$mysqli=new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW, "test");


//修改指定資料
$sql_query = ("UPDATE users SET name='$name',age=$age WHERE id=$id");
// mysqli_query("INSERT INTO users(name,age) VALUES ('$name',$age)");
mysqli_query($mysqli,$sql_query);



//排錯並返回
if(mysqli_error()){
    echo mysqli_error();
}else{
    header("Location:allusers.php");
}

?>
