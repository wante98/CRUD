<?php
    require_once 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>所有使用者</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td{
            border:1px solid #ccccff;
            padding: 5px;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
<h1>會員資料總表</h1>
<a href="adduser.html">新增使用者</a>
<table>
    <tr><th>id</th><th>名字</th><th>年齡</th><th>修改/刪除</th></tr>
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//連線資料庫
connnetDb();
$mysqli=new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PW, "test");
//查詢資料表中的所有資料,並按照id降序排列
// $query = "SELECT * FROM users ORDER BY id DESC";
$query = "SELECT * FROM users ORDER BY id";

$result = $mysqli -> query($query);  //???

// $result=mysqli_query("SELECT * FROM users ORDER BY id DESC");
//獲取資料表的資料條數
$dataCount=mysqli_num_rows($result);
//echo $dataCount;
//列印輸出所有資料


// for($i=0;$i<$dataCount;$i++){
    // $result_arr = $result->fetch_array(MYSQLI_ASSOC);
    // $result_arr=mysqli_fetch_array($result);
    // $id=$result_arr['id'];
    // $name=$result_arr['name'];
    // $age=$result_arr['age'];
    // echo "<tr><td>$id</td><td>$name</td><td>$age</td><td><a href='edituser.php?id=$id'>修改</a> <a href='delete.php?id=$id'>刪除</a></td></tr>";
// }
while($result_arr=mysqli_fetch_array($result))
	  {
		  $id=$result_arr['id'];
			$name=$result_arr['name'];
			$age=$result_arr['age'];
			
			echo"<tr>";
			echo"<td>$id</td>";
			echo"<td>$name</td>";
			echo"<td>$age</td>";
			echo"<td><a href='edituser.php?id=$id'>修改</a> <a href='delete.php?id=$id'>刪除</a></td></tr>";
			echo"</tr>";
			
	  }
	  echo"</table>";

?>
</table>
</body>
</html>
