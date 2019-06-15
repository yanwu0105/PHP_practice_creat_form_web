<?php 

try {

  include "./connect_db.php";

  $u_name = $_POST["name"];
  $u_age = $_POST["age"];
  $u_sex = $_POST['sex'];
  $u_edu = $_POST['education'];
  $hobby = $_POST['hobby'];
  $u_hobby = implode(",",$hobby);
  $u_info = $_POST['info'];

  $sql = "INSERT INTO info_data (name, age, sex, education, hobby, info) VALUES ('$u_name','$u_age','$u_sex','$u_edu','$u_hobby','$u_info');";
  $db->query($sql);
  header("Location: ./index.php");
  //echo "1 record added";
//$mysqli->query($sql)

} catch (Exception $e) {
  echo "Connecting faiiure: " . $e->getMessage();
}
?>
