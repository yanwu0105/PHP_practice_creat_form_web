<?php  
include "./connect_db.php";

$u_id = $_GET["id"];
//echo $u_id;
$sql = "DELETE FROM info_data WHERE id = ".$u_id;
$db->query($sql);
header("Location: ./index.php");
?>