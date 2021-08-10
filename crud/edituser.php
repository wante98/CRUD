<?php
require_once 'functions.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改使用者資料</title>
</head>
<body>
  <?php
      if(!empty($_GET['id'])){
          //連線mysql資料庫
          connnetDb();
          $mysqli=new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW, "test");


          //查詢id
          // $id=intval($_GET['id']);
          $id=$_GET['id'];
          $query="SELECT * FROM users WHERE id=$id";
          $result=mysqli_query($mysqli, $query);
          // if(mysqli_error()){
          //     die('can not connect db');
          // }
          //獲取結果陣列
          $result_arr=mysqli_fetch_assoc($result);
      }else{
          die('id not define');
      }
  ?>
<form action="edituser_server.php" method="post">
    <label>使用者ID：</label><input type="text" name="id" value="<?php echo $result_arr['id']?>">
    <label>使用者名稱：</label><input type="text" name="name" value="<?php echo $result_arr['name']?>">
    <label>使用者年齡：</label><input type="text" name="age" value="<?php echo $result_arr['age']?>">
    <input type="submit" value="提交修改">
</form>
</body>
</html>
