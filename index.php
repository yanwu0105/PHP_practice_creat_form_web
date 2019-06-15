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
      echo "<td>".$i['name']."</td>";
      echo "<td>".$i['age']."</td>";
      switch ($i['sex']) {
        case 'Male':
          echo "<td>男</td>";
          break;
        case 'Female':
          echo "<td>女</td>";
          break;
        default:
          echo "<td>na</td>";
          break;
      }
      switch ($i['education']) {
        case 'Elementary':
          echo "<td>國小</td>";
          break;
        case 'Junior':
          echo "<td>國中</td>";
          break;
        case 'senior':
          echo "<td>高中</td>";
          break;
        case 'University':
          echo "<td>大學</td>";
          break;
        case 'Graduate':
          echo "<td>研究所以上</td>";
          break;
        default:
          echo "<td>na</td>";
          break;
      }
      $hobby_list = explode(",",$i["hobby"]);
      $arrlength = count($hobby_list);
      $hobby_ch = array();
      for($x=0;$x<$arrlength;$x++) {
        switch ($hobby_list[$x]) {
          case 'Basketball':
          array_push($hobby_ch, "籃球");
          break;
        case 'Baseball':
          array_push($hobby_ch, "棒球");
          break;
        case 'Football':
          array_push($hobby_ch, "足球");
          break;
        case 'Tennis':
          array_push($hobby_ch, "網球");
          break;
        case 'Badminton':
          array_push($hobby_ch, "羽毛球");
          break;
        case 'Pingpong':
          array_push($hobby_ch, "乒乓球");
          break; 
        default:
          break;
        }
      }
      echo "<td>".implode(",",$hobby_ch)."</td>";
      echo "<td>".$i['info']."</td>";
      echo "<td><button type='button' name='id' onclick=(location.href='edit.php?id=".$i['id']."')>修改</button></td>";
      echo "<td><button type='button' name='id' onclick=(location.href='delete.php?id=".$i['id']."')>刪除</button></td>";
    }
    ?>
  </table>
</body>
</html>

