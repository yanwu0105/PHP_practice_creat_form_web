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

			$hobby_array = $i["hobby"];
			$hobby_list = explode(",",$i["hobby"]);
			$arrlength = count($hobby_list);
			echo '興趣: <input type="checkbox" name="hobby[]" value="Basketball"';
			for($x=0;$x<$arrlength;$x++) {
				if ($hobby_list[$x] == "Basketball") {
					echo "checked";
				}
			}
			echo '>籃球';
			echo '<input type="checkbox" name="hobby[]" value="Baseball"';
			for($x=0;$x<$arrlength;$x++) {
				if ($hobby_list[$x] == "Baseball") {
					echo "checked";
				}
			}
			echo '>棒球';
			echo '<input type="checkbox" name="hobby[]" value="Football"';
			for($x=0;$x<$arrlength;$x++) {
				if ($hobby_list[$x] == "Football") {
					echo "checked";
				}
			}
			echo '>足球<br>';
			echo '<input type="checkbox" name="hobby[]" value="Tennis"';
			for($x=0;$x<$arrlength;$x++) {
				if ($hobby_list[$x] == "Tennis") {
					echo "checked";
				}
			}
			echo '>網球';
			echo '<input type="checkbox" name="hobby[]" value="Badminton"';
			for($x=0;$x<$arrlength;$x++) {
				if ($hobby_list[$x] == "Badminton") {
					echo "checked";
				}
			}
			echo '>羽毛球';
			echo '<input type="checkbox" name="hobby[]" value="Pingpong"';
			for($x=0;$x<$arrlength;$x++) {
				if ($hobby_list[$x] == "Pingpong") {
					echo "checked";
				}
			}
			echo '>乒乓球<br>';
	      	echo '自我介紹: <textarea name="info" cols="30" rows="5" >'.$i['info'].'</textarea><br>';
	      }
	    ?>
	<input type="submit" value="送出">   	
	</form>
</html>






