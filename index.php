<?php 
include "./connect_db.php";
$sql = "SELECT * FROM info_data";
$result = $db->query($sql);
$rows = $result->fetchAll();
?>


<html>
<body>
  <input type="button" value="新增" onclick="location.href='inputdata.php'">
  <table border='1'>
    <tr><th>姓名</th><th>年齡</th><th>性別</th><th>教育程度</th><th>興趣</th><th>自我介紹</th><th>修改</th><th>刪除</th></tr>
    <?php 
    foreach($rows as $i){
      echo "<tr>";
      //echo "<td>".$i['id']."</td>";
      echo "<td>".$i['name']."</td>";
      echo "<td>".$i['age']."</td>";
      echo "<td>".$i['sex']."</td>";
      echo "<td>".$i['education']."</td>";
      echo "<td>".$i['hobby']."</td>";
      echo "<td>".$i['info']."</td>";
      echo "<td><button type='button' name='id' onclick=(location.href='edit.php?id=".$i['id']."')>修改</button></td>";
      echo "<td><button type='button' name='id' onclick=(location.href='delete.php?id=".$i['id']."')>刪除</button></td>";
    }
    ?>
  </table>
</body>
</html>


