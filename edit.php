<?php  
include "./connect_db.php";

$u_id = $_GET["id"];
$sql = "SELECT * FROM info_data WHERE id = ".$u_id ;
$result = $db->query($sql);
$rows = $result->fetchAll();
?>


<html>
<body>
	<form action="updata.php" method="post">
		<?php 
		foreach($rows as $i){
			echo '<input type="hidden" name="id" value="'.$u_id.'">';
			echo "姓名: <input type='text' name='name' value='".$i['name']."'><br>";
      		echo "年齡: <input type='text' name='age' value='".$i['age']."'><br>";
      		echo '性別: 
      		<input type="radio" name="sex" value="Male" ';
      		if($i['sex']=="Male") {echo 'checked';}
      		echo '>男';
	      	echo '<input type="radio" name="sex" value="Female" ';
	      	if($i['sex']=="Female") {echo 'checked';}
	      	echo '>女<br>';
	      	echo '教育程度: <Select name="education" size=1>
	      	<option>請選擇</option>
	      	<option value="Elementary" ';
	      	if($i['education']=="Elementary") {echo 'selected';}
	      	echo '>國小</option>';
	      	echo '<option value="Junior" ';
	      	if($i['education']=="Junior") {echo 'selected';}
	      	echo '>國中</option>';
	      	echo '<option value="senior" ';
	      	if($i['education']=="senior") {echo 'selected';}
	      	echo '>高中</option>';
	      	echo '<option value="University" ';
	      	if($i['education']=="University") {echo 'selected';}
	      	echo '>大學</option>';
	      	echo '<option value="Graduate" ';
	      	if($i['education']=="Graduate") {echo 'selected';}
	      	echo '>研究所以上</option></Select><br>';
	      	echo '興趣: <input type="checkbox" name="hobby[]" value="Basketball">籃球
	      	<input type="checkbox" name="hobby[]" value="Baseball">棒球
	      	<input type="checkbox" name="hobby[]" value="Football">足球<br>
	      	<input type="checkbox" name="hobby[]" value="Tennis">網球
	      	<input type="checkbox" name="hobby[]" value="Badminton">羽毛球
	      	<input type="checkbox" name="hobby[]" value="Pingpong">乒乓球<br>';
	      	echo '自我介紹: <textarea name="info" cols="30" rows="5" >'.$i['info'].'</textarea><br>';
	      }
	    ?>
	<input type="submit" value="送出">   	
	</form>
</html>






