<?php 

try {

  include "./connect_db.php";

  $u_id = $_POST["id"];
  $u_name = $_POST["name"];
  $u_age = $_POST["age"];
  $u_sex = $_POST['sex'];
  $u_edu = $_POST['education'];
  $hobby = $_POST['hobby'];
  $u_hobby = implode(",",$hobby);
  $u_info = $_POST['info'];

  $sql = "UPDATE info_data SET name = '$u_name',age = '$u_age',sex = '$u_sex',education = '$u_edu',hobby = '$u_hobby',info = '$u_info' where id = '$u_id'";

  $db->query($sql);
  header("Location: ./index.php");
  //echo "1 record added";
//$mysqli->query($sql)

} catch (Exception $e) {
  echo "Connecting faiiure: " . $e->getMessage();
}
?>
